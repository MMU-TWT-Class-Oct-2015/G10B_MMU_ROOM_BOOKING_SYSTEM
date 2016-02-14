<html>
<head><title>Login</title></head>
<link rel="stylesheet" type="text/css" href="main.css">
<h1 class="MMUheader">User Login</h1>
<body>
  <ul class="header">
  <li class="headerli"><a class="headera" href="homepage.html">Home</a></li>
 <li class="headerli"><a class="headera" href="loginpage.php">Login</a></li>
  <li class="headerli"><a class="headera" href="adminloginpage.php">Admin Login</a></li>
  </ul>
  <form  method="POST" action="logintest.php">
  <table>
  <tr><td>Login</td></tr>
  <tr><td>User ID: <input name="user" type="text" style="width:215px" maxlength="20" autocomplete="off"></td></tr>
  <tr><td>Password: <input name="pass" type="password" style="width:215px" maxlength="20" autocomplete="off"></td></tr>
  <tr><td><input type="submit" name="submit" value="Login"></td></tr>
  </table>
  </form>
</body>
</html>
