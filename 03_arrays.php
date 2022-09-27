<?php

    $numbers = [1,2,3,4];

    $fruits = array('apple', 'orange', 'lemon');

    var_dump($numbers);

    echo "<br></br>";

    foreach($numbers as $number){
        echo $number;
    }

    echo "<br></br>";

    $info = [
        "Name" => "Daniel",
        "Age" => "33",
        "Gendrr" => "Male"
    ];

    // foreach($info as $field){
    //     echo $field;
    // }

    var_dump($info);

    $people = [
        [
            "Name" => "Daniel",
            "Age" => "33",
            "Gender" => "Male"
        ],
        [
            "Name" => "Carlos",
            "Age" => "29",
            "Gender" => "Male"
        ]
    ];

    echo "<br></br>";

    echo $people[1]["Age"];

    echo "<br></br>";

    var_dump(json_encode($people));

?>