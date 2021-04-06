<?php

//url escape googlen um den input value;
//aus php aussa google request maken googeln
$API_KEY = 'AIzaSyBEB-S0r4IOESqGIE9uQkLKIZp9JT2fFSs';
$PLACE_AUTOCOMPLETE_URL = 'https://maps.googleapis.com/maps/api/place/autocomplete/json?key=' . $API_KEY  . '&language=de&location=48.23523160000001,13.8347559&radius=100000&strictbounds';
$PLACE_DETAIL_URL = 'https://maps.googleapis.com/maps/api/place/details/json?key=' . $API_KEY . '&language=de';
$DB_HOST = 'localhost';
$DB_PORT = 3306;
$DB_NAME = 'test';
$DB_USER = 'root';
$DB_PASS = '';


$result_autocomplete = file_get_contents($PLACE_AUTOCOMPLETE_URL . '&input=' . urlencode($_POST['addresse']));

$result_autocomplete_decoded = json_decode($result_autocomplete);


$predictions_json = $result_autocomplete_decoded->predictions;
$predictions = [];

foreach ($predictions_json as $value)
    array_push($predictions, $value->description, $value->place_id);


 if(count($predictions) == 1)
   echo 'hallo';

else

$temp = array_values($predictions);


$result_Detail = file_get_contents($PLACE_DETAIL_URL . '&place_id=' . urlencode($temp[1]));
$result_Detail_decoded = json_decode($result_Detail);

$latitude = $result_Detail_decoded->result->geometry->location->lat;
$longitude = $result_Detail_decoded->result->geometry->location->lng;

echo $longitude;
// Create connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

 
