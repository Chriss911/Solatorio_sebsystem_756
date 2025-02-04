<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$database = "solatorio756"; 

$conn = new mysql($servername, $username, $password, $database);

if($conn-> connect_error){
    diet("Connection Failed: " . $conn -> connect_error)
}
