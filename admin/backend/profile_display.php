<?php

include("../includes/conn.php");

if(isset($_POST['id']))
{
    $name =  $_POST['id'];
    $select = "select * from admin where name = '$name'";
    $query = $conn->query($select);

    $row = $query->fetch_assoc();

    ?>

    <div class="profile_details col-12 shadow bg-white p-3 rounded">
        <div class="header">
            <h6 class="text-center">
                Admin Profile Details
            </h6>
            <hr> 
        </div>
        <div style="display:flex;">
            <h6>Name:</h6> 
            <p class="ml-2"><?= $row['name'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Email:</h6> 
            <p class="ml-2" style="font-size: 13px;"><?= $row['email'] ?></p>
        </div>
        <!-- buttons -->
        <div class="buttons mt-2">
            <a href="" id="<?= $name ?>" data-toggle="modal" data-target="#edit" class="btn edit btn-info btn-sm"><i class="fas fa-edit    mr-2"></i>Edit</a>

        </div>
        <!-- buttons -->

        <!-- password change -->
        <form action="./backend/password_change.php" class="form mt-3" method="post">
            <h6>Change password</h6>
            <hr>
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
                <!-- Modal for edit -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h6 class="text-center text-white p-2">Edit Admin information</h6>
                                <button type="button" class="close text-center" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="./backend/adminedit.php" method="post" class="form rounded">
                                <input type="hidden" name= "staff_id" value="<?= $staff_id ?>">

                            
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-12">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $row['name'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                    
                                </div>
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-12">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="<?= $row['email'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                    
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success btn-sm mb-3" name="update" value="Update admin">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>


    <?php
}


?>