<?php
if (!isset($_GET['id'])) {
    die("Patient Id is unknown");
} else {
    require_once 'Connection.php';

    $id = $_GET['id'];
    //Query to select all records in table Patients
    $sql = "SELECT * FROM `patients` WHERE id= $id ";
    //make query and store result in $result
    $result = $con->query($sql);
    if ($result->num_rows != 1) {
        die("ID is unavailable");
    }
    $data = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-primary">

        <div class="container">

            <h1 class="display-3 text-center">Patient Edit </h1>
            <p class="lead">
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <i class="fas fa-heading  ">
                <h1 class="text-Center">Edit Form</h1>
            </i>
            <form action='./modify.php?id=<?= $id ?>' method=POST>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="" value="<?= $data['patientName']; ?>" name='Patient_Name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Patient Age</label>
                    <input type="number" class="form-control" id="" value="<?= $data['patientAge']; ?>" name='Patient_Age'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Patient Address</label>
                    <input type="text" class="form-control" id="" value="<?= $data['patientAddress']; ?>" name='Patient_Address'>
                </div>
                <button type="submit" name="editForm" value='update' class="btn btn-primary btn-block">Update</button>

            </form>
        </div>

        <a class='btn btn-danger ' href="./index.php">Back </a>

    </div>

</body>

</html>