<?php

function generateParametersField($inputField, $defaultValue = "") {
    return [
        "inputField" => $inputField,
        "defaultValue" => $defaultValue,
    ];
}

// Define input fields dynamically

//Define parameters here
$parametersFields = [
    "condition" => generateParametersField("text50", "GreaterThan"),

];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($parametersFields);
?>
