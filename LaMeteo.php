<?php

class LaMeteo
{

    private $apiKey = 'a35748805ee4c1507b68a8491574edbc';

//    public function __construct(string $apiKey)
//    {
//        $this->apiKey = $apiKey;
//    }

    public function getForecast(string $city){
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric&lang=fr";
        //die($url);
//        $curl = curl_init("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric&lang=fr");
        $curl = curl_init($url);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt_array($curl,[
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true
        ]);
        $data = curl_exec($curl);
        if($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200){
            print_r($url);
            print_r($data);
            print_r(curl_getinfo($curl, CURLINFO_HTTP_CODE));
            die('mal');
            return null;
        }else{
            //die('bien');
            $data = json_decode($data, true);
        }

        return $data;
    }

}