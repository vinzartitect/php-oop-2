<?php

trait userInfo {

    public $firstName;
    public $surname;

    // lista dei setter
    public function setFirstName($_firstName){
        $this -> firstName = $_firstName;
        return $this;
    }

    public function setSurname($_surname){
        $this -> surname = $_surname;
        return $this;
    }

    // lista dei getter
    public function getFirstName(){
        return $this -> firstName;
    }

    public function getSurname(){
        return $this -> surname;
    }

}

?>