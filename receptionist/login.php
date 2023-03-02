<?php
session_start();
include("./includes/conn.php");

// if login button is clicked
if(isset($_POST['login']))
{
    echo $staffid = $_POST['staffid'];
    echo $password = $_POST['password'];

    $select = "select * from staff where staffID = '$staffid'";

    $result = $conn->query($select);
    
    while($row = $result->fetch_assoc())
    {
        echo $staffID = $row['staffID'];
        echo $pass = $row['password'];
    }


    if(strcasecmp($password, $pass)==0 )
    {
        $_SESSION['user'] = $staffID;
    }

    else
    {
        $_SESSION['error'] = 'Incorrect username or password';
    }


}
else{
    $_SESSION['error'] = 'Input voter credentials first';
}

header('location: index.php');


?>