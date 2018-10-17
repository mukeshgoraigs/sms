
<html>
<head>
    <title>sms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <?php

    include('../connection.php');
    //$standerd = $_POST['standerd'];
    $rollno = $_POST['rollno'];
   // $id=$_POST['id'];
    //showdetails($standerd, $name);

    $sql = "SELECT * FROM student WHERE rollno ='$rollno'";
    $run = mysqli_query($conn, $sql);

        if (mysqli_num_rows($run) > 0)
{
        $data=mysqli_fetch_assoc($run);
        ?>

<body style="background-color: yellow">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered">
                <thead>
             <h2 style="text-align: center">
                 Student Details
             </h2>


                </thead>
                <tbody>
                <tr>
                    <th>Image</th>
                    <td colspan="5"><img src="../images/<?php echo $data['image']; ?>" style="max-height: 150px;max-width: 150px;"/>
                    </td>
                </tr>
                <tr>
                    <th>Roll No</th>
                    <td><?php echo $data['rollno']; ?></td>

                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $data['name']; ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?php echo $data['city']; ?></td>
                </tr>
                <tr>
                    <th>Standerd</th>
                    <td><?php echo $data['standerd']; ?></td>
                </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>
</body>
    <?php
}

        else
        {
            echo "<script>alert('No Student found')</script>";
        }

    ?>
