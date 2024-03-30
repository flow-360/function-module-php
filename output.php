<?php

function generateOutputField($dataType, $maxLength = "") {
    return [
        "dataType" => $dataType,
        "maxLength" => $maxLength,
    ];
}


// START - ONLY EDIT THIS

// Define input fields dynamically

// The first value is the output value which can either be integer, text50 or text. 
//The second value is the default value. Leave empty if there is no default value

$outputFields = [
    "number" => generateOutputField("integer", "20"),

];

// END - ONLY EDIT THIS

// Send JSON response
header('Content-Type: application/json');
echo json_encode($outputFields);
?>
