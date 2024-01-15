<?php

require __DIR__ . '/Models/Movie.php';

$movie1 = new Movie('Lucy', 2015, 'Action', 'EN', 'Scarlett Johansson', 6.4);
$movie2 = new Movie('Inception', 2010, 'Adventure', 'EN', 'Leonardo Di Caprio', 8.8);
$movie3 = new Movie('Up', 2009, 'Adventure', 'EN', 'Animated', 8.3);

var_dump($movie1); //calling movie 1 with construct
echo $movie1->getMovie(); //calling movie 1 with normal method

echo "<hr>";

var_dump($movie2); // calling movie 2 with construct
echo $movie2->getMovie(); //calling movie 2 with normal method

echo "<hr>";

var_dump($movie3); // calling movie 3 with construct
echo $movie3->getMovie();//calling movie 3 with normal method