<?php 

    $name = 'Daniel';
    $age = 33;
    $has_kids = false;
    $cash_on_hand = 25.05;

    //echo $name . ' is ' . $age . ' years old ';

    echo "${name} is ${age} years old, and he has $${cash_on_hand} right now";

    echo "<br></br>";

    var_dump($has_kids);

    echo "<br></br>";

    define('HOST', 'localhost');
    define('DB_NAME', 'dev_db');

    VAR_DUMP(HOST);

?>
