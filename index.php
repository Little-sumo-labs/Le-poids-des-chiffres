<?php

ini_set('display_errors', 1); // Afficher les erreurs à l'écran
error_reporting(E_ALL); // Afficher les erreurs et les avertissements

// Insertion des classes PHP
require 'vendor/autoload.php';

use App\weightOfNumbers as weightOfNumbers;


$calculation = new weightOfNumbers();

$numbers = [
    1 => 51,
    2 => 307,
    3 => 93,
    4 => 522,
    5 => 144,
    6 => 28,
    7 => 43,
    8 => 93,
    9 => 78
];

$data = $calculation->weight($numbers);
var_dump($numbers, $data);