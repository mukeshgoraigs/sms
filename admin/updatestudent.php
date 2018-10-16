<?php
session_start();
error_reporting();
if(isset( $_SESSION['name']))
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
?>
<form action="updatestudent.php" method="post">
    <div class="container-fluid">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label>Enter Standerd</label>
                <input type="number"class="form-control" name="standerd"required>
            </div>
            <div class="form-group">
                <label>Enter Name</label>
                <input type="text"class="form-control" name="name"required>
            </div>


                <button class="btn btn-primary" name="submit">Search</button>
            </div>
        </div>
    </div>
</form>
<table align="center" width="80%" border="2"style="margin-top: 10px;">
    <tr style="background-color: #000000; color: white">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>City</th>
        <th>Mobile no</th>
        <th>Standerd</th>
        <th>Edit</th>
    </tr>

    <?php
    if(isset($_POST['submit']))
    {
        include ('../connection.php');
        $standerd=$_POST['standerd'];
        $name=$_POST['name'];


        $sql="SELECT * FROM student WHERE standerd='$standerd' AND name='$name'";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='8'>No Records found</td></tr>";
        }
        else
        {
            $count=0;
        }
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;

                ?>
    <tr align="center">
        <td><?php echo $count;?></td>
        <td><img src="../images/<?php echo $data['image'];?>"style="max-width: 100px;"/></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['rollno'];?></td>
        <td><?php echo $data['city'];?></td>
        <td><?php echo $data['phone'];?></td>
        <td><?php echo $data['standerd'];?></td>
        <td>Edit</td>
    </tr>
    <?php
            }


    }
?>

</table>