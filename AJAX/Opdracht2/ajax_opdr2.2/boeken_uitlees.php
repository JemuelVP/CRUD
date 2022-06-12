<?php

include ("connectie.php");

$query = "SELECT * FROM boeken"; 

$result = mysqli_query($mysqli, $query);

$array=array();

while($row = $result->fetch_assoc()) { 
   $array[] = $row;
  }
  echo json_encode($array); 