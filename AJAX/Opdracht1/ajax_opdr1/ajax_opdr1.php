<?php
date_default_timezone_set('Europe/Amsterdam');
$date = date('h:i:s A', time());
echo "Tijd: " . $date . "<br>";
echo "Datum: " .date("Y-m-d") ."<br>";

$time = date("H");
$timezone = date("e");
if ($time < "12") {
    echo "Goedemorgen";
} else

    if ($time >= "12" && $time < "17") {
        echo "Goedemiddag";
    } else

        if ($time >= "17" && $time < "19") {
            echo "Goedenavond";
        } else

            if ($time >= "19") {
                echo "Goedenacht";
            }

?>