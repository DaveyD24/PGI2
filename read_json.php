<?php



// foreach($array["collection"] as $car) {

// }


function GetContents() {
    $strJSONContents = file_get_contents('cars.json');

    $array = json_decode($strJSONContents, true);

    return $array;
}


?>