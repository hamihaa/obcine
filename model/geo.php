<?php
// Get lat and long by address

include_once "ObcinaDB.php";

$list = ObcinaDB::getAll();

foreach($list as $s){
    $id = $s['ID'];
    $add = $s['OBCINA']; // Google HQ
    getAd($id, $add);
}

function getAd($id, $add){
    $address = "$add, Slovenia";
    $prepAddr = str_replace(' ','+',$address);
    $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.urlencode($prepAddr).'&sensor=false');
    $output= json_decode($geocode);
    $latitude = $output->results[0]->geometry->location->lat;
    $longitude = $output->results[0]->geometry->location->lng;
    echo ("$id $add $longitude $latitude <br>");
    ObcinaDB::insert(intval($id), $latitude, $longitude);
}

