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
