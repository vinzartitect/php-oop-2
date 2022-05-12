<?php

include_once __DIR__ . "/product.php";

// questa classe erediterà le info del padre product

class toy extends product{

    // proprietà esclusive del figlio toy
    public $weight;
    public $color;
    public $material;
    public $measures;

    // costruttore
    function __construct( $_name, $_category, $_price, $_typeOfAnimal, $_weight, $_color, $_material, $_measures ){
        //setter del padre product
        parent::__construct( $_name, $_category, $_price, $_typeOfAnimal );
        //setter del figlio toy
        $this -> setWeight($_weight);
        $this -> setColor($_color);
        $this -> setMaterial($_material);
        $this -> setMeasures($_measures);
    }



    // setter del figlio ( quelli del padre sono ereditati )
    public function setWeight($_weight){
        // possibile validazione dei dati
        $this -> weight = $_weight;
        return $this;
    }

    public function setColor($_color){
        // possibile validazione dei dati
        $this -> color = $_color;
        return $this;
    }

    public function setMaterial($_material){
        // possibile validazione dei dati
        $this -> material = $_material;
        return $this;
    }

    public function setMeasures($_measures){
        // possibile validazione dei dati
        $this -> measures = $_measures;
        return $this;
    }



    // getter del figlio ( quelli del padre sono ereditati )
    function getWeight(){
        return $this -> weight;
    }

    function getColor(){
        return $this -> color;
    }

    function getMaterial(){
        return $this -> material;
    }

    function getMeasures(){
        return $this -> measures;
    }

}