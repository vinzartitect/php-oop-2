<?php 

include_once __DIR__ . "/product.php";

// questa classe erediterà le info del padre product

class food extends product{

    // proprietà esclusive del figlio food
    public $typeOfFood;
    public $brand;
    public $weight;
    public $expireDate;

    // costruttore
    function __construct( $_name, $_category, $_price, $_typeOfAnimal, $_typeOfFood, $_brand, $_weight, $_expireDate ){
        //setter del padre product
        parent::__construct( $_name, $_category, $_price, $_typeOfAnimal );
        //setter del figlio food
        $this -> setTypeOfFood($_typeOfFood);
        $this -> setBrand($_brand);
        $this -> setWeight($_weight);
        $this -> setExpireDate($_expireDate);
    }



    // setter del figlio ( quelli del padre sono ereditati )
    public function setTypeOfFood($_typeOfFood){
        // possibile validazione dei dati
        $this -> typeOfFood = $_typeOfFood;
        return $this;
    }

    public function setBrand($_brand){
        // possibile validazione dei dati
        $this -> brand = $_brand;
        return $this;
    }

    public function setWeight($_weight){
        // possibile validazione dei dati
        $this -> weight = $_weight;
        return $this;
    }

    public function setExpireDate($_expireDate){
        // possibile validazione dei dati
        $this -> expireDate = $_expireDate;
        return $this;
    }



    // getter del figlio ( quelli del padre sono ereditati )
    function getBrand(){
        return $this -> brand;
    }

    function getBrand(){
        return $this -> brand;
    }

    function getWeight(){
        return $this -> weight;
    }

    function getExpireDate(){
        return "Il prodotto scade il " . $this -> expireDate;
    }

}