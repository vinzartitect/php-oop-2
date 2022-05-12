<?php 

// class che contiene il prodotto tipo

class product {
    protected $name;
    protected $category;
    protected $price;
    protected $typeOfAnimal;
    
    // costruttore
    public function __construct( $_name, $_category, $_price, $_typeOfAnimal ){
        $this -> setName($_name);
        $this -> setCategory($_category);
        $this -> setPrice($_price);
        $this -> setTypeOfAnimal($_typeOfAnimal);
    }



    // lista dei setter
    public function setName($_name){
        // possibile validazione dei dati
        $this -> name = $_name;
        return $this;
    }

    public function setCategory($_category){
        // possibile validazione dei dati
        $this -> category = $_category;
        return $this;
    }

    public function setPrice($_price){
        // possibile validazione dei dati
        $this -> price = $_price;
        return $this;
    }

    public function setTypeOfAnimal($_typeOfAnimal){
        // possibile validazione dei dati
        $this -> typeOfAnimal = $_typeOfAnimal;
        return $this;
    }



    // lista dei getter
    public function getName(){
        // possibile validazione dei dati
        return $this -> name;
    }

    public function getCategory(){
        // possibile validazione dei dati
        return $this -> category;
    }

    public function getPrice(){
        // possibile validazione dei dati
        return $this -> price;
    }

    public function getTypeOfAnimal(){
        // possibile validazione dei dati
        return $this -> typeOfAnimal;
    }

}

?>