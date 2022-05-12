<?php

require __DIR__ . '/../traits/userInfo.php';

// class che contiene l'utente tipo

class user {

    use userInfo;

    public $email;
    public $_signed;
    public $_sconto;

    //costruttore 
    public function __construct($_firstName, $_surname, $_email, $_signed){
        $this -> setFirstName($_firstName);
        $this -> setSurname($_surname);
        $this -> setEmail($_email);
        $this -> setSigned($_signed);
        $this -> setSconto($_signed);
    }



    // lista dei setter
    public function setEmail($_email){
        $this -> email = $_email;
        return $this;
    }

    public function setSigned($_signed){
        $this -> signed = $_signed;
        return $this;
    }

    public function setSconto($_signed){
        if ($_signed == true){
            $this -> sconto = 0.8;
            return $this;
        } else {
            $this -> sconto = 1;
            return $this;
        }
    }



    // lista dei getter
    public function getEmail(){
        return $this -> email;
    }

    public function getSigned(){
        return $this -> signed;
    }

    public function getSconto(){
        return $this -> sconto;
    }

}