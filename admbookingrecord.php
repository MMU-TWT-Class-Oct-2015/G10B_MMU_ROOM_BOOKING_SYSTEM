<html>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
  <ul class="header">
  <li class="headerli"><a class="headera" href="admbookingrecord.php">View Booking Records</a></li>
  <li class="headerli"><a class="headera" href="admsearch.php">Search Booking Records</a> </li>
  <li class="headerli"><a class="headera" href="admroomdisplay.php">Display Room</a></li>
  <li class="headerli"><a class="headera" href="admuserdisplay.php">Display User</a></li>
  <li class="headerli"><a class="headera" href="logout.php">Log out</a></li>
   </ul>

<?php
include('config.php');
$query1=mysql_query("SELECT * FROM booking");
echo "<table border='1'>
<tr><td>Booking ID</td><td>Date</td><td>Time Start</td><td>Time End</td><td>Organizer</td><td>Num.of participants</td><td>User ID</td><td>Room ID</td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['booking_id']."</td>";
echo "<td>".$query2['date_of_book']."</td>";
echo "<td>".$query2['time_start']."</td>";
echo "<td>".$query2['time_end']."</td>";
echo "<td>".$query2['organizer']."</td>";
echo "<td>".$query2['num_of_part']."</td>";
echo "<td>".$query2['user_id']."</td>";
echo "<td>".$query2['room_id']."</td>";
echo "<td><a href='abedit.php?id=" .$query2['booking_id']. " '>Edit</a></td>";
}
?>
<p><a href='abadd.php'>Add  Booking</a></p>
</table>
</body>
</html>
