<?php

    $fruits = ['mangga', 'delima', 'kiwi'];

    print_r($fruits);
    echo '<br>';
    var_dump($fruits);
    echo '<br>';
    foreach ($fruits as $fruit) {
        echo $fruit;
        echo '<br>';
        //tulisan kesamping
        echo $fruit . " ";
    }

// assosiative array
    $dinos = [
        "dinoName" => "Tricera",
        "dinoAge" => 300,
        "isMaried" => "False"

    ];

    foreach ($dinos as $dino) {
        echo $dino;
        echo "<br>";
    }

    //multidimensi array

    $dinos = [
        [
            "dinoName" => "Tricera",
            "dinoAge" => 300, 
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 500, 
        ],
        [
            "dinoName" => "Ptera",
            "dinoAge" => 250, 
        ],
    ];
    // panggil salah satu
    echo $dinos [0] ["dinoName"];

    // panggil semuanya 
    foreach ($dinos as $dino) {
        echo $dino["dinoName"] . " - " .$dino["dinoAge"]. "Tahun";
    }


?>