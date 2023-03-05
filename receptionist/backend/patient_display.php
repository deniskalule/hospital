<?php

include("../includes/conn.php");

if(isset($_POST['id']))
{
    $patient_id = $_POST['id'];
    $select = "select * from patient where patientID = '$patient_id'";

    $query = $conn->query($select);
    $row = $query->fetch_assoc();

    ?>

    <div class="container">
        <div class="doc_details shadow bg-white p-5 rounded">
            <!-- doctor details -->
            <div class="header">
                <h5 class="text-uppercase text-center">Patient details</h5>
                <hr>
            </div>

            <div style="display:flex;">
                <h6>Patient ID:</h6> 
                <p class="ml-2"><?= $row['patientID'] ?></p>
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
                <h6>Reason:</h6> 
                <p class="ml-2"><?= $row['Disease'] ?></p>
            </div>

            <!-- buttons -->
            <div class="buttons mt-3">
                <hr>
                <a href="" id="<?= $patient_id ?>" data-toggle="modal" data-target="#edit" class="btn edit btn-info btn-sm"><i class="fas fa-edit    mr-2"></i>Edit</a>
                <!-- <a href="" id="<?= $patient_id ?>" data-toggle="modal" data-target="#delete" class="btn delete btn-danger btn-sm"><i class="fas fa-trash    mr-2"></i>Delete</a> -->

                <a href="" class="btn btn-dark btn-sm pull-right"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Close</a>
            </div>
            <!-- buttons -->
            
            

            <!-- Modal for edit -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h6 class="text-center text-white p-2">Edit Patient information</h6>
                                <button type="button" class="close text-center" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="./backend/patientadd.php" class="form rounded" method="post">
                                    <input type="hidden" name="patient_id" value="<?=$patient_id?>">
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-12">
                                            <label for="">Full name</label>
                                            <input type="text" name="fname" value="<?= $row['FullNames'] ?>" id="" class="form-control btn-sm" required>
                                        </div>
                                        
                                    </div>
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-6">
                                            <label for="">Contact</label>
                                            <input type="text" name="contact" value="<?= $row['Contact'] ?>" id="" class="form-control btn-sm" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Date of birth</label>
                                            <input type="date" name="dob" id="" value="<?= $row['Date_Of_Birth'] ?>" class="form-control btn-sm" required>
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
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-12">
                                        <label for="">Reason</label>
                                        <input type="text" name="reason" value="<?= $row['Disease'] ?>" id="" class="form-control btn-sm" required>

                                        <!-- <textarea style="border: 0.5px solid rgb(15, 15, 145);" value="<?= $row['Disease'] ?>" class="form-control" name="reason" id="" rows="2"></textarea> -->
                                        </div>
                                    
                                    </div>
 

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success btn-sm mb-3" name="update" value="Update patient">
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