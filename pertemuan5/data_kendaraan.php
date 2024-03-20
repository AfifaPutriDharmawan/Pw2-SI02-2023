<?php

    require_once 'class_kendaraan.php';

    //Object
    $motor = new Motor("Motor", "Bensin", 2);
    $submarine = new Submarine("Submarine", "Solar", 1000);

    //echo
    echo "Info Motor:<br>";
    $motor->getInfo();
    echo "<br>";

    echo "Info Submarine:<br>";
    $submarine->getInfo();

?>