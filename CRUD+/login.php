<?php

require 'config.php';
session_start();
$message="";

if(count($_POST)>0) {


    $db_host = 'localhost';
    $db_user = 'minor_crud';
    $db_pass = 'crud123';
    $db_data = 'minor_crud';

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_data);
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $stmt = $con->prepare("SELECT * FROM login_user WHERE user_name=? AND password=md5(?);");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();


    $result = mysqli_query($mysqli,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["Role"] = $row['Role'];
        $_SESSION["name"] = $row['name'];
    } else {
        $message = "De gegevens die je hebt ingevuld zijn fout";
    }
}
if(isset($_SESSION["Role"], $_SESSION["name"]))
{
    if($_SESSION["Role"] == "admin") {
        header("Location:index.php");
    }

    if($_SESSION["Role"] == "klant") {
        header("Location:index2.php");
    }

    else {
        header("Location:index.php");
    }

}
?>

<html>
<head>
    <title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <div class="div1">

        <h3 align= "center">Vul logingegevens in</h3>
        Gebruikersnaam:<br>
        <input type="text" name="user_name">
        <br>
        Wachtwoord:<br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit" class="button">
    </div>