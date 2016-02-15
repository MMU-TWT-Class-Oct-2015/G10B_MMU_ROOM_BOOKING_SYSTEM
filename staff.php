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
 </form>
</body>
</html>
