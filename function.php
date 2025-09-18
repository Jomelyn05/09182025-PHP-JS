<?php

    //Simple Function
    $title = 'Function';
    echo $title .'<br> <hr>';

    $simple_function = 'Simple - Function';
    echo $simple_function .'<br>';
    function sayHello() {
        echo "Hello, World!";
        echo '<br> <hr>';
    }
sayHello();

    //with parameter
    $with_parameter = 'With Function - parameter';
    echo $with_parameter .'<br>';
    function greeting($name) {
        echo "Hello,  $name" ;
        echo '<br> <hr>';
    }
    greeting("Alice");

    //parameter default value
    $parameter_default = "Parameter Default Value";
    echo $parameter_default ."<br>";
    function greet($name = 'Guest <br>') {
        echo "Hello,  $name" ;
    }
    greet();
    greet("Alice <hr>");

    //Return from FUNCTION

    $return_function = "Return Function";
    echo $return_function ."<br>";

    function multiply($a, $b) {
        return $a * $b;
}

$result =  multiply(4, 5);
echo $result ."<br>";
?>