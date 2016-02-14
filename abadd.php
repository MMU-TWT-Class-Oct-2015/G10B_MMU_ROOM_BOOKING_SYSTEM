<html>
<body>
<?php
include('config.php');
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
$sql=mysql_query("INSERT INTO booking VALUES ('$bid','$date','$stime','$etime','$organizer','$NOP','$userid','$roomid')");
if($sql)
{
header("location:admbookingrecord.php");
}else {
  echo "something's wrong!";
}
}
?>
<fieldset style="width:400px;">
<form method="post" action="">
  <table border="1">
    <tr><td>Booking ID:                 <input type="text" name="bid" /></td></tr>
    <tr><td>Date:                           <input type="text" name="date" value="yyyy-mm-dd" /></td></tr>
    <tr><td>Time Start:                  <input type="text" name="stime" value="hh:mm:ss" /></td></tr>
    <tr><td>Time End:                   <input type="text" name="etime" value="hh:mm:ss" /></td></tr>
    <tr><td>Organizer:                   <input type="text" name="organizer" /></td></tr>
    <tr><td>Num.of Participants:   <input type="text" name="nop"  /></td></tr>
    <tr><td>User ID:                      <input type="text" name="userid"  /></td></tr>
    <tr><td>Room ID:                    <input type="text" name="roomid"  /></td></tr>
    <tr><td><input type="submit" name="submit" value="Add" /></td></tr>
</table>
</form>
</fieldset>
</body>
</html>
