<?php 

namespace Apidog\Model;

class getapi
{
    private $allUrl = "https://dog.ceo/api/breeds/";
    private $oneUrl = "https://dog.ceo/api/breed";

    private function curlConf($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        $data = (array) json_decode($resp);
        curl_close($ch);
        return $data;
    }

    public function listAll(){
        return $this->curlConf($this->allUrl."list/all"); 
    }
    public function getDog($name, $qnt=null){
        $qnt = isset($qnt) ? "/".$qnt: $qnt;
        return $this->curlConf($this->oneUrl.$name."/images/random".$qnt);
    }
    public function raceList($race){
        return $this->curlConf($this->oneUrl.$race."/list");
    }
}

