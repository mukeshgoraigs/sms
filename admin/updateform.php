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
include ('header.php');
?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-danger"><a href="http://localhost/sms/admin/admindash.php">Back</a></button>
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
include ('../connection.php');

$id=$_GET['id'];

$s="SELECT * FROM student WHERE id='$id'";
$run=mysqli_query($conn,$s);
$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label>Roll no</label>
                <input type="text"class="form-control" value="<?php echo $data['rollno'];?>" name="rollno"required>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text"class="form-control" value="<?php echo $data['name'];?>" name="name"required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text"class="form-control" value="<?php echo $data['city'];?>"name="city"required>
            </div>
            <div class="form-group">
                <label>Mobile No</label>
                <input type="text"class="form-control" value="<?php echo $data['phone'];?>"name="phone"required>
            </div>
            <div class="form-group">
                <label>Standerd</label>
                <input type="number"class="form-control" value="<?php echo $data['standerd'];?>"name="standerd"required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file"class="form-control" name="image">
            </div>
            <div class="form-group">
<input type="hidden" name="id"value="<?php echo $data['id'];?>">
                <button class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
