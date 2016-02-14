<?php
include('config.php');

if(isset($_POST['adminlog'])) {
  $adminid=$_POST['aid'];
  $adpass=md5($_POST['apass']);
  $sql = mysql_query(" SELECT * FROM admin WHERE admin_id='$adminid' AND admin_password='$adpass' ");
  $data= mysql_fetch_array($sql);
  $AID = $data['admin_id'];
  $aname =$data['admin_name'];
  $adpass1 =$data['admin_password'];
  if($adminid==$AID && $adpass=$adpass1){
    session_start();
    $_SESSION['admin_name']=$aname;
    echo "<script>location.assign('admin.php')</script>";
  }else{
    echo '<script language="javascript">';
    echo 'alert("Invalid input! try again!")';
    echo '</script>';
  }
}
?>
