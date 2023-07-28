<?php

class Animal{
    private string $name;
    private int $legs;
    private int $weight;
    private string $type;
    private bool $isDomestic;

    public function __construct($name,$type,$weight,$legs){
        
        $this->name=$name;
        $this->type=$type;
        
        $this->setWeight($weight);
        $this->setLegs($legs);

        if($this->weight>100 || $this->legs>4){
            $this->isDomestic=false;
        }

        else{
            $this->isDomestic=true;
        }

    

    }

    public function setLegs($legs){
        if($legs>10){
            throw new Exception("un animal ne peux pas avoir plus de 10 jambes!");
        }
        else{
            $this->legs=$legs;
        }
    }

    public function setWeight($weight){
        if($weight>500){
            throw new Exception("Un animal ne peux pas peser plus de 500 kilos!");
        }
        
        else{
            $this->weight=$weight;
        }
    }

    public function getLegs(){
        return $this->legs;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setIsDomestic($isDomestic){
        $this->isDomestic=$isDomestic;
    }

    public function getIsDomestic(){
       return $this->isDomestic;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    
}




?>