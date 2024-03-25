<?php
    require_once 'class_buku.php';

    //Object
    $KomikNaruto = new KomikNaruto('Komik Naruto', 1999, 'Masashi Kishimoto');
    $KisahNabi = new KisahNabi("Kisah Nabi", 2019, 'Qisthi Press');
    $Novel_YaAllah_AkuPulang = new Novel_YaAllah_AkuPulang ("Novel YaAllah, Aku Pulang", 2022, 9786235889009);
    //echo
    echo "Info Buku Novel Ya Allah, Aku Pulang <br>";
    $Novel_YaAllah_AkuPulang->getInfo();
    echo "<br>";
    
    echo "Info Buku Komik Naruto <br>";
    $KomikNaruto->getInfo();
    echo "<br>";

    echo "Info Buku Kisah Nabi <br>";
    $KisahNabi->getInfo();
?>