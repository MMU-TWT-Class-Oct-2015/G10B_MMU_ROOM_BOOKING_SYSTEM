<?php
$db = mysql_connect("localhost","root","");
if (!$db) {
die("Database connection failed " . mysql_error());
}

$db_select = mysql_select_db("roombooking",$db);
if (!$db_select) {
die("Database selection failed " . mysql_error());
}
?>
