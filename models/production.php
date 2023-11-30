<?php

class Production {

    //production new prop
    public $title;
    public $language;
    public $rating;

    //production construct
    public function __construct($_title, $_language, $_rating) {
        
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = $_rating;
    }

    public function getData() {

        $languageList = implode($this->language);
        return $this->title.' '.$languageList.' '.$this->rating;
    }
}

?>