<?php
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
                    <div class="add-doctor bg-white shadow rounded">
                    <form action="" class="form rounded">
                        <h6 class="text-center bg-info p-2">Add patient</h6>
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
                </div>
                <div class="col-lg-7">
                    <table class="table p-3" id="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm" style="font-size: 12px; padding-top: -10px; height:25px;">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                                <tr>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>how</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>doing</td>
                                </tr>
                        <tbody>
                            
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