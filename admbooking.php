<?php
include('config.php');

if(isset($_POST['submit'])){
  $date = $_POST['date'];
  $stime=$_POST['starttime'];
  $etime=$_POST['endtime'];
  $org=$_POST['organizer'];
  $nop=$_POST['numofpart'];
  $uid=$_POST['userid'];
  $rid=$_POST['roomid'];
  $query=("INSERT INTO `roombooking`.`booking` (`booking_id`,`date_of_book`, `time_start`, `time_end`, `organizer`, `num_of_part`, `user_id`, `room_id`) VALUES (NULL, '$date', '$stime', '$etime', '$org', '$nop', '$uid', '$rid')");
  $book=mysql_query($query);
}
if ($book){
  echo '<script language="javascript">';
  echo 'alert("Booking Stored");';
  echo 'window.location= "admviewrecords.php";';
  echo '</script>';
}else{
  echo '<script language="javascript">';
  echo 'alert("OPS something wrong!");';
  echo '</script>';
}

?>
