<?php

class Movie extends Production {
    
    //new prop
    private $profit; 
    private $duration;

    //movie construct
    public function __construct($_title, $_language, $_rating, $_profit, $_duration) {

        parent::__construct($_title, $_language, $_rating);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }

    //setter-getter movie prop
    public function setProfit($_profit) {
        $this->profit = $_profit;
    }

    public function getProfit() {
        return $this->profit;
    }

    public function setDuration($_duration) {
        $this->duration = $_duration;
    }

    public function getDuration() {
        return $this->duration;
    }
}

?>