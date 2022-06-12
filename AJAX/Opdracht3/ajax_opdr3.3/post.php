<?php

    require 'connectie.php';

    $titel = $_POST['titel'];
    $schrijver = $_POST['schrijver'];
    $isbn = $_POST['isbn'];
    
    $sql = "INSERT INTO `boeken` (`id`, `title`, `author`, `isbn`) 
    VALUES (NULL, '$titel', '$schrijver', '$isbn') ";

    $result = $mysqli->query($sql);

    echo "<h1>Het boek is toegevoegd!<h1/>";

