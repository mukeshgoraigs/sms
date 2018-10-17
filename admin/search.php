

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


<table border="1">

            <tr>
                <th colspan="3">Student Details</th>
            </tr>

            <tr>
                <td colspan="5"><img src="images/<?php echo $data['image']; ?>" style="max-height: 150px;max-width: 150px;"/>
                </td>

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
                <th>Mobile No</th>
                <td><?php echo $data['phone']; ?></td>
            </tr>
            <tr>
                <th>Standerd</th>
                <td><?php echo $data['standerd']; ?></td>
            </tr>


</table>

    <?php
    }

else
{
    echo "<script>alert('No Student found')</script>";
}

?>


