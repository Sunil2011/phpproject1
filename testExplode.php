<?php

$location = ' 1232.234, 236.97';
$e = explode(',', $location);
$lat = $e[0];
$lng = $e[1];

echo 'Latitude : '.$lat;
echo '<br>';
echo 'Longitude : '.$lng;

echo '<hr>';

$location1 = ' 1232.234 ';
$e1 = explode(',', $location1);
$lat1 = $e1[0];
$lng1 = $e1[1];

echo 'Latitude1 : '.$lat1;
echo '<br>';
echo 'Longitude1 : '.$lng1;

echo '<hr>';

$location2 = ' not found';
$location2 .= ',';
$e2 = explode(',', $location2);
$lat2 = $e2[0];
$lng2 = $e2[1];
if($lng2==0){
    $lng2 = $lat2 ;
}
echo 'Latitude2 : '.$lat2;
echo '<br>';
echo 'Longitude2 : '.$lng2;