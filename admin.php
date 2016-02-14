<html>
<head><title>Welcome Admin!</title></head>
<link rel="stylesheet" type="text/css" href="main.css">
<body>

<ul class="header">
<li class="headerli"><a class="headera" href="admbookingrecords.php">View Booking Records</a></li>
<li class="headerli"><a class="headera" href="admsearch.php">Search Booking Records</a> </li>
<li class="headerli"><a class="headera" href="admroomdisplay.php">Display Room</a></li>
<li class="headerli"><a class="headera" href="admuserdisplay.php">Display User</a></li>
<li class="headerli"><a class="headera" href="logout.php">Log out</a></li>
 </ul>
 <p>
<h1>welcome!

<?php
session_start();
echo $_SESSION['admin_name'];
?>
</h1>
</p>
<p align="justify">What do you want to do ?</p>
</body>
</html>
