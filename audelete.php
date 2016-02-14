<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$userid=$_GET['id'];
$query1=mysql_query("DELETE  FROM users WHERE user_id='$userid' ");
if($query1)
{
header('location:admuserdisplay.php');
}
}
?>
</body>
</html>
