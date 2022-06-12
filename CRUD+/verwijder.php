<?php
session_start();

if(isset($_SESSION["name"])) {
    $id = $_GET['id'];

    if ($id != "") {
        echo "<h1>Weet je het zeker?</h1>";

        echo "<a href='verwijder_verwerk.php?id={$id}' class='button'> JA </a> ";
    } else {
        echo "Geen ID gevonden<br/>";
    }


}
else {
    header("Location:login.php");
}
?>