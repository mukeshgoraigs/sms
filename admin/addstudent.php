<?php
include 'connection/connection.php';
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$standerd=$_POST['standerd'];
$image=$_POST['image'];
$s="INSERT INTO student (rollno,name,city,phone,standerd,image)VALUES ('$rollno','$name','$city','$phone','$standerd','$image')";
$q=mysqli_q($conn,$s);
if($q)
{
    echo 'data inserted';
}
else
{
    echo 'failed';
}
$conn->close();
?>