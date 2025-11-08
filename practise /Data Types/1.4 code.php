<?php

// 4 Scalar types

//    boolean - true or false
    $bool = true;
//    int - 1, 3, 5, 2, 7
    $integer = 12;
//    float - 1.3, 66.03, -2.045
    $floating = 3.1;
//    string - "utterance", "cool", "pistol point"
    $greeting = 'Hello';

//two ways of checking a value of some variables:

    echo var_dump($bool);
    echo gettype($floating);

// 4 Compound types

//    array - [13, 5, 4.3, "yo", false]
    $data = [31, 4532, 0.01, 'enrique', false, true];

    print_r($data);
//    object
//    callable
//    iterable

// 2 Special types

//    resource
//    null