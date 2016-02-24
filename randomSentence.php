<?php
  include('PDO.php');

        $randomStart = rand(1,25);
        $randomEnd = rand(1,25);
        echo getSingleValue("start", "ID", $randomStart, "text", $conn);
        echo " ".getSingleValue("end", "ID", $randomEnd, "text", $conn);

  ?>
