<?php

namespace Apidog\Controller;

use Apidog\Model\getapi;
use Apidog\Controller\Entity\Dog;

class breedListController
{
    
    public function getRequisition(){
        $data = new getapi();
        $content = (array)$data->listAll()['message'];
        $indexList = $data->getDog("/".array_rand($content),9)['message'];
        $dogList = array();
        foreach($indexList as $dog){
            $dogList[] = new Dog($dog);
        }
        require "../apiDog/view/pages/breedListView.php";
    }
}

?>