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
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="card text-center bg-white shadow">
                                    <i class="fas fa-users    icon"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                           <span style="font-size: 20px;">
                                            <?php
                                            $query1 = $conn->query("select doc_id from doctors");
                                            
                                            echo $query1->num_rows;
                                            
                                            ?>
                                           </span>
                                        DOCTORS</h5>
                                    </div>
                                    <a href="doctor.php" class="card-footer doc">More info <i class="fas fa-arrow-circle-right    "></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card text-center bg-white shadow">
                                    <i class="fas fa-users    icon"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">PATIENTS</h5>
                                    </div>
                                    <a href="patients.php" class="card-footer patient">More info <i class="fas fa-arrow-circle-right    "></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card text-center bg-white shadow">
                                    <i class="fas fa-thermometer    icon"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">EQUIPMENT</h5>
                                    </div>
                                    <a href="equipments.php" class="card-footer equip">More info <i class="fas fa-arrow-circle-right    "></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 forms">
                                <!-- patient add forms -->
                                <h5 class="text-left mt-4">Add patient</h5>
                                <hr>
                                <form action="./backend/patientadd.php" class="form patient rounded shadow pl-2 pr-2" method="post">
                                    <div class="row pl-2 pr-2">
                                        <div class="form-group col-12">
                                            <label for="">Full name</label>
                                            <input type="text" name="fname" id="" class="form-control btn-sm" required>
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
                                <!-- patient add forms -->
                            </div>
                    
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="row shadow rounded p-3">
                         <!-- user profile -->
                        
                         <div class="user-profile text-center">
                            <h6 class="text-center">
                                RECEPTIONIST PROFILE
                            </h6>
                            <hr>
                            <div class="image">
                                <i class="fas fa-user-circle    " style="font-size: 50px;"></i>
                            </div>
                            <div class="user-details text-center">
                                <?php
                                $select = "select * from staff where staffID = '".$_SESSION['user']."'";
                                $query = $conn->query($select);
                    
                                $row = $query->fetch_assoc();
                                ?>
                                <h6><?= $row['FullNames'] ?></h6>
                                
                            </div>
                            <input name="" id="" class="btn btn-primary form-control" type="button" value="Edit Profile">
                         </div>
                        <!-- user profile -->
                        <!-- calendar -->
                        
                       <div class="row">
                        <!-- <div class="col-12">
                            <div id="calendar" class="bg-dark text-white p-3 text-center mt-3" style="width: 200px;">
                        </div> -->
                       </div>

                       </div>
                    
                        <!-- calendar -->
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