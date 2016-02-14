<?php
include('config.php');
if(isset($_POST['submit'])) {
  $userid=$_POST['user'];
  $pass=md5($_POST['pass']);
  $sql =mysql_query("SELECT * FROM users WHERE user_id='$userid' AND user_password='$pass' ");
  $data= mysql_fetch_array($sql);
  $UID = $data['user_id'];
  $uname =$data['user_name'];
  $pass1 =$data['user_password'];
  $type =$data['membership_type'];
  $phone=$data['user_phone'];
  $email=$data['user_email'];
  if($userid==$UID && $pass=$pass1){
    session_start();
    $_SESSION['user_name']=$uname;
    if($type=='Student'){
      echo "<script>location.assign('student.php')</script>";
    }else{
      echo "<script>location.assign('staff.php')</script>";
    }
  }else{
    echo "invalid input";
  }

}
 ?>
