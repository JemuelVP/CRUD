<?php
session_start();
require 'config.php';

$id = $_POST['idVeld'];
$cijfer = $_POST['cijferVeld'];

$query = "INSERT INTO cijfers (id, rating) VALUES ('$id', '$cijfer')";

$result = mysqli_query($mysqli, $query);

echo $query;

header("Location: index.php");