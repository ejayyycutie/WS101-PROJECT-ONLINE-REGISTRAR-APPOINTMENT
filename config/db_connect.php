<?php
// Turn off default error reporting that messes up JSON
error_reporting(0); 
ini_set('display_errors', 0);

$host = "localhost:3307";
$user = "root";
$pass = "";
$dbname = "nsc_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    // Return JSON error immediately
    die(json_encode(['status' => 'error', 'message' => 'DB Connection Failed: ' . $conn->connect_error]));
}
?>