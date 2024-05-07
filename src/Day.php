<?php

namespace Alisatresnjic\Weather;

class Day
{

    public $date;
    public $description;

    public function __construct($date, $description) {
        $this->date = $date;
        $this->description = $description;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDescription() {
        return $this->description;
    }

}
