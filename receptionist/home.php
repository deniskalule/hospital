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
                        <div class="col-12">
                            <div id="calendar" class="mt-3">
                        </div>
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