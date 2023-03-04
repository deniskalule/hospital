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
                                        <h5 class="card-title">
                                        <span style="font-size: 20px;">
                                            <?php
                                            $query1 = $conn->query("select patientID from patient");
                                            
                                            echo $query1->num_rows;
                                            
                                            ?>
                                           </span>    
                                        PATIENTS</h5>
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
                                <div id="carouselId" class="carousel slide p-3 mt-4" data-ride="carousel">
                                    <h6 class="text-center">Descriptive statistics</h6>
                                    <p class="text-center" style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non temporibus earum accusantium.</p>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselId" data-slide-to="1"></li>
                                        
                                    </ol>
                                    <div class="carousel-inner bg-white rounded p-3 shadow" role="listbox">
                                        <div class="carousel-item active">
                                            <h6>Bar Graph</h6>
                                            <canvas id="mychart" class=""></canvas>
                                        </div>
                                        <div class="carousel-item">
                                            <h6>Line Graph</h6>
                                            <canvas id="my1" class=""></canvas>
                                        </div>
                                        
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="row shadow rounded p-3">
                         <!-- user profile -->
                        
                         <div class="user-profile text-center">
                            <h6 class="text-center">
                                ADMIN PROFILE
                            </h6>
                            <hr>
                            <div class="image">
                                <i class="fas fa-user-circle    " style="font-size: 50px;"></i>
                            </div>
                            <div class="user-details text-center">
                                <?php
                                $select = "select name,email from admin";
                                $query = $conn->query($select);
                    
                                $row = $query->fetch_assoc();
                                ?>
                                <h6><?= $row['name'] ?></h6>
                                <p><?= $row['email']; ?></p>
                            </div>
                            <input name="" id="" class="btn btn-primary form-control" type="button" value="Edit Profile">
                         </div>
                        <!-- user profile -->
                        <!-- calendar -->
                        
                       <!-- <div id="calendar" class="bg-dark text-white mt-3"> -->

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