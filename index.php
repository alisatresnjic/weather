<?php

use Alisatresnjic\Weather\Day;
use Alisatresnjic\Weather\History;

require 'vendor/autoload.php';


$weatherHistory = new history();

$day1 = new Day("2024-03-20", "sonnig");

$weatherHistory->addWeatherData($day1);

echo "Die Wettterdaten vom 20. März 2024: " . $weatherHistory->getWeatherByDate("2024-03-20")->getDescription();










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

