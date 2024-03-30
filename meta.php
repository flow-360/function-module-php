<?php


// START - ONLY FILL OUT THIS

$moduleName = "test"; // <- Change this to the name of your module
$moduleDescription = "This is a test module"; // <- Change this to the description of your module

// END - ONLY FILL OUT THIS


// Define input fields dynamically
$metaFields = [
    "name" => $moduleName,
    "description" => $moduleDescription,
];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($metaFields);


?>
