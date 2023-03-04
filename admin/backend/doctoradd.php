<?php

include("../includes/conn.php");

if(isset($_POST['add']))
{   
    $sname = $_POST['sname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $department = $_POST['department'];
    $date = date('y/m/d');

        $sql = "SELECT * FROM doctors ORDER BY doc_id DESC LIMIT 1";
		$query = $conn->query($sql);
        echo $query->num_rows;
		if($query->num_rows > 0)
		{
			if($row = $query->fetch_assoc())
			{
				echo $doc_id = $row['doc_id'];
				$init = "DOC";
				$get_numbers = str_replace($init,"",$doc_id);
				$id_increase = $get_numbers + 1;
				$get_string = str_pad($id_increase,3,0,STR_PAD_LEFT);
				$doc = $init. $get_string;
				$sql = "INSERT INTO doctors (doc_id, surname, other_names, email,contact,gender, address,role,department,creation_date) VALUES ('$doc', '$sname', '$lname', '$email','$contact','$gender', '$address','$role','$department','$date')";
				if($conn->query($sql)){
					$_SESSION['success'] = 'Doctor added successfully';
				}
				else{
					$_SESSION['error'] = "error";
				}
			}
            
			
			
		}
        else 
        {
            $doc= "DOC"."001";
            $sql = "INSERT INTO doctors (doc_id, surname, other_names, email,contact,gender, address,role,department) VALUES ('$doc', '$sname', '$lname', '$email','$contact','$gender', '$address','$role','$department')";
            if($conn->query($sql)){
                $_SESSION['success'] = 'Doctor added successfully';
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
    $doc_id = $_POST['doc_id'];
    $sname = $_POST['sname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $department = $_POST['department'];
    $mod_date = date('y/m/d');

    $update = "update doctors set surname = '$sname',other_names = '$lname', email ='$email',contact='$contact',gender = '$gender', address='address', role='$role',department='$department',modification_date='$mod_date' where doc_id='$doc_id'";
    if($conn->query($update)){
        echo "success";
        $_SESSION['success'] = 'Doctor updated successfully';
    }
    else{
        
        $_SESSION['error'] = 'error';
    }


}

if(isset($_POST['delete']))
{
    $doc_id = $_POST['doc_id'];
    $delete = "delete from doctors where doc_id = '$doc_id'";
    if($conn->query($delete))
    {
        echo "success";
        $_SESSION['success'] = 'Doctor deleted successfully';
    }
}

header('location: ../doctor.php');


?>