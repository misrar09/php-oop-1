<!-- Creating a movie class with contrust and method -->

<?php

class Movie
{
    public $name;
    public $year;
    public $genere;
    public $language;
    public $cast;
    public $rating;


    public function __construct($name, $year, $genere, $language, $cast, $rating)
    {
        $this->name = $name;
        $this->year = $year;
        $this->genere = $genere;
        $this->language = $language;
        $this->cast = $cast;
        $this->rating = $rating;
    }

    public function getMovie()
    {
        $result = $this->name . "-" . $this->year . "-" . $this->genere . "-" . $this->language . "-" . $this->cast . "-" . $this->rating;
        return $result;
    }
}
