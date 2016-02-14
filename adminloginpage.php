<html>
<head><title>Admin Login</title></head>
<h1 class="MMUheader">Admin Login</h1>
<link rel="stylesheet" type="text/css" href="main.css">
<body>
  <ul class="header">
  <li class="headerli"><a class="headera" href="homepage.html">Register</a></li>
  <li class="headerli"><a class="headera" href="loginpage.php">Login</a></li>
  <li class="headerli"><a class="headera" href="adminloginpage.php">Admin Login</a></li>
  </ul>
  <form action="adminlogin.php" method="POST">
    <table>
      <tr><td>ADMIN Login</td></tr>
      <tr><td>Admin ID:<Input type="text" maxlength="10" name="aid"/></td></tr>
      <tr><td>Password:<input type="password" maxlength="30" name="apass"/></td></tr>
      <tr><td><input type="submit" value="Login" class="adminbutton" name="adminlog" /></td></tr>
    </table>
  </form>
</body>
</html>
