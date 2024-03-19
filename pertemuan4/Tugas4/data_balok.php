<?php 
/**
 * Task 2
 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
 * Luas, Keliling dan Volume
 * p = 29, l = 16, t = 7
 */

    require_once 'class_balok.php';
    
    $balok1 = new Balok(29, 16, 7);
    $balok2 = new Balok(5, 3, 2);
    $balok3 = new Balok(11, 9, 7);
    $balok4 = new Balok(15,13,11);
    
    echo "Luas Balok 1 Adalah: " . $balok1->getLuas() . "cm" . "<br>";
    echo "Keliling Balok 1 Adalah: " . $balok1->getKeliling() . "cm" . "<br>";
    echo "Volume Balok 1 Adalah: " . $balok1->getVolume() . "cm" . "<br><br>";

    echo "Luas Balok 2 Adalah: " . $balok2->getLuas() . "cm" . "<br>";
    echo "Keliling Balok 2 Adalah: " . $balok2->getKeliling() . "cm" . "<br>";
    echo "Volume Balok 2 Adalah: " . $balok2->getVolume() . "cm" . "<br><br>";

    echo "Luas Balok 3 Adalah: " . $balok3->getLuas() . "cm" . "<br>";
    echo "Keliling Balok 3 Adalah: " . $balok3->getKeliling() . "cm" . "<br>";
    echo "Volume Balok 3 Adalah: " . $balok3->getVolume() . "cm" . "<br><br>";

    echo "Luas Balok 4 Adalah: " . $balok4->getLuas() . "cm" . "<br>";
    echo "Keliling Balok 4 Adalah: " . $balok4->getKeliling() . "cm" . "<br>";
    echo "Volume Balok 4 Adalah: " . $balok4->getVolume() . "cm" ."<br>";
?>