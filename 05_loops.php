<?php  

    for($x=0 ; $x<10 ; $x++){
        echo $x . " ";
    }

    echo "<br></br>";   

    $numbers = [1,2,3,4,5,6,7,8,9];

    foreach($numbers as $number){
        echo $number . " ";
    }


    echo "<br></br>"; 

    echo "Number of elements: " . count($numbers);

    echo "<br></br>"; 

    $y = 0;

    while($y < 9){
        echo $y . " ";
        $y++;
    }

    $y = 0;

    echo "<br></br>"; 

    do{
        echo $y . " ";
        $y++;
    }
    while($y < 7);

    $persons = [
        [
            "Name" => "Daniel",
            "Age" => 33
        ],
        [
            "Name" => "Carlos",
            "Age" => 29
        ],
    ];

    echo "<br></br>"; 

    foreach($persons as $index => $person){
        echo "Person " . $index . ": ";
        foreach($person as $key => $value){
            echo "$key-$value ";
        }
        echo "<br></br>"; 
    }

?>

