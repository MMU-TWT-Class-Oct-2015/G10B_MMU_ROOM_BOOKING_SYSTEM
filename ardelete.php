<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("DELETE  FROM room WHERE room_id='$id' ");
if($query1)
{
header('location:admroomdisplay.php');
}
}
?>
</body>
</html>
