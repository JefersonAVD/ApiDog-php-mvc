<?php

namespace Apidog\Controller;

use Apidog\Controller\Entity\Dog;
use Apidog\Model\getapi;

class findBreedController
{
    public function getRequisition(){
        $data = new getapi();
        $raca = "/".$_GET['breed'];
        $subraca = $_GET['sub-breed']!="" ? "/".$_GET['sub-breed'] :"" ;
        $content = (array) $data->listAll()['message'];
        $dogData = $data->getDog(strtolower($raca).strtolower($subraca));

        $sucess=true;
        if($dogData['status'] !== "success"){
            $sucess=false;
        }
        $dog = new Dog($dogData['message']);
        require "../apiDog/view/pages/findBreedView.php";
    }
}

?>