<?php
session_start();
error_reporting();
if(isset( $_SESSION['name']))
{
    echo "";
}
else
{
    header('http://localhost/sms/');
}

?>

<?php
include ('header.php');
?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group col-md-offset-11">
            <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
        </div>
    </div>
</div>
<?php
include ('titlehead.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
  <div class="container-fluid">
      <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
          <label>Roll no</label>
          <input type="text"class="form-control" name="rollno"required>
      </div>
      <div class="form-group">
          <label>Name</label>
          <input type="text"class="form-control" name="name"required>
      </div>
      <div class="form-group">
          <label>City</label>
          <input type="text"class="form-control" name="city"required>
      </div>
      <div class="form-group">
          <label>Mobile No</label>
          <input type="text"class="form-control" name="phone"required>
      </div>
      <div class="form-group">
          <label>Standerd</label>
          <input type="number"class="form-control" name="standerd"required>
      </div>
      <div class="form-group">
          <label>Image</label>
          <input type="file"class="form-control" name="image">
      </div>
          <div class="form-group">

              <button class="btn btn-primary" name="submit">Submit</button>
          </div>
  </div>
  </div>
</form>

<?php
if(isset($_POST['submit'])) {
    include '../connection.php';
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $standerd = $_POST['standerd'];
    $image = $_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];

    move_uploaded_file($tempname,"../images/$image");

    $sql = "INSERT INTO student (rollno,name,city,phone,standerd,image)VALUES ('$rollno','$name','$city','$phone','$standerd','$image')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['name']=$name;
        header('http://localhost/sms/admin/addstudent.php');
    } else {
        echo 'failed';
    }
    $conn->close();
}
?>






