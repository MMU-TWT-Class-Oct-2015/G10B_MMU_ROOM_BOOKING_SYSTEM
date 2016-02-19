<html>
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
$query1=mysql_query("SELECT * FROM room");
echo "<table border='1'>
<tr><td>Room ID</td><td>Room Type</td><td>Room Capacity</td><td>action</td><td>action</td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['room_id']."</td>";
echo "<td>".$query2['room_type']."</td>";
echo "<td>".$query2['room_capacity']."</td>";
echo "<td><a href='aredit.php?id=" .$query2['room_id']. " '>Edit</a></td>";
echo "<td><a href='ardelete.php?id=" .$query2['room_id']. " '>Del</a></td></tr>";
}
?>
<p><a href='aradd.php'>Add Room</a></p>
</table>
</body>
</html>
