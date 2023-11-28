<?php

class Production {

    //proprietà
    public $title;
    public $language;
    public $rating;

    // costruttore
    public function __construct($title, $language, $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    public function getMovie(){
        $languageList = implode($this->language);

        return $this->title.' '.$languageList.' '.$this->rating;
    }
}

//dichiarazione oggetti
$starWarsIV = new Production('Star Wars - A New Hope', ['English ', 'Spanish ', 'German ', 'Italian '], '8.6');
echo $starWarsIV->getMovie();
echo "<br>";

$starWarsV = new Production('Star Wars - The Empire Strikes Back', ['English ', 'Dutch ', 'Japanese '], '8.7');
echo $starWarsV->getMovie();
echo "<br>";

$starWarsVI = new Production('Star Wars - Return of the Jedi', ['German ', 'Korean ', 'Portuguese ', 'Friulano '], '8.3');
echo $starWarsVI->getMovie();
echo "<br>";

$lotrFellowship = new Production('The Lord of the Rings: The Fellowship of the Ring', ['Estonian ', 'Finnish ', 'Latin ' ], '8.8');
echo $lotrFellowship->getMovie();
echo "<br>";

$lotrTowers = new Production('The Lord of the Rings: The Two Towers', ['Romagnolo ', 'Toscano ', 'Klingon '], '8.8');
echo $lotrTowers->getMovie();
echo "<br>";

$lotrKing = new Production('The Lord of the Rings: The Return of the King', ['Bulgarian ', 'Catalan ', 'Icelandic '], '9.0');
echo $lotrKing->getMovie();

?>