<?php
session_start();
if(isset($_SESSION['username']))
{
    header('http://localhost/sms/admin/admindash.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: yellow">
<form action="login.php" method="post">
    <div class="container-fluid">

        <div class="row border">
            <div class="col-md-6 ">
                <h6 >mukeshgorai21@gmail.com</h6>
            </div>
            <div class="col-md-6">

                <h6 class="text-right">9742844504</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 style="margin: auto;padding: 10px;width: 50%;">Admin Login</h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text"class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="submit">Sign in</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
include '../connection.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM admin WHERE username ='$username' AND password='$password'";
$result=$conn->query($sql);
if ($row=$result->fetch_assoc())
{
    $_SESSION['username']=$username;
    header("Location: http://localhost/sms/admin/admindash.php");
}
else
{
    header("http://localhost/sms/user/login.php");
}
}
?>