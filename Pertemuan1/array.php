<?php  
    //Defaul
    //Assosiative Array
    //Multidimensional Array

    // $fruits = ['Mangga', 'Berry', 'Kiwi'];

    // foreach ($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';

    // }

    // #cara lain untuk menjalankan php array
    // #var_dump ($fruits);
    // #print_r ($fruits);

    $dinos = [
        [
            "dinoName" => "Rex",
            "dinoAge" => 500,
        ],
        [
            "dinoName" => "Bracio",
            "dinoAge" => 800,
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 250,
        ],
    ];
    
    foreach ($dinos as $dino) {
        echo $dino ['dinoName'];
        echo $dino ['dinoAge'];
        echo '<br>';
    }
?>