<?php
session_start();
session_unset();
?>

<html>
<head>
    <title>sms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: yellow">
<div class="container-fluid">
<div class="row">

<form action="admin/search.php" method="post">

        <button class="btn btn-dark col-md-offset-11" type="button"><a href="user/login.php">Admin Login</a></button>
    <h1 align="center" style="font-size: 50px"><u>Welcome to Student Management System</u></h1>
    <div class="col-md-6 col-md-offset-3" style="border: 1px solid black  ">
        <h4 align="center"style=" font-size: 50px"><b>Student Information</b></h4>
            <div class="form-group table">
                <label>Choose Standered</label>
<select class="stud" style="margin: 20px">

    <option>1st</option>
    <option>2nd</option>
    <option>3rd</option>
    <option>4th</option>
    <option>5th</option>
    <option>6th</option>

</select>
            </div>

        <div class="form-group">
        <label>Roll no</label>
        <input type="text"class="form-control" name="rollno"required>
        </div>

                <div class="form-group">
                    <button class="btn btn-primary" name="submit">Show information</button>
                </div>
    </div>
        </div>
</form>
        </div>
    </div>


</body>
</html>