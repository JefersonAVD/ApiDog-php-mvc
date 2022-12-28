<?php

namespace Apidog\Controller\entity;

class Dog
{
    private $breed;
    private $sub_breed;
    private $img;

    function __construct($imgLink){
        $withouthttp = str_replace("https://images.dog.ceo/breeds/","",$imgLink);
        $withouLast = substr($withouthttp, 0, stripos( $withouthttp,"/"));
        $dataArray = explode("-",$withouLast);
        $this->breed = ucfirst( $dataArray[0]);
        $this->sub_breed = array_key_exists(1,$dataArray)  ? ucfirst( $dataArray[1] ) :"No Sub-breed";
        $this->img = $imgLink;
    }

    public function getBreed(){
        return $this->breed;
    }
    public function getSubBreed(){
        return $this->sub_breed;
    }

    public function getImg(){
        return $this->img;
    }
}