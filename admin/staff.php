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
            <h6 class="ml-3">Staff information</h6>
            <!-- header -->
            <div class="message">
                <?php
                    if(isset($_SESSION['error'])){
                    echo "
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-warning'></i> Error!</h4>
                        ".$_SESSION['error']."
                        </div>
                    ";
                    unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                    echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Success!</h4>
                        ".$_SESSION['success']."
                        </div>
                    ";
                    unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['message']))
                    {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    }
                ?>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5">
                    <div class="add-doctor bg-white shadow rounded">
                    <form action="./backend/staffadd.php" method="post" class="form rounded">
                        <h6 class="text-center bg-primary p-2">Add staff</h6>
                        <div class="row pl-2 pr-2">
                            <div class="form-group col-12">
                                <label for="">Full Name</label>
                                <input type="text" name="fname" id="" class="form-control btn-sm" required>
                            </div>
                            
                        </div>
                        <div class="row pl-2 pr-2">
                            <div class="form-group col-6">
                                <label for="">Contact</label>
                                <input type="text" name="contact" id="" class="form-control btn-sm" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="date" id="" class="form-control btn-sm" required>
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

                        
                        <div class="form-group pl-2 pr-2">
                            <label for="">Department: </label>
                            <input type="text" name="department" id="" class="form-control btn-sm">
                        </div>

                        <div class="button ">
                            <center>
                            <input type="submit" class="btn btn-dark mb-3" name="add" value="Add staff">
                            </center>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <table class="table p-3" id="table">
                        <thead>
                            <tr>
                                <th>StaffID</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Departmentt</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from staff order by staffID ASC";
                            $query = $conn->query($sql);

                            while($row = $query->fetch_assoc())
                            {
                                ?>
                                <tr>
                                    <td><?= $row['staffID']?></td>
                                    <td><?= $row['FullNames']?></td>
                                    <td><?= $row['Contact']?></td>
                                    <td><?= $row['Department']?></td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm" style="font-size: 12px; padding-top: -10px; height:25px;">More ..</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>
                                
                    </table>
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