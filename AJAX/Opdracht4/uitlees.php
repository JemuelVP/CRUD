<?php

require ("connectie.php");

$query = "SELECT * FROM boeken"; 

$result = mysqli_query($mysqli, $query);

$array=array();

foreach ($result as $row) {
   $output[] = array (
      'id' => $row["id"],
      'title' => $row["title"],
      'author' => $row["author"],
      'isbn' => $row["isbn"],
   );
}

echo json_encode($output);

// while($row = $result->fetch_assoc()) { 
//    $array[] = $row;
//   }
//   echo json_encode($array); 