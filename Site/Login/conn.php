<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "cantinhofraterno";

$conn = new mysqli($server, $user, $pass, $database);

if($conn->connect_error){
    die('Falha ao conectar' . $conn->connect_error);
}