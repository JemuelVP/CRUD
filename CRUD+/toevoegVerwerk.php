<?php
session_start();
require 'config.php';

if(isset($_POST['verzend']))
{

    $naam = $_POST['naamVeld'];
    $omschrijving = $_POST['omschrijfVeld'];
    $jaar = $_POST['jaarVeld'];
    $categorie = $_POST['categorieVeld'];
    $afbeelding = $_POST['afbeeldingVeld'];
    $prijs = $_POST['prijsVeld'];

    $img_name=$_FILES['afbeeldingVeld'] ['name'];
    $tmp_img_name=$_FILES['afbeeldingVeld'] ['tmp_name'];
    $folder='img/';
    move_uploaded_file($tmp_img_name, $folder.$img_name);

    $query = "INSERT INTO kunst";
    $query .= " (Naam, Omschrijving, Jaar, Categorie, Afbeelding, Prijs)";
    $query .= " VALUES ('$naam', '$omschrijving', '$jaar', '$categorie', '$img_name', '$prijs')";

   $result = mysqli_query($mysqli, $query);



   if ($result)
   {
       echo "<h1>Het item is toegevoegd<h1/>";
   }
else{
    echo "FOUT bij toevoegen<br/>";
    echo $query . "<br/>";
    echo mysqli_error($mysqli);
}

}

echo "<a href='index.php' class='button'>Overzicht</a>";
