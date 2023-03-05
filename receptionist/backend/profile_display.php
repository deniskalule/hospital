<?php

include("../includes/conn.php");

if(isset($_POST['id']))
{
    $staff_id =  $_POST['id'];
    $select = "select * from staff where staffID = '$staff_id'";
    $query = $conn->query($select);

    $row = $query->fetch_assoc();

    ?>

    <div class="profile_details col-12 shadow bg-white p-3 rounded">
        <div class="header">
            <h6 class="text-center">
                Receptionist Profile Details
            </h6>
            <hr> 
        </div>
        <div style="display:flex;">
            <h6>Staff ID:</h6> 
            <p class="ml-2"><?= $row['staffID'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Name:</h6> 
            <p class="ml-2"><?= $row['FullNames'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Contact:</h6> 
            <p class="ml-2" style="font-size: 13px;"><?= $row['Contact'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Address:</h6> 
            <p class="ml-2" style="font-size: 13px;"><?= $row['Address'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Department:</h6> 
            <p class="ml-2" style="font-size: 13px;"><?= $row['Department'] ?></p>
        </div>

        <!-- buttons -->
        <!-- <div class="buttons mt-2">
            <a href="" id="<?= $name ?>" data-toggle="modal" data-target="#edit" class="btn edit btn-info btn-sm"><i class="fas fa-edit    mr-2"></i>Edit</a>

        </div> -->
        <!-- buttons -->

        <!-- password change -->
        <form action="./backend/password_change.php" class="form mt-3" method="post">

            <h6>Change password</h6>
            <hr>
            <input type="hidden" name="staff_id" value="<?=$row['staffID']?>">
            <div class="form-group" >
                <label for="">Enter old password: </label>
                <input type="password" name = "opassword" class="form-control" required>
            </div>

            <div class="form-group" >
                <label for="">Enter new password: </label>
                <input type="password" name = "npassword" class="form-control" required>
            </div>
            <div class="form-group" >
                <label for="">Confirm password: </label>
                <input type="password" name = "cpassword" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success btn-sm" name="change" value="Change">
            <a href="" class="btn btn-dark btn-sm pull-right"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Close</a>

        </form>
        <!-- password change -->
        


    </div>
               


    <?php
}


?>
