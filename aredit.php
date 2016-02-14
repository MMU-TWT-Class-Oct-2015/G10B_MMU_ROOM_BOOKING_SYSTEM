<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$rid=$_POST['roomid'];
$type=$_POST['roomtype'];
$cap=$_POST['roomcap'];
$sql=mysql_query("UPDATE room set room_id='$rid', room_type='$type',room_capacity='$cap' where room_id='$id' ");
if($sql)
{
header('location:admroomdisplay.php');
}
}
$query1=mysql_query("SELECT * FROM room WHERE room_id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
  <table border="1">
<tr><td>Room ID:<input type="text" name="roomid" value="<?php echo $query2['room_id']; ?>" /></td></tr>
<tr><td>Room Type:<input type="text" name="roomtype" value="<?php echo $query2['room_type']; ?>" /></td></tr>
<tr><td>Room Capacity:<input type="text" name="roomcap" value="<?php echo $query2['room_capacity']; ?>" /></td></tr>
<tr><td><input type="submit" name="submit" value="Update" /></td></tr>
</table>
</form>
<?php
}
?>
</body>
</html>
