<?php

class Movie {
    // variabili d'istanza
    public $title;
    public $genre;
    public $year;

    public function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    //metdodo che restituisce una descrizione della classe film
    public function getDescription() {
        return "Il film " . $this->title . " è un film di genere " . $this->genre . ", uscito nel " . $this->year ;
    }

}

// Istanziare due oggetti della classe Movie
$movie1 = new Movie("Joker", "Thriller psicologico", 2019);
$movie2 = new Movie("The Batman", "Supereroistico", 2022);

// Stampare a schermo i valori delle proprietà e la descrizione
echo $movie1->getDescription();
echo "<hr>";
echo $movie2->getDescription();


?>

