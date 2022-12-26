<?php

//phpinfo();
require_once 'LaMeteo.php';

$weather = new LaMeteo();
$forecast = $weather->getForecast('Marseille');
echo '<pre>';
print_r($forecast['name']);
echo '</pre>';

echo '<br> A '.$forecast['name'].' il fait '.ceil($forecast['main']['temp']).'°';
?>