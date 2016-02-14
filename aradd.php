<html>
<body>
<?php
include('config.php');
if(isset($_POST['Add']))
{
$roomid=$_POST['roomid'];
$roomtype=$_POST['roomtype'];
$roomcap=$_POST['roomcap'];
$sql=mysql_query("INSERT INTO room VALUES ('$roomid','$roomtype','$roomcap')");
if($sql)
{
header("location:admroomdisplay.php");
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
  <table border="1">
    <tr><td>Room ID: <input type="text" name="roomid"></td></tr>
    <tr><td>Room type:<input type="text" name="roomtype"></td></tr>
    <tr><td>Room Capacity:<input type="text" name="roomcap"></td></tr>
 <tr><td><input type="submit" name="Add"></td></tr>
</table>
</form>
</fieldset>
</body>
</html>
