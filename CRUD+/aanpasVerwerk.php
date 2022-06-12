<?php
session_start();
require 'config.php';

 
if(isset($_POST['verzend']))
{
    $id = $_POST['idVeld']; 
    $naam = $_POST['naamVeld'];
    $omsch = $_POST['omschrijfVeld'];
    $jaar = $_POST['jaarVeld'];
    $categorie = $_POST['categorieVeld'];
    $afbeelding = $_POST['afbeeldingVeld'];
    $prijs = $_POST['prijsVeld'];

    $img_name=$_FILES['afbeeldingVeld'] ['name'];
    $tmp_img_name=$_FILES['afbeeldingVeld'] ['tmp_name'];
    $folder='img/';
    move_uploaded_file($tmp_img_name, $folder.$img_name);


$query = "UPDATE `kunst`";
$query .= " SET Naam = '{$naam}', `Omschrijving` = '{$omsch}', `Jaar` = '{$jaar}', ";
$query .= " `Categorie` = '{$categorie}', `Afbeelding` = '{$afbeelding}', `Prijs` = '{$prijs}'";
$query .= " WHERE `id` = {$id}";


$result = mysqli_query($mysqli, $query);

if ($result)
{
    echo "<h1>Het item is aangepast<h1/>";
}

else 
{
    echo "FOUT bij toevoegen<br/>";
    echo $query . "<br/>";
    echo mysqli_error($mysqli);
    echo "<br/>";
}
}
echo "<a href='index.php' class='button'>OVERZICHT</a>";



?>