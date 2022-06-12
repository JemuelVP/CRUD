<?php
session_start();
require 'config.php';

if(isset($_SESSION["name"])) {

    $id = $_GET['id'];


    $query = "DELETE FROM `kunst` WHERE `ID` = " . $id;

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "<h1>Het item is verwijderd<h1/>";
    } else {
        echo "FOUT bij verwijderen<br/>";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
        echo "Geen ID gevonden...<br/>";
    }

    echo "<a href='index.php' class='button'>OVERZICHT</a>";

}
else {
    header("Location:login.php");
}
?>