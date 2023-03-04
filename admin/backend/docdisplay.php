<?php

include("../includes/conn.php");

if(isset($_POST['id']))
{
    $doc_id = $_POST['id'];
    $select = "select * from doctors where doc_id = '$doc_id'";

    $query = $conn->query($select);
    $row = $query->fetch_assoc();

    ?>

    <div class="container">
        <div class="doc_details shadow bg-white p-5 rounded">
            <!-- doctor details -->
            <div class="header">
                <h5 class="text-uppercase text-center">doctor details</h5>
                <hr>
            </div>

            <div style="display:flex;">
                <h6>Doctor ID:</h6> 
                <p class="ml-2"><?= $row['doc_id'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Name:</h6> 
                <p class="ml-2"><?= $row['surname'].' ' ?><?= $row['other_names'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Email:</h6> 
                <p class="ml-2"><?= $row['email'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Contact:</h6> 
                <p class="ml-2"><?= $row['contact'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Gender:</h6> 
                <p class="ml-2"><?= $row['gender'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Role:</h6> 
                <p class="ml-2"><?= $row['role'] ?></p>
            </div>
            <div style="display:flex;">
                <h6>Department:</h6> 
                <p class="ml-2"><?= $row['department'] ?></p>
            </div>

            <!-- buttons -->
            <div class="buttons mt-3">
                <hr>
                <a href="" id="<?= $doc_id ?>" data-toggle="modal" data-target="#edit" class="btn edit btn-info btn-sm"><i class="fas fa-edit    mr-2"></i>Edit</a>
                <a href="" id="<?= $doc_id ?>" data-toggle="modal" data-target="#delete" class="btn delete btn-danger btn-sm"><i class="fas fa-trash    mr-2"></i>Delete</a>

                <a href="" class="btn btn-dark btn-sm pull-right"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Close</a>
            </div>
            <!-- buttons -->
            
            <!-- Modal for delete -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title">Delete Doctor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="./backend/doctoradd.php" method="post">
                                <input type="hidden" name= "doc_id" value="<?= $doc_id ?>">

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
                            <h6 class="text-center text-white p-2">Add doctor</h6>
                                <button type="button" class="close text-center" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="./backend/doctoradd.php" method="post" class="form rounded">
                                <input type="hidden" name= "doc_id" value="<?= $doc_id ?>">
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-6">
                                        <label for="">Surname</label>
                                        <input type="text" name="sname" value="<?= $row['surname'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Other names</label>
                                        <input type="text" name="lname" value="<?= $row['other_names'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-6">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="<?= $row['email'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Phone number</label>
                                        <input type="text" name="contact" value="<?= $row['contact'] ?>" id="" class="form-control btn-sm" required>
                                    </div>
                                </div>
                                <div class="row pl-2 pr-2">
                                    <div class="form-group col-6">
                                        <label for="">Gender</label>
                                        <input type="text" name="gender" value="<?= $row['gender'] ?>" id="" class="form-control btn-sm" required>

                                        
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="<?= $row['address'] ?>"  id="" class="form-control btn-sm" required>
                                    </div>
                                </div>

                                <div class="form-group pl-2 pr-2">
                                    <label for="">Role: </label>
                                    <input type="text" name="role" value="<?= $row['role'] ?>" id="" class="form-control btn-sm" required>
                                </div>
                                <div class="form-group pl-2 pr-2">
                                    <label for="">Department: </label>
                                    <input type="text" name="department" value="<?= $row['department'] ?>" id="" class="form-control btn-sm">
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success btn-sm mb-3" name="update" value="Update doctor">
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