<html>
<head><title>Booking Records</title></head>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
  <ul class="header">
    <li class="headerli"><a class="headera" href="stuviewavailable.php">Book a Room</a></li>
    <li class="headerli"><a class="headera" href="viewbookingrecords.php">View Booking Records</a></li>
    <li class="headerli"><a class="headera" href="logout.php">Log out</a></li>
   </ul>
  <?php
include('config.php');
$query="SELECT * FROM booking order by date_of_book";
$data = mysql_query($query);
?>

<table border="1" bgcolor="white" align="center">
<?php
Print ("<tr>");
print("<th>Booking ID</th>");
print("<th>Date</th>");
Print("<th>Time start</th>");
Print("<th>Time end</th>");
Print("<th>Organizer</th>");
Print("<th>Num of participant</th>");
Print("<th>User_ID</th>");
Print("<th>Room ID</th>");
while ($row = mysql_fetch_row($data)){
print ("<tr>");
foreach ($row as $key => $value )
print ("<td>$value</td>");
print("</tr>");
}
 ?>
 <table>
   <h1 align="center">Book a room?</h1>
   <form method= "POST" action ="stuviewavailable.php">
      <p>Select your available booking room type:
     <select name="select">
     <option selected>Lecture Room</option>
     <option>Tutorial Room</option>
     <option>Main Hall</option>
   </select></p>
   <p><input type ="submit" value="Go"></p>
   </form>
 </body>
 </html>
