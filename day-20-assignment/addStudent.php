<?php
require_once 'vendor/autoload.php';
use\App\classes\Student;
$message = '';

 if(isset($_POST['btn'])){
     $message = Student::saveStudentInfo($_POST);
 }




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
        <div class="col-md-6 m-auto">
            <a href="addStudent.php" style="alignment: center ">Add Student ||</a>
            <a href="viewStudent.php" style="align-content: center">View Student</a>
            <h2 style="color: green"><?php  echo $message ?></h2>
        </div>
    </div>
</div>

<hr/>
<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto" style="height:auto; border: 1px solid" >
            <h1>Enter Student Information</h1>
        </div>
        <div class="col-sm-12" style="height:auto; border: 1px solid"><br/>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-form-lebel col-md-5" for="firstName">First Name</label>
                    <div class="col-md-7">
                        <input type="text" name="firstname" id="firstName" class="form-control" required="1" placeholder="Enter First Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-5" for="lastName">Last Name</label>

                    <div class="col-md-7">
                        <input type="text" name="lastname" id="lastName" class="form-control" required="1" placeholder="Enter Last Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-5" for="email">Email</label>

                    <div class="col-md-7">
                        <input type="email" name="email" id="email" class="form-control" required="1" placeholder="Enter Email Address">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-5" for="mobile">Mobile Number</label>

                    <div class="col-md-7">
                        <input type="text" name="mobile" id="mobile" class="form-control" required="1" placeholder="Enter Mobile Number">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-5" for="address">Address</label>

                    <div class="col-md-7">
                        <textarea name="address" id="address" class="form-control" required="1" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-2 m-auto">
<!--                        <input type="submit" name="btn"  value="SubmiT" class="btn btn-success" required="1" >-->
                        <button type="submit" name="btn" class="btn btn-success btn-block"/>Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>



<script src="js/jquery-3.2.1.js"></script>
<script src="js/Proper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/my-javascript.js"></script>
</body>
</html>
