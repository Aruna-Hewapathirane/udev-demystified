<?php


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// $data = file_get_contents('http://api.somesite.com');

$json_data = file_get_contents('http://api.openweathermap.org/data/2.5/find?q=colombo,lk&units=metric');
$json = json_decode($json_data,true);

echo "table" . "<table>" ;

echo "<tr><td>" . "JSON Data: ". "</td><td>" . $json_data . "</td></tr>";


echo "<tr><td>" . "City: ". "</td><td>" . $json["list"][0]["name"] . "</td></tr>";

echo "Longitude" . $json["list"][0]["coord"]["lon"] . "<br/>";
echo "Latitude" . $json["list"][0]["coord"]["lat"] . "<br/>";

echo "Temperature: " . $json["list"][0]["main"]["temp"] ."<br/>";

echo "Sky: ". $json["list"][0]["weather"][0]["description"] ."<br/>";

echo "</table>";
//echo "</table>";

?>
