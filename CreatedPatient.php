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
    <div class="container">
        <div class="row">
            <form action='./creat.php' method=POST>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="" name='Patient_Name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Patient Age</label>
                    <input type="number" class="form-control" id="" name='Patient_Age'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Patient Address</label>
                    <input type="text" class="form-control" id="" name='Patient_Address'>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submitform" value='Create' class="btn btn-primary btn-block">Create</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>