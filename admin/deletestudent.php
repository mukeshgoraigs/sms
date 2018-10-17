<?php
session_start();
error_reporting();
if(isset( $_SESSION['id']))
{
    echo "";
}
else
{
    header('http://localhost/sms/user/login.php');
}

?>

<?php
include ('titlehead.php');


include '../connection.php';

$id=$_GET['id'];


$sql = "DELETE FROM student WHERE id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
 header("Location: updatestudent.php");
 }
 else {
 echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>
