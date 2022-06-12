<?php

$id = $_POST['idVeld'];
$titel = $_POST['titelVeld'];
$auth = $_POST['authorVeld'];
$isbn = $_POST['isbnVeld'];

$query = "UPDATE `boeken` SET `title`='$titel',`author`='$auth',`isbn`='$isbn' WHERE `boeken` id = {$id}";

$result = mysqli_query($mysqli, $query);

echo json_encode($query);

header('Location: opdracht4.html');