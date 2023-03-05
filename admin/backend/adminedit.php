<?php

include("../includes/conn.php");

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mod_date = date('y/m/d');

    $update = "update admin set name = '$name', email = '$email', modification_date = '$mod_date'";
    $query = $conn->query($update);

    if($query)
    {
        $_SESSION['success'] = 'Admin information edited';
    }
    else{
        
        $_SESSION['error'] = 'error';
    }
}

header('location: ../home.php');

?>