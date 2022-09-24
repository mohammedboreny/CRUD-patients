<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'learn_php';
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
