<?php
session_start();
require 'config.php';


if(isset($_SESSION["name"]))
{
$id = $_GET['id'];


$query = "SELECT * FROM kunst WHERE ID = " . $id;

$result = mysqli_query($mysqli, $query); 
if (mysqli_num_rows($result) > 0)
{
    $item = mysqli_fetch_assoc($result);
}


?> 
<div class="contact-form">

<form name="aanpasFormulier" action="aanpasVerwerk.php" method="POST" >
    <table>
       <input type="hidden" name="idVeld" value="<?php echo $item['id'];?>">
        <tr>
            <td>Naam:</td>
            <td><input type="text" name="naamVeld" value="<?php echo $item ['Naam'];?>"/></td>
        </tr>

        <tr>
            <td>Omschrijving:</td>
            <td><input type="text" name="omschrijfVeld" value="<?php echo $item ['Omschrijving'];?>"/></td>
        </tr>

        <tr>
            <td>Jaar:</td>
            <td><input type="number" name="jaarVeld" required value="<?php echo $item ['Jaar'];?>"/></td>
        </tr>

        <tr>
            <td>Categorie:</td>
            <td><input type="text" name="categorieVeld" value="<?php echo $item ['Categorie'];?>"/></td>
        </tr>

        <tr>
            <td>Afbeelding:</td> 
            <td><input type="file" name="afbeeldingVeld"  value="<?php echo $item ['Afbeelding'];?>"/></td>
        </tr>

        <tr>
            <td>Prijs:</td> 
            <td><input type="number" name="prijsVeld" value="<?php echo $item ['Prijs'];?>"/></td>
        </tr>
 
        

        <tr>
           <td> </td>
            <td><input type="submit" name="verzend" value="Aanpassen" class="button"></td>
        </tr>
    </table>         
</div>
</form>
<?php
}
else {
header("Location:login.php");
}

?>