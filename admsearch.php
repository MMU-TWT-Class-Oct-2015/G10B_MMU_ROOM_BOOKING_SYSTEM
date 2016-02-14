<?php include('config.php');
?>

<form method="POST" action="admsearch.php">
  <input type="text" name="search" size="40"/>
  <input type="submit" name="submit" value="Search" />
</form>

<table border="1">
  <tr><td>Booking ID</td>
    <td>Date</td>
    <td>Time start</td>
    <td>Time end</td>
    <td>Organizer</td>
    <td>Number of participants</td>
    <td>User ID</td>
    <td>Room ID</td></tr>

    <?php
    if(isset($_POST['submit'])){
    $search=$_POST['search'];
    $counter=0;
    $query=" SELECT * FROM booking WHERE room_id LIKE '%$search%' ";
    $result=mysql_query($query);

    while($row=mysql_fetch_array($result)){
      $counter=1;
      echo "<tr><td> ".$row[0]."</td>";
      echo "<td> ".$row[1]."</td>";
      echo "<td> ".$row[2]."</td>";
      echo "<td> ".$row[3]."</td>";
      echo "<td> ".$row[4]."</td>";
      echo "<td> ".$row[5]."</td>";
      echo "<td> ".$row[6]."</td>";
      echo "<td> ".$row[7]."</td></tr>";
}
if($counter==0){
echo "<tr><td>Record not found</td></tr>";
}
}
     ?>
</table>
