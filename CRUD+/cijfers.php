<?php
session_start();
require 'config.php';


if(isset($_SESSION["name"]))
{
    $id = $_REQUEST['id'];
?>

<form name="cijfersFormulier" action="cijferVerwerk.php" method="POST" >

    <table>
        <input type="hidden" name="idVeld" value="<?php echo $id ?>">
        <tr>
            <td>Cijfer:</td>
            <td><input type="number" max="10" min="1" name="cijferVeld" "/></td>
        </tr>

        <tr>
            <td><input type="submit" name="verzenden" value="cijfer"></td>
        </tr>

    </table>
</form><?php
}
?>