<?php

$db_hostname = 'localhost';
$db_username = 'minor_crud';
$db_password = 'crud123'; 
$db_database = 'minor_crud';

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if(!$mysqli) {
    echo "FOUT: geen connectie naar database. <br>";  
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
}   
