<?php 
$DB_HOST = "localhost";
$DB_PORT = 8080;
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "farras_todolist";

try {
    // Code    
    $conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
} catch (Exception $error_msg) {
    echo "Error: " . $error_msg -> getMessage();
}
