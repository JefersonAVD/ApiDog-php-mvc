<?php

namespace Apidog\Controller;

use Apidog\Model\getapi;

class raceListController
{
    public function getRequisition(){
        
        if($_SERVER["REQUEST_METHOD"]!== "POST"){
            http_response_code(405);
            exit();
        }
        $data = new getapi();
        $content = $data->raceList("/".$_POST["race"]);
        echo json_encode($content);
    }
}

?>