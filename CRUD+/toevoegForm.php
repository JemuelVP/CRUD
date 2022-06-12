<?php

session_start();
require 'config.php';

if(isset($_SESSION["name"]))
{

?>

<html>


<form name="agendaFormulier" action="toevoegVerwerk.php" enctype="multipart/form-data" method="POST" >
    <table>

<div class="div1"></div>

        <tr>
            <td>Naam:</td>
            <td><input type="text" name="naamVeld" required></td>
        </tr>

        <tr>
            <td>Omschrijving:</td>
            <td><input type="text" name="omschrijfVeld" required></td>
        </tr>

        <tr>
            <td>Jaar:</td>
            <td><input type="number" name="jaarVeld" required></td>
        </tr>

        <tr>
            <td>Categorie:</td>
            <td><input type="text" name="categorieVeld" required></td>
        </tr>

        <tr>
            <td>Afbeelding:</td>
            <td><input type="file" name="afbeeldingVeld"  id="afbeeldingVeld" required/></td>
        </tr>


        <tr>
            <td>Prijs:</td>
            <td><input type="number" name="prijsVeld"  required/></td>
        </tr>

        <tr>
           <td> </td>
            <td><input type="submit" class="button" name="verzend" value="Voeg toe"></td>
        </tr>
    </table>
</form>
</html> <?php
    }
else {
    header("Location:login.php");
}