<?php

// 4 Scalar types

//    boolean - true or false
    $bool = true;

//    int - 1, 3, 5, 2, 7
    $integer = 12;

    $x = (int) true; // (int) converts a value into an integer
    echo $x . '</br>'; // 1

    $x = (int) false;
    echo $x . '</br>'; // 0

    // to add more readability:

        $y = 100_000; // 100000
        $y = 200_000_000; // 200000000

//    float - 1.3, 66.03, -2.045
    $floating = 3.1;

    $floating = floor(5.7); // 5 - floor rounds everything down
    $floating = ceil(5.7); // 6 - ceil rounds everything up

//    string - "utterance", "cool", "pistol point"

    $greeting = 'Hello';
    $firstLetter = $greeting[0]; // H
    $secondLetter = $greeting[1]; // e

//two ways of checking a value of some variables:

//    echo var_dump($bool);
//    echo gettype($floating);

// 4 Compound types

//    array - [13, 5, 4.3, "yo", false]

    $data = [31, 4532, 0.01, 'enrique', false, true];

    // if we use named keys in an array it is called associative array:
    $langArr = [
        'en' => 'English',
        'sp' => 'Spanish',
        'fr' => 'French',
    ];

    print_r($langArr['en'] . '</br>'); // English

    echo '<pre>';
    print_r($langArr); // Array ( [en] => English [sp] => Spanish [fr] => French )
    echo '</pre>';

    $langArr['de'] = 'Deutsch'; // pushing new element into the array
    // or:
    // $newLang = 'de';
    // $langArr[$newLang] = 'Deutsch';

    echo '<pre>';
    print_r($langArr); // Array ( [en] => English [sp] => Spanish [fr] => French [de] => Deutsch )
    echo '</pre>';

    $multiDimensional = [
        'GET' => [
            '/' => [
                ['controller' => 'HomeController', 'action' => 'index'],
                ],
            '/about'=> [
                ['controller' => 'AboutController', 'action' => 'index'],
                ],
            '/product' => [
                ['controller' => 'ProductController', 'action' => 'index'],
                ],
        'POST' => '/',
        'PUT' => '/',
            ],
    ];

    echo '<pre>';
    print_r($multiDimensional['GET']['/about'][0]['controller']); // AboutController
    echo '</pre>';

//    object
//    callable
//    iterable

// 2 Special types

//    resource
//    null