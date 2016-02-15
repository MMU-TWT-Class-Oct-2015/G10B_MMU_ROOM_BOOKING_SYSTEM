<html>
<head>
  <title>Room available</title>
</head>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
<ul class="header">
  <li class="headerli"><a class="headera" href="viewbookingrecords.php">View Booking Records</a></li>
  <li class="headerli"><a class="headera" href="logout.php">Log out</a></li>
 </ul>
 <?php
  include('config.php');
$select =$_POST['select'];
$query= "SELECT  *  FROM `room`  WHERE `room_type`= '$select' " ;
$result = mysql_query($query);
?>
<table border="1" bgcolor="white">
<?php
while ($row = mysql_fetch_row($result)){
print ("<tr>");
foreach ($row as $key => $value )
print ("<td>$value</td>");
print("</tr>");
}
 ?>
 <table>
 <p>room available:
 <?php print (mysql_num_rows($result)) ?>result.</p>

 <form  align="right" action="stubooking.php" method="POST" >
<table class="requiretable" border=1 bgcolor="white">
  <tr><td>Please fill in information required:</td></tr>
  <tr><td>Date for Booking: <input name="date" value="yyyy-mm-dd" type="text" style="width:215px" maxlength="20" autocomplete="off"/></td></tr>
  <tr><td>Starting Time : <input name="starttime" type="text" value="hh:mm:ss" /></td></tr>
  <tr><td>Ending time: <input name="endtime" type="text" value="hh:mm:ss"/></td></tr>
  <tr><td>Organizer : <input name="organizer" type="text"/ ></td></tr>
  <tr><td>Number of Participants: <input name="numofpart" type="text" /></td></tr>
  <tr><td>User id: <input name="userid" type="text"/ ></td></tr>
  <tr><td>Room id: <input name="roomid" type="text" /></td></tr>
  <tr><td><input type="submit" value="submit" name="submit" /></td></tr>
  </table>
</form>
 </body>
 </html>
