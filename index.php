<?php

class Production {

    //proprietà
    public $title;
    public $language;
    public $rating;

    // costruttore
    public function __construct($_title, $_language, $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    public function setRating($rating) {
        if(is_numeric($rating) && $rating >= 0 && $rating <= 10) {
            $this->rating = floatval($rating);
        } else {
            $this->rating = null;
            var_dump('$rating non valido');
        }
    }

    public function getMovie(){
        $languageList = implode($this->language);

        return $this->title.' '.$languageList.' '.$this->rating;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getRating() {
        return $this->rating;
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


$productions = [
    $starWarsIV,
    $starWarsV,
    $starWarsVI,
    $lotrFellowship,
    $lotrTowers,
    $lotrKing
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <th>Titolo</th>
                <th>Lingue disponibili</th>
                <th>Voto</th>
            </thead>

            <tbody>
                <?php foreach($productions as $movie) { ?>
                    <tr>
                        <td><?php $movie->getTitle()?></td>
                        <td><?php $movie->getLanguage()?></td>
                        <td><?php $movie->getRating()?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>