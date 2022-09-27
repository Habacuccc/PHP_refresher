<?php  

    $age = 33;

    if($age > 18){
        echo "You are an adult";
    }
    else{
        echo "You are not an adult";
    }

    echo "<br></br>";

    date_default_timezone_set('America/Mexico_City');

    echo date_default_timezone_get() . "  ";

    $t = date("H");
    $t2 = time();

    echo $t . "  ";

    if($t < 12){
        echo "Good morning";
    }
    elseif($t < 17){
        echo "Good afternoon";
    }
    else{
        echo "Good evening";
    }

    echo "<br></br>";

    $posts = ["First post"];

    // if(!empty($posts)){
    //     echo $posts[0];
    // }
    // else{
    //     echo "No posts";
    // }

    echo !empty ($posts) ? $posts[0] : "No posts";

        
    echo "<br></br>";    

    $gender = "Female";
    $gender2 = "Female";

    switch($gender){
        case "Male":
            echo "You are male";
            break;
        case "Female":
            echo "You are female";
            break;
        default:
            echo "You are another gender";
            break;
    }

?>