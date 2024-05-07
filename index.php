<?php

use Alisatresnjic\Weather\Day;
use Alisatresnjic\Weather\History;

require 'vendor/autoload.php';

$history = new History();
$history->addWeatherData(new Day("2024-05-01", "sunny"));
$history->addWeatherData(new Day("2024-05-02", "cloudy"));
$history->addWeatherData(new Day("2024-05-03", "rainy"));

// Holen der Daten aus der URL
$date = $_GET['date'] ?? null;

if ($date) {
    $weather = $history->getWeatherByDate($date);
    if ($weather) {
        echo "Das Wetter am $date war " . $weather->getDescription();
    } else {
        echo "Es sind keine Daten vorhanden für den $date";
    }
} else {
    echo "Bitte gib ein Datum ein.";
}


/*$history = new History();
$history->addWeatherData(new Day("2024-05-01", "sunny"));
$history->addWeatherData(new Day("2024-05-02", "cloudy"));
$history->addWeatherData(new Day("2024-05-03", "rainy"));

// Holen der Daten aus der URL
$date = $_GET['date'] ?? null;

if ($date) {
    $weather = $history->getWeatherByDate($date);
    if ($weather) {
        echo "Das Wetter am $date war " . $weather->getDescription();
    } else {
        echo "Es sind noch keine Daten vorhanden für den $date";
    }
} else {
    echo "Schreib bitte deine Daten ein.";
}*/


/*$history = new History();
$history->getWeatherByDate(new Day("2024-05-01", "sunny"));
$history->getWeatherByDate(new Day("2024-05-02", "cloudy"));
$history->getWeatherByDate(new Day("2024-05-03", "rainy"));

$date = $_GET['date'];
$weather = $history->getWeatherByDate($date);
echo "Weather on $date was $weather";

/*$history = new History();

$history->getWeatherByDate(new Day("2024-05-01", "sunny"));
$history->getWeatherByDate(new Day("2024-05-02", "cloudy"));
$history->getWeatherByDate(new Day("2024-05-03", "rainy"));

$date = $_GET['date'];
$weather = $history->getWeatherByDate($date);

echo "Wetter am" . $date . "ist: " . $weather->getWeatherByDate("2024-05-01")->getBeschreibung();*/












/*$day1 = new Day();
$day2 = new Day();

$history = new History();
$history->getDate($day1);
$history->getDate($day2);

$day = $history->getWeatherByDate();

if($day == null){
    echo 'Kein Wetter gefunden';
}
else{
    echo $day->getDescription();
}*/

