<?php

require_once 'Connection.php';
//Check if the id is in the URL!
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `patients` WHERE id =$id";
    if ($con->query($sql) === TRUE) {
        require_once 'index.php';

        echo "Patient Successfully deleted";
    } else {
        echo "Something Went Wrong";
    }
} else {
    die('patient ID is not provided ');
}
