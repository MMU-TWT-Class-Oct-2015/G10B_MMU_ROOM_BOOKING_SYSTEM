<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $bid=$_POST['bid'];
  $date=$_POST['date'];
  $stime=$_POST['stime'];
  $etime=($_POST['etime']);
  $organizer=$_POST['organizer'];
  $NOP=$_POST['nop'];
  $userid=$_POST['userid'];
  $roomid=$_POST['roomid'];
$sql=mysql_query("UPDATE booking set booking_id='$bid',date_of_book='$date', time_start='$stime',time_end='$etime',organizer='$organizer',num_of_part='$NOP',user_id='$userid',room_id='$roomid WHERE booking_id='$id' ");
if($sql)
{
header('location:admbookingrecord.php');
}
}
$query1=mysql_query("SELECT * FROM booking WHERE booking_id='$id' ");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
  <table border="1">
<tr><td>Booking ID:                 <input type="text" name="bid" value="<?php echo $query2['booking_id']; ?>" /></td></tr>
<tr><td>Date:                           <input type="text" name="date" value="<?php echo $query2['date_of_book']; ?>" /></td></tr>
<tr><td>Time Start:                  <input type="text" name="stime" value="<?php echo $query2['time_start']; ?>" /></td></tr>
<tr><td>Time End:                   <input type="text" name="etime" value="<?php echo $query2['time_end']; ?>" /></td></tr>
<tr><td>Organizer:                   <input type="text" name="organizer" value="<?php echo $query2['organizer']; ?>" /></td></tr>
<tr><td>Num.of Participants:   <input type="text" name="nop" value="<?php echo $query2['num_of_part']; ?>" /></td></tr>
<tr><td>User ID:                      <input type="text" name="userid" value="<?php echo $query2['user_id']; ?>" /></td></tr>
<tr><td>Room ID:                    <input type="text" name="roomid" value="<?php echo $query2['room_id']; ?>" /></td></tr>
<tr><td><input type="submit" name="submit" value="Update" /></td></tr>
</table>
</form>
<?php
}
?>
</body>
</html>
