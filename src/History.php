<?php

namespace Alisatresnjic\Weather;

class History
{
    private $weatherData = [];

    public function addWeatherData(Day $day) {
        $date = $day->getDate();
        $this->weatherData[$date] = $day;
    }

    public function getWeatherByDate($date) {
        if (array_key_exists($date, $this->weatherData)) {
            return $this->weatherData[$date];
        }
        else {
            return "Es sind keine Wetterdaten vorhanden.";
        }
    }

}