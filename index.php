<?php

class Movie {
    public $title;
    public $year;
    public $genre;

    function __construct($_year) {
        $this->year = $_year;
    }

    public function getTitleYear()
    {
        return $this->title . " del " . $this->year;
    }
}

// Milestone stampa proprietà
$FirstMovie = new Movie(1997);
$FirstMovie->title = "Titanic";
$FirstMovie->year = "1997";
$FirstMovie->genre = "drammatico";

$SecondMovie = new Movie(2012);
$SecondMovie->title = "Django Unchained";
$SecondMovie->year = "2012";
$SecondMovie->genre = "western";

// Milestone construct
$ThirdMovie = new Movie(2004);

// Milestone function
$FourthMovie = new Movie(2019);
$FourthMovie->title = "Avengers: Endgame";
$FourthMovie->year = "2019";
$FourthMovie->genre = "azione";
?>

<!-- Stampati per la milestone proprietà -->
<div> <?php echo "Il primo film si chiama " . $FirstMovie->title . ", è del " . $FirstMovie->year .  " e il suo genere è " . $FirstMovie->genre?></div>
<div> <?php echo "Il secondo film si chiama " . $SecondMovie->title . ", è del " . $SecondMovie->year .  " e il suo genere è " . $SecondMovie->genre?></div>

<!-- Stampati per la milestone construct -->
<div> <?php echo "L'anno del terzo film, Spider Man 2, è " . $ThirdMovie->year; ?></div>

<!-- Stampati per la milestone function -->
<div> <?php echo "Il quarto film, " . $FourthMovie->getTitleYear() . ", è di genere " . $FourthMovie->genre?></div>