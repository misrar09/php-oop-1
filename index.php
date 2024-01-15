<?php

require __DIR__ . '/Models/Movie.php';

$movie1 = new Movie('Lucy', 2015, 'Action', 'EN', 'Scarlett Johansson', 6.4);

var_dump($movie1);
