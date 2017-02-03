


<?php
$url = "http://maps.google.com/maps/api/geocode/json?address=Charminar+Hyderabad&sensor=false&region=INDIA";
$response = file_get_contents($url);
$response = json_decode($response, true);

//print_r($response);

$lat = $response['results'][0]['geometry']['location']['lat'];
$long = $response['results'][0]['geometry']['location']['lng'];

echo "latitude: " . $lat . " longitude: " . $long;
?>

