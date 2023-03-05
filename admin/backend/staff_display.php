<?php

include("../includes/conn.php");

if(isset($_POST['id']))
{
    echo $staff_id = $_POST['id'];
    $select = "select * from staff where staffID = '$staff_id'";

    $query = $conn->query($select);
    $row = $query->fetch_assoc();

    ?>

    <div class="container">
        <div class="doc_details shadow bg-white p-5 rounded">
            <!-- doctor details -->
            <div class="header">
                <h5 class="text-uppercase text-center">Staff details</h5>
                <hr>
            </div>

            <div style="display:flex;">
                <h6>Staff ID:</h6> 
                <p class="ml-2"><?= $row['staffID'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Name:</h6> 
                <p class="ml-2"><?= $row['FullNames']?></p>
            </div>
            <div style="display:flex;">
                <h6>Date of Birth:</h6> 
                <p class="ml-2"><?= $row['Date_Of_Birth'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Contact:</h6> 
                <p class="ml-2"><?= $row['Contact'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Gender:</h6> 
                <p class="ml-2"><?= $row['Gender'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Address:</h6> 
                <p class="ml-2"><?= $row['Address'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Department:</h6> 
                <p class="ml-2"><?= $row['Department'] ?></p>
            </div>

            <!-- buttons -->
            <div class="buttons mt-3">
                <hr>
                <a href="" id="<?= $staff_id ?>" data-toggle="modal" data-target="#edit" class="btn edit btn-info btn-sm"><i class="fas fa-edit    mr-2"></i>Edit</a>
                <a href="" id="<?= $staff_id ?>" data-toggle="modal" data-target="#delete" class="btn delete btn-danger btn-sm"><i class="fas fa-trash    mr-2"></i>Delete</a>

                <a href="" class="btn btn-dark btn-sm pull-right"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Close</a>
            </div>
            <!-- buttons -->
            
            <!-- Modal for delete -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title">Delete Staff</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="./backend/staffadd.php" method="post">
                                <input type="hidden" name= "staff_id" value="<?= $staff_id ?>">

                                <p class="text-center">Are you sure, you want to delete</p>
                                <div class="modal-footer">
                                    <button type="submit" name="delete" class="btn btn-success btn-sm">Yes</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">no</button>
                                    
                                </div>
                            </form>
                        </div>
        
                    </div>
                </div>
            </div>

            <!-- Modal for edit -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h6 class="text-center text-white p-2">Edit Staff information</h6>
                                <button type="button" class="close text-center" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="./backend/staffadd.php" method="post" class="form rounded">
                                <input type="hidden" name= "staff_id" value="<?= $staff_id ?>">

                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-12">
                                        <label for="">Full Name</label>
                                        <input type="text" name="fname" value="<?= $row['FullNames'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                    
                                </div>
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-6">
                                        <label for="">Contact</label>
                                        <input type="text" name="contact" value="<?= $row['Contact'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Date Of Birth</label>
                                        <input type="date" name="date" value="<?= $row['Date_Of_Birth'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-6">
                                        <label for="">Gender</label>   
                                        <input type="text" name="gender" value="<?= $row['Gender'] ?>" id="" class="form-control btn-sm" required>
    
                                        
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="<?= $row['Address'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                </div>

                                
                                <div class="form-group pl-2 pr-2">
                                    <label for="">Department: </label>
                                    <input type="text" name="department" value="<?= $row['Department'] ?>" id="" class="form-control btn-sm">
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success btn-sm mb-3" name="update" value="Update staff">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
}

?>