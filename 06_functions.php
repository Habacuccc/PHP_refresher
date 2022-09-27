<?php 

    function registerUser($user, $age){
        echo "Your name is " . $user . " and your age is " . $age;
    }

    registerUser("Daniel",33);

    echo "<br></br>";

    function sum($n1=1, $n2=2){
        return $n1+$n2;
    }

    echo sum(4,5);

    echo "<br></br>";

    $sub = function($n1,$n2){
        return $n1-$n2;
    };

    echo $sub(5,1);

    echo "<br></br>";

    $mult = fn($n1,$n2) => $n1*$n2;

    echo $mult(3,6);

?>