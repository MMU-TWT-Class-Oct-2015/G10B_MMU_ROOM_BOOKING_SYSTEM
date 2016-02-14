<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $userid=$_POST['uid'];
  $uname=$_POST['uname'];
  $pass=md5($_POST['upass']);
  $type=$_POST['utype'];
  $phone=$_POST['uphone'];
  $email=$_POST['uemail'];
$sql=mysql_query("UPDATE users set user_id='$userid', user_name='$uname',user_password='$pass',membership_type='$type',user_phone='$phone',user_email='$email'WHERE user_id='$id' ");
if($sql)
{
header('location:admuserdisplay.php');
}
}
$query1=mysql_query("SELECT * FROM users WHERE user_id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
  <table border="1">
<tr><td>User ID:                 <input type="text" name="uid" value="<?php echo $query2['user_id']; ?>" /></td></tr>
<tr><td>Username:             <input type="text" name="uname" value="<?php echo $query2['user_name']; ?>" /></td></tr>
<tr><td>User Password:    <input type="password" name="upass" value="<?php echo $query2['user_password']; ?>" /></td></tr>
<tr><td>Membership Type:<input type="text" name="utype" value="<?php echo $query2['membership_type']; ?>" /></td></tr>
<tr><td>User Phone.no:     <input type="text" name="uphone" value="<?php echo $query2['user_phone']; ?>" /></td></tr>
<tr><td>User Email:            <input type="text" name="uemail" value="<?php echo $query2['user_email']; ?>" /></td></tr>
<tr><td><input type="submit" name="submit" value="Update" /></td></tr>
</table>
</form>
<?php
}
?>
</body>
</html>
