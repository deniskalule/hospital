<?php

include("../includes/conn.php");

if(isset($_POST['add']))
{   
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $date = date('d-m-y');
    $password = '123456';

        $sql = "select * from staff order by staffID DESC LIMIT 1";
		$query = $conn->query($sql);
        echo $query->num_rows;
		if($query->num_rows > 0)
		{
			if($row = $query->fetch_assoc())
			{
				$staff_id = $row['staffID'];
				$init = "STAFF";
				$get_numbers = str_replace($init,"",$staff_id);
				$id_increase = $get_numbers + 1;
				$get_string = str_pad($id_increase,3,0,STR_PAD_LEFT);
				$staff = $init. $get_string;
				$sql = "INSERT INTO staff (staffID, FullNames, Date_Of_Birth, Address,Gender,Contact, Department,creation_date,password) VALUES ('$staff', '$fname', '$dob', '$address','$gender','$contact', '$department','$date','$password')";
				if($conn->query($sql)){
					$_SESSION['success'] = 'Staff added successfully';
				}
				else{
					$_SESSION['error'] = "error";
				}
			}
            
			
			
		}
        else 
        {
            $staff= "STAFF"."001";
            $sql = "INSERT INTO staff (staffID, FullNames, Date_Of_Birth, Address,Gender,Contact, Department,creation_date,password) VALUES ('$staff', '$fname', '$dob', '$address','$gender','$contact', '$department','$date','$password')";
            if($conn->query($sql)){
                $_SESSION['success'] = 'Staff added successfully';
            }
            else{
                
                $_SESSION['error'] = 'error';
            }
        }


}
else{
    $_SESSION['error'] = 'Fill up add form first';
}

if(isset($_POST['update']))
{
    $staff_id = $_POST['staff_id'];
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $mod_date = date('y/m/d');

    $update = "update staff set FullNames = '$fname', Contact ='$contact',Date_Of_Birth='$dob',Gender = '$gender', Department='$department' where staffID='$staff_id'";
    if($conn->query($update)){
        echo "success";
        $_SESSION['success'] = 'Staff updated successfully';
    }
    else{
        
        $_SESSION['error'] = 'error';
    }


}

if(isset($_POST['delete']))
{
    $staff_id = $_POST['staff_id'];
    $delete = "delete from staff where staffID = '$staff_id'";
    if($conn->query($delete))
    {
        echo "success";
        $_SESSION['success'] = 'Staff deleted successfully';
    }
}

header('location: ../staff.php');


?>