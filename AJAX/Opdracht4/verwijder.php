<?php

include 'connectie.php';

$id= $_POST['id'];

$query = "DELETE FROM `boeken` WHERE id= {$id}";

$result = mysqli_query($mysqli, $query);

echo json_encode($query);