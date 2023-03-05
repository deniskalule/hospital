<?php

include("../includes/conn.php");

if(isset($_POST['change']))
{
    $staff_id = $_POST['staff_id'];
    echo $old_password = $_POST['opassword'];
    echo $new_password = $_POST['npassword'];
    echo $cpassword = $_POST['cpassword'];

    $select = "select password from staff where staffID = '$staff_id'";
    $query = $conn->query($select);

    $row = $query->fetch_assoc();
    $pass = $row['password'];

    if (strcasecmp($old_password,$pass) == 0)
    {
        if(strcasecmp($new_password,$cpassword) == 0)
        {
            $update = "update staff set password = '$new_password'";
            $query = $conn->query($update);

            if($query)
            {
                $_SESSION['success'] = 'Password changed';
            }
            else{
                
                $_SESSION['error'] = 'error';
            }
        }
    }

}

header('location: ../home.php');


?>