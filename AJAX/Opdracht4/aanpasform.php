<?php

$id = $_GET['id'];

$query = "SELECT * FROM `boeken` WHERE id = " . $id;

$result = mysqli_query($mysqli, $query);

$rij = mysqli_fetch_array($result);

?>

<form name="updateTabel" method="post" action="aanpasverwerk.php">
    <table>
        <tr>
            <td>Title:</td>
            <td>
                <input type="text" name="titelVeld" required value="<?php echo $rij["title"]?>">
                <input type="hidden" name="idVeld"  value="<?php echo $rij["id"]?>">
            </td>
            </tr>

            <tr>
            <td>Author:</td>
            <td>
                <input type="text" name="authorVeld" required value="<?php echo $rij["author"]?>">
            </td>
            </tr>

            <tr>
            <td>ISBN:</td>
            <td>
                <input type="text" name="isbnVeld" required value="<?php echo $rij["isbn"]?>">
            </td>
            </tr>

            <tr>
                <td class="updateKnop"><input type="submit" name="verzend" value="Update"></td>
            </tr>
    </table>
</form>

            
                

