<?php require_once 'Connection.php'; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="jumbotron jumbotron-fluid bg-primary">

        <div class="container">

            <h1 class="display-3 text-center">Patients Records </h1>
            <p class="lead">

            </p>
        </div>
    </div>
    <!-- Button trigger modal -->
    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New Patient
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Add new patient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php require_once 'CreatedPatient.php'; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    //Query to select all records in table carInfo
    $sql = 'SELECT id,patientName, patientAge, patientAddress from patients';
    //make query and store result in result
    $result = $con->query($sql);
    //fetch the result rows into an array
    $patientsArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //free result from memory( best practice)
    mysqli_free_result($result);
    //Terminate connection
    mysqli_close($con);

    // to check if everything works well us print_r($carDataArray);


    ?>

    <div class='container'>
        <table class="table table-primary table-striped">
            <tr>
                <th>Patient Number</th>
                <th>Patient Name</th>
            </tr>
            <?php
            foreach ($patientsArray as $patients) {
            ?>

                <?php
                echo "<tr>";

                echo "<td>" . $patients['id'] . "</td>";
                echo "<td>" . $patients['patientName'] . "</td>";

                echo "<td>";
                echo "<div class = 'btn-group'>";
                echo "<a class='btn btn-secondary' href='./update.php?id=" . $patients['id'] . "'>Edit</a>";
                echo "<a class='btn btn-danger' href='./delete.php?id=" . $patients['id'] . "' >delete</a>";
                echo "<a class='btn btn-secondary' href='./popUp.php?id=" . $patients['id'] . "'>show</a>";?>
                <?php echo "</td> </tr> " ?>
            <?php } ?>

        </table>


</body>

</html>