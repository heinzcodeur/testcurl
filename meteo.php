<?php
// $curl = curl_init('https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761faz22');
 $curl = curl_init('https://api.openweathermap.org/data/2.5/weather?q=Thiais&appid=a35748805ee4c1507b68a8491574edbc&units=metric&lang=fr');
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 $data = curl_exec($curl);
 if($data === false){
     var_dump(curl_error($curl));
 }else{
    $data = json_decode($data, true);
//    echo '<pre>';print_r($data['main']['temp']);echo '</pre>';
//     print_r(gettype($data['main']['temp']));
     echo 'il fait '.ceil($data['main']['temp']).'°C';
 }
 curl_close($curl);