<?php
require_once('Connection.php');
if (isset($_GET['id']) && isset($_POST['editForm'])) {

    $id = $_GET['id'];
    $pName = $_POST['Patient_Name'];
    $pAge = $_POST['Patient_Age'];
    $pAddress = $_POST["Patient_Address"];
    $sql = "UPDATE `patients` SET
     `patientName`='$pName',
     `patientAge`='$pAge',
     `patientAddress`='  $pAddress' 
     WHERE `id` =$id";
    if ($con->query($sql) === TRUE) {
        require 'index.php';
        echo "Patient Successfully Updated";
    } else {
        echo "Something Went Wrong";
    }
} else {
    echo "Invalid";
}
