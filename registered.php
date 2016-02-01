<html>
<head><title>User Login</title></head>
<link rel="stylesheet" type="text/css" href="main.css">
<h1 class="MMUheader">Welcome to MMU ROOM BOOKING SYSTEM</h1>
<body>
  <ul class="header">
  <li class="headerli"><a class="headera" href="homepage.html">Home</a></li>
  <li class="headerli"><a class="headera" href="">Room</a></li>
  <li class="headerli"><a class="headera" href="">Login</a></li>
  <li class="headerli"><a class="headera" href="">Admin Login</a></li>
  </ul>
<div class="logindiv">
<?php
session_start();
if(isset($_SESSION['userid'])){

  //logout
}else{
  if(isset($_GET['status'])){
    if ($_GET['status'] == 'reg_success'){
      echo "<p style= 'colour: green'>User Registered</p>";
    }
  }
}
?>
</div>
</body>
</html>
