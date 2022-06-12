<?php

require 'config.php';
session_start();

if(isset($_SESSION["name"])) {
//    if($_SESSION["Role"] == "admin") {
//        header("Location:index.php");

    $query = "SELECT k.id, k.Naam, k.Omschrijving, k.Jaar, k.Categorie, k.Afbeelding, k.Prijs, AVG(r.rating) AS gemiddelde FROM `kunst` k LEFT JOIN cijfers r ON k.id = r.id GROUP BY k.id, k.Naam, k.Omschrijving, k.Jaar, k.Categorie, k.Afbeelding, k.Prijs";

    $result = mysqli_query($mysqli, $query);

    if (!$result) {
        echo "<p>FOUT!</p>";
        echo "<p>" . $query . "</p>";
        echo "<p>" . mysqli_error($mysqli) . "</p>";
        exit;
    }



    if (mysqli_num_rows($result) > 0) {
        echo "<table border='2px'>";


        echo "<tr class='active'><th>Naam</th><th>Omschrijving</th><th>Jaar</th><th>Categorie</th><th>Afbeelding</th><th>Prijs</th><th>Gemiddelde</th><th>Pas aan</th><th>Verwijderen</th><th>Toevoegen</th><th>Cijfer</th></tr>";

        while ($item = mysqli_fetch_assoc($result)) {




            echo "<tr>";
            echo "<td>" . $item['Naam'] . "</td>";
            echo "<td>" . $item['Omschrijving'] . "</td>";
            echo "<td>" . $item['Jaar'] . "</td>";
            echo "<td>" . $item['Categorie'] . "</td>";
            echo "<td>"; ?> <img src="img/<?php echo $item['Afbeelding']; ?>" height="100" width="100"> <?php echo "</td>";
            echo "<td>" . $item['Prijs'] . "</td>";
            echo "<td>" . $decimaal . "</td>";
            echo "<td>" . "<a href='pasaan.php?id=" . $item['id'] . "'>pas aan</a>" . "</td>";
            echo "<td>" . "<a href='verwijder.php?id=" . $item['id'] . "'>verwijder</a>" . "</td>";
            echo "<td>" . "<a href='toevoegForm.php'>toevoegen</a>" . "</td>";
            echo "<td>" . "<a href='cijfers.php?id=" . $item['id'] . "'>cijfer</a>" . "</td>";
            echo "</tr>";

            $nummer = $item['gemiddelde'];
            $decimaal = number_format($nummer, 1, '.', '');

        }

        echo "</table> <br> ";
        echo "<a href='logout.php'>Uitloggen</a>";
    } else {
        echo "<p>Geen items gevonden!</p>";
    }
//}
}
else {
    header("Location:login.php");
}

?>
