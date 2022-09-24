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

      <h1 class="display-3 text-center">Patient More Info </h1>
      <p class="lead">
      </p>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <p> Age is <?php echo $data['patientAge']; ?></p>
      <p> Address is <?php echo $data['patientAddress']; ?></p>
      
    </div>
    <a class="btn btn-primary" href="./index.php">back</a>
  </div>
  

</body>

</html>