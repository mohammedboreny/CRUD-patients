<?php
require_once('Connection.php');

if (isset($_POST['submitform'])) {
    // echo 'Form Submitted';
    $pName = $_POST['Patient_Name'];
    $pAge = $_POST['Patient_Age'];
    $pAddress = $_POST["Patient_Address"];

    $sql = "INSERT INTO `patients`(`patientName`, `patientAge`, `patientAddress`)
 VALUES ('$pName','$pAge','$pAddress')";
    if ($con->query($sql) === TRUE) {
        require_once('index.php');

        echo "Patient Successfully Added";
    } else {
        echo "Something Went Wrong";
    }
} else {
    echo "Kindly, Check The required fields again.";
}
