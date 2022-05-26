<?php

$strJSONContents = file_get_contents("cars.json");

$array = json_decode($strJSONContents, true);

foreach($array["collection"] as $car) {

}

echo $array;


return $array;

?>