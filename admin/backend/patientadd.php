<?php

include("../includes/conn.php");

if(isset($_POST['add']))
{   
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $reason = $_POST['reason'];
    $date = date('y/m/d');

        $sql = "SELECT * FROM patient order by patientID DESC limit 1";
		$query = $conn->query($sql);
        echo $query->num_rows;
		if($query->num_rows > 0)
		{
            if($row = $query->fetch_assoc())
			{
			    echo $patient = $row['patientID'];
				$init = "P";
				$get_numbers = str_replace($init,"",$patient);
				$id_increase = $get_numbers + 1;
				$get_string = str_pad($id_increase,3,0,STR_PAD_LEFT);
				$patientID = $init. $get_string;
				$sql = "INSERT INTO patient (patientID, FullNames, Date_Of_Birth, Gender,Address,Disease,Contact, Creation_date) VALUES ('$patientID', '$fname', '$dob', '$gender','$address','$reason','$contact', '$date')";
                if($conn->query($sql)){
                    $_SESSION['success'] = 'Patient added successfully';
                }
                else{
                    
                    $_SESSION['error'] = 'error';
                }
                }
            
            
			
		}
        else 
        {
            echo $patientID = "P"."001";
            $sql = "INSERT INTO patient (patientID, FullNames, Date_Of_Birth, Gender,Address,Disease,Contact, Creation_date) VALUES ('$patientID', '$fname', '$dob', '$gender','$address','$reason','$contact', '$date')";
            if($conn->query($sql)){
                $_SESSION['success'] = 'Patient added successfully';
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
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $reason = $_POST['reason'];
    $mod_date = date('y/m/d');

    $update = "update patient set FullNames = '$fname', Contact ='$contact',Date_Of_Birth='$dob',Gender = '$gender', Disease='$reason' where patientID='$patient_id'";
    if($conn->query($update)){
        echo "success";
        $_SESSION['success'] = 'Patient updated successfully';
    }
    else{
        
        $_SESSION['error'] = 'error';
    }


}

if(isset($_POST['delete']))
{
    $patient_id = $_POST['patient_id'];
    $delete = "delete from patient where patientID = '$patient_id'";
    if($conn->query($delete))
    {
        echo "success";
        $_SESSION['success'] = 'Patient deleted successfully';
    }
}

header('location: ../patients.php');


?>