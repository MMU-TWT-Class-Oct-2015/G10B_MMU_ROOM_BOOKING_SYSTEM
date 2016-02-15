<html>
<body>
<link rel="stylesheet" type="text/css" href="main.css">
<ul class="header">
  <li class="headerli"><a class="headera" href="stafviewrecords.php">View Booking Records</a></li>
  <li class="headerli"><a class="headera" href="logout.php">Log out</a></li>
 </ul>
<h1>welcome!
<?php
session_start();
echo $_SESSION['user_name'];
?>
 </h1>
 <p>Book a Room?</p>

 <form method= "POST" action ="staviewavailable.php">
    <p>Select your available booking room type:
   <select name="select">
   <option selected>Lecture Room</option>
  <option>Tutorial Room</option>
   <option>Main Hall</option>
   <option>Exam Hall</option>
   <option>Meeting Room</option>
 </select></p>
 <p><input type ="submit" value="Go"></p>
 <p style="float:left"><img src="lecture room.jpg" alt="lecture room" style="float:left;width:300px;height:150px;"></p><br><br>
<br>
<p>Lecture Room example.</p>
<p style="float:left"><img src="tutorial room.jpg" alt="Tutorial room" style="float:center;width:300px;height:150px;"></p><br><br>
<br>
<p>Tutorial Room example.</p>
<p style="float:left"><img src="main hall.jpg" alt="Main hall" style="float:center;width:300px;height:150px;"></p><br><br>
<br>
<p>Main Hall example.</p>
<p style="float:left"><img src="meeting room.jpg" alt="meeting  room" style="float:center;width:300px;height:150px;"></p><br><br>
<br>
<p>Meeting Room example.</p>

 </form>
</body>
</html>
