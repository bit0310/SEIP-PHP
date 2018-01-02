<?php
require_once 'vendor/autoload.php';
use\App\classes\Student;
$message = '';

$queryResult =  Student::getAllStudentInfo($_POST);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>day-20-assignment</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/css.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-5 m-auto">
            <a href="addStudent.php" style="alignment: center ">Add Student ||</a>
            <a href="viewStudent.php" style="align-content: center">View Student</a>
            <h1 style="color: green"><?php  echo $message ?></h1>
        </div>
    </div>
</div>

<hr/>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="height: 500px;" >
            <table class="table table-bordered table-hover table-responsive-xl">
                <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                </tr>
                </thead>

                <tbody>
                <?php While($student = mysqli_fetch_assoc($queryResult)){  ?>
                <tr>

                    <td><?php echo $student['id'] ?></td>
                    <td><?php echo $student['firstname'] ?></td>
                    <td><?php echo $student['lastname'] ?></td>
                    <td><?php echo $student['email'] ?></td>
                    <td><?php echo $student['mobile'] ?></td>
                    <td><?php echo $student['address'] ?></td>

                </tr>

                <?php }   ?>
                </tbody>
            </table>






            <script src="js/jquery-3.2.1.js"></script>
            <script src="js/Proper.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/my-javascript.js"></script>
</body>
</html>

