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

        $sql = "SELECT * FROM patient ORDER BY patientID";
		$query = $conn->query($sql);
        echo $query->num_rows;
		if($query->num_rows == 0)
		{
            $doc= "DOC"."001";
            $sql = "INSERT INTO patient (patientID, FullNames, Date_Of_Birth, Gender,Address,Disease,Contact, Creation_date) VALUES (NULL, '$fname', '$dob', '$gender','$address','$reason','$contact', '$date')";
            if($conn->query($sql)){
                $_SESSION['success'] = 'Patient added successfully';
            }
            else{
                
                $_SESSION['error'] = 'error';
            }
			
		}
        else 
        {
            
        }


}
else{
    $_SESSION['error'] = 'Fill up add form first';
}

// header('location: ../patient.php');


?>