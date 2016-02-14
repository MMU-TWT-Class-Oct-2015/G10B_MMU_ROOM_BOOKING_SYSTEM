<html>
<body>
<?php
include('config.php');
if(isset($_POST['Add']))
{
$userid=$_POST['uid'];
$uname=$_POST['uname'];
$pass=md5($_POST['upass']);
$type=$_POST['utype'];
$phone=$_POST['uphone'];
$email=$_POST['uemail'];
$sql=mysql_query("INSERT INTO users VALUES ('$userid','$uname','$pass','$type','$phone','$email')");
if($sql)
{
header("location:admuserdisplay.php");
}
}
?>
<fieldset style="width:400px;">
<form method="post" action="">
  <table border="1">
    <tr><td>User ID: <input type="text" name="uid"></td></tr>
    <tr><td>Username:<input type="text" name="uname"></td></tr>
    <tr><td>User password:<input type="password" name="upass"></td></tr>
    <tr><td>User member type:<input type="text" name="utype"></td></tr>
    <tr><td>User phone.no:<input type="text" name="uphone"></td></tr>
    <tr><td>User email:<input type="text" name="uemail"></td></tr>
 <tr><td><input type="submit" name="Add"></td></tr>
</table>
</form>
</fieldset>
</body>
</html>
