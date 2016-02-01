<?php
require('config.php');

$newid = $_POST['userid'];
$newname = $_POST['username'];
$newpass = $_POST['userpass'];
$newphone = $_POST['userphone'];
$newemail = $_POST['useremail'];

$newpass = md5($newpass);

$insert = mysql_query("INSERT INTO users(`user_id`,`user_name`,`user_password`,`user_phone`,`user_email`)
VALUES ('$newid','$newname','$newpass','$newphone','$newemail');");

if($insert){
header("Location: /TWT/registered.php?status=reg_success");
}
?>
