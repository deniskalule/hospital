<?php
session_start();
include("./includes/conn.php");

// if login button is clicked
if(isset($_POST['login']))
{
    echo $username = $_POST['username'];
    echo $password = $_POST['password'];

    $select = "select * from admin";

    $result = $conn->query($select);
    
    while($row = $result->fetch_assoc())
    {
        $uname = $row['username'];
        $pass = $row['password'];
        $id = $row['id'];
    }

    $x = strcasecmp($password, $pass);
    $y = strcasecmp($username, $uname);

    if(strcasecmp($password, $pass)==0 && strcasecmp($username, $uname)==0)
    {
        $_SESSION['admin'] = $id;
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