<?php
  require "connectie.php";
 
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM boeken WHERE title LIKE '{$_POST['query']}%' LIMIT 100";
      $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
        echo $res['title']. "<br/>";
      }
    } else {
      echo "Boek niet gevonden";
    }
  }
?> 