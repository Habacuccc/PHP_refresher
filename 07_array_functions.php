<?php

    //ADD

    $fruits = ['apple','orange','banana'];

    echo count($fruits);

    echo "<br></br>";

    var_dump(in_array('banana',$fruits));

    echo "<br></br>";

    $fruits[] = 'lemon';

    print_r($fruits);

    echo "<br></br>";

    array_push($fruits, 'peach', 'grape');

    print_r($fruits);

    echo "<br></br>";

    array_unshift($fruits, 'strawberry');

    print_r($fruits);

    echo "<br></br>";

    

    //REMOVE

    array_pop($fruits);

    print_r($fruits);

    echo "<br></br>";

    array_shift($fruits);

    print_r($fruits);

    echo "<br></br>";



    //CHUNKS

    $chunk_arr = array_chunk($fruits, 2);

    echo "Chunked :";

    echo "<br></br>";

    print_r($chunk_arr);

    echo "<br></br>";


    //CONCATENATE

    $arr1 = [1,2,3];

    $arr2 = [4,5,6];

    //$arr3 = array_merge($arr1, $arr2);

    $arr3 = [...$arr2, ...$arr2];

    print_r($arr3);

    echo "<br></br>";



    //COMBINE

    $ar1 = ['red', 'orange', 'yellow'];

    $ar2 = ['apple', 'orange', 'banana'];

    $ar3 = array_combine($ar1, $ar2);

    print_r($ar3);

    echo "<br></br>";

    $keys = array_keys($ar3);

    print_r($keys);

    echo "<br></br>";

    print_r(array_flip($ar3));

    echo "<br></br>";


    $numbers = range(1,10);

    print_r($numbers);

    echo "<br></br>";

    $newNumber = array_map(function($number){
        return "Number ${number}";
    }, $numbers);

    print_r($newNumber);

    echo "<br></br>";

    $numbers1to5 = array_filter($numbers, fn($number) => $number <= 5);

    print_r($numbers1to5);

    echo "<br></br>";

    $numberReduce = array_reduce($numbers, fn($carry, $number) => $carry + $number);

    print_r($numberReduce);

    echo "<br></br>";

?>