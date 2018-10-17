<?php

include '../connection.php';

    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $standerd = $_POST['standerd'];
    $id = $_POST['id'];
    $image = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];

    move_uploaded_file($tempname, "../images/$image");
$sql="UPDATE `student` SET `rollno` = '$rollno',`name` = '$name', `city` = '$city', `phone` = '$phone', `standerd` = '$standerd', `image` = '$image' WHERE `id` = $id";
   // $sql = "UPDATE student SET rollno='$rollno',name='$name',city='$city',phone='$phone', standerd='$standerd', image='$image',id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'data updated successfully';

        header('location:updatestudent.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>