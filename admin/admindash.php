<?php
session_start();
error_reporting();
if(isset( $_SESSION['username']))
{
  echo "";
}
else
{
    header('http://localhost/sms/user/login.php');
}

?>
<?php
include 'header.php';
?>

<div class="form-group col-md-offset-11">
    <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
</div>

<div class="container-fluid" align="center">
<h1 style="background-color: #530602;color: #fff; margin-left: 20px;margin-right: 20px; height: 140px;line-height: 140px;">Welcome to Admin Dashboard</h1>

</div>
<div class="dashboard">
<table style="width: 50%;"align="center">
    <tr>
        <td>1.</td><td><a href="addstudent.php">Insert Student Details</a> </td>
    </tr>
    <tr>
        <td>2.</td><td><a href="updatestudent.php">Update Student Details</a> </td>
    </tr>
    <tr>
        <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a> </td>
    </tr>
</table>
</div>
</body>
</html>
