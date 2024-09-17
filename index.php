<?php
//definizione della classe movie
class Movie {
    // variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genres = [];
    
    //dichiaro il costruttore della classe
    public function __construct($_title, $_director, $_year, $_genres = []){
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        //imposto i generi come un array
        $this->genres = is_array($_genres) ? $_genres : [$_genres];
    }

    //metdodo che restituisce una descrizione della classe film
    public function getDescription() {
        //collego i generi separati dalle virgole
        $genresStr = implode(", ", $this->genres);
        return "Il film " . $this->title . " è diretto da " . $this->director . ", uscito nel " . $this->year . " ed appartiene ai generi: " . $genresStr . ".";
    }

}

// Istanziare due oggetti della classe Movie
$movie1 = new Movie("Joker", "Todd Phillips", 2019, ["drammatico", "poliziesco", "thriller", "noir"]);
$movie2 = new Movie("The Batman", "Matt Reeves",2022, ["azione", "thriller", "noir", "drammatico", "poliziesco"]);

// Stampare a schermo i valori delle proprietà e la descrizione
echo $movie1->getDescription();
echo "<hr>";
echo $movie2->getDescription();


?>

