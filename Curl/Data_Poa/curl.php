<?php 


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://mapme.com/web/map/servi%C3%A7os-porto-alegre/metaData');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$body = json_decode($result);

var_dump($body->map->categories);

curl_close($ch);