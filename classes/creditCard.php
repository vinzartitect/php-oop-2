<?php

class creditCard{

    public $number;
    public $expireYear;
    public $cvv;
    public $bank;
    public $balance;
    public $isValid;

    public function __construct( $number, $expireYear, $cvv, $bank, $balance, $isValid = false ){

        $this -> number = $number;

        if($expireYear > 2022){
            $this -> expireYear = $expireYear;
        }

        $this -> cvv = $cvv;
        $this -> bank = $bank;
        $this -> balance = $balance;

        if(is_numeric($number) && strlen($number) == 16 && strlen($cvv) == 3 && $expireYear > 2022){
            $this -> isValid = true;
        } else {
            $this -> isValid = false;
        }
    }


    public function getBalance(){
        return $this -> balance . "€";
    }

    public function getValidation(){
        return $this -> isValid;
    }
}

?>