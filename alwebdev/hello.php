<?php
error_reporting(-1); // default settings
$firstName = 'Oscar';   // single quote works
$lastName = "Zaky";     // just like double quote
$fullName = $firstName . ' ' . $lastName;

function printName($f, $l){
    global $firstName, $lastName;
    echo "<p>Hello, $f $l</p>";
    echo "First name is $firstName";
    echo "Last name is $lastName";
}

function printAge($y){
    $age = 2018 - $y;    
    return "You are $age years old<br/>";
}

    echo "<p>Welcome to tonight's Web Development class, $fullName</p>";
    echo 'Let\'s eat at Mc Donald\'s';  
    echo "<br/>";

    $a = 5;
    $b = 6.5;
    $c = $a + $b;
    echo "The total is ".$c;

    printName($firstName, $lastName);
    echo printAge(1998);

    echo "Age outside is $age";

    printName("Bruce", "Wayne", "Batman");
?>