<?php
include("./includes/session.php");
include("./includes/header.php");
?>

<div class="main shadow bg-light">
    <?php
    include("./includes/sidebar.php");
    ?>

    <!-- content -->
    <div class="content">
        <?php
        include("./includes/navbar.php");
        ?>

        <div class="inner-content">
            <!-- header -->
            <h6 class="ml-3">Patients information</h6>
            <!-- header -->

            <div class="row mt-2">
                <div class="col-lg-5">
                    <div class="add-patient bg-white shadow rounded">
                        <div class="text-center changeable-section  bg-primary p-2">
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" >
                                <li class="nav-item">
                                    <a class="nav-link active" style="font-size: 12px;" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Patient</a>
                                </li>
                               
                            </ul>
                        </div>
                    
                        
                        <!-- add patient -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="" class="form rounded">
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-12">
                                            <label for="">Full name</label>
                                            <input type="text" name="sname" id="" class="form-control btn-sm" required>
                                        </div>
                                        
                                    </div>
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-6">
                                            <label for="">Contact</label>
                                            <input type="text" name="contact" id="" class="form-control btn-sm" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Date of birth</label>
                                            <input type="date" name="dob" id="" class="form-control btn-sm" required>
                                        </div>
                                    </div>
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-6">
                                            <label for="">Gender</label>
                                            <select class="form-control" name="gender" id="" required>
                                            <option value="" selected>Select ...</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Address</label>
                                            <input type="text" name="address" id="" class="form-control btn-sm" required>
                                        </div>
                                    
                                    </div>
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-12">
                                        <label for="">Reason</label>
                                        <textarea style="border: 0.5px solid rgb(15, 15, 145);" class="form-control" name="reason" id="" rows="2"></textarea>
                                        </div>
                                    
                                    </div>

                                    

                                    <div class="button ">
                                        <center>
                                        <input type="submit" class="btn btn-dark mb-3" name="add" value="Add patient">
                                        </center>
                                    </div>
                                </form> 
                            </div>
                        <!-- add patient -->

                        <!-- diagonise -->
                        
                        </div>
                        
                        <!-- diagonise -->
                    
                    </div>
                </div>
                <div class="col-lg-7" id="display1">
                    <div id="mytable">
                        <table class="table p-3" id="table">
                            <thead>
                                <tr>
                                    <th>Patient_ID</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <?php
                                $select = "select * from patient order by patientID DESC";
                                $query = $conn->query($select);

                                while($row = $query->fetch_assoc())
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['patientID']?></td>
                                        <td><?= $row['FullNames']?></td>
                                        <td><?= $row['Contact']?></td>
                                        <td><?= $row['Address']?></td>
                                        
                                        <td>
                                        <a href="" id=<?=$row['patientID']?> class="btn patient btn-info btn-sm" style="font-size: 12px; padding-top: -10px; height:25px;">More ..</a>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                ?>
                                
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php
        include("./includes/bottom.php");
        ?>
    </div>
    <!-- content -->

    
</div>


<?php

include("./includes/footer.php");
?>