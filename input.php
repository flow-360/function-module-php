<?php

function generateInputField($dataType, $defaultValue = "", $required = "") {
    return [
        "dataType" => $dataType,
        "default" => $defaultValue,
        "required" => $required
    ];
}


// START - ONLY FILL OUT THIS


// Define input fields dynamically
// The first value is the type which can either be integer, text50 or text.
// The second value is the default value. Leave empty if there is no default
// The third value is if the field is required or not. If the field is required leave "required" else leave it blank.
$inputFields = [
    "nonRequiredNumber" => generateInputField("integer", "20", ""),
    "requiredName" => generateInputField("text", "", "required")
    // Add a input field here.
];

// END - ONLY FILL OUT THIS

// Send JSON response
header('Content-Type: application/json');
echo json_encode($inputFields);
?>
