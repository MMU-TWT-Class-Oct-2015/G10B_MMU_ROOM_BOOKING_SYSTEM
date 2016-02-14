<html>
<body>
<?php
include('config.php');
$query1=mysql_query("SELECT * FROM users");
echo "<table border='1'>
<tr><td>User ID</td><td>Username</td><td>User password</td><td>Membership type</td><td>Phone.no</td><td>Email</td><td>action</td><td>action</td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['user_id']."</td>";
echo "<td>".$query2['user_name']."</td>";
echo "<td>".$query2['user_password']."</td>";
echo "<td>".$query2['membership_type']."</td>";
echo "<td>".$query2['user_phone']."</td>";
echo "<td>".$query2['user_email']."</td>";
echo "<td><a href='auedit.php?id=" .$query2['user_id']. " '>Edit</a></td>";
echo "<td><a href='audelete.php?id=" .$query2['user_id']. " '>Del</a></td></tr>";
}
?>
<p><a href='auadd.php'>Add User</a></p>
</table>
</body>
</html>
