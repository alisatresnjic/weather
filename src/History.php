<?php

namespace Alisatresnjic\Weather;

class History
{
    private $weatherData = [];

    public function addWeatherData(Day $day)
    {
        $this->weatherData[] = $day;
    }

    public function getWeatherByDate($date)
    {
        foreach ($this->weatherData as $weatherData) {
            if ($weatherData->getDate() == $date) {
                return $weatherData;
            }
        }
        return null; // Datum nicht gefunden
    }

}