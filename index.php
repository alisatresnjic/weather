<?php

use Alisatresnjic\Weather\Day;
use Alisatresnjic\Weather\History;

require 'vendor/autoload.php';

$day1 = new Day();
$day2 = new Day();

$history = new History();
$history->addDay($day1);
$history->addDay($day2);

$day = $history->getWeather();

if($day == null){
    echo 'Kein Wetter gefunden';
}
else{
    echo $day->getDescription();
}