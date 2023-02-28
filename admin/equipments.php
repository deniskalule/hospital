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
            <h6 class="ml-3">Equipment information</h6>
            <hr>
            <!-- header -->

            <div class="row mt-2">
            <div class="col-lg-7">
                    <table class="table p-3" id="table">
                        <thead>
                            <tr>
                                <th>Equipment Name</th>
                                <th>Department of use</th>
                                <th>Purchase date</th>
                                <th>Number of equipment</th>
                                <th>Total amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                                <tr>
                                    <td>1</td>
                                    <td>hello</td>
                                    <td>there</td>
                                    <td>are</td>
                                    <td>you</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-sm" style="font-size: 12px; padding-top: -10px; height:25px;">More ..</a>
                                    </td>
                                </tr>
                                
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-5">
                    <div class="add-doctor bg-white shadow rounded">
                    <form action="" class="form rounded">
                        <h6 class="text-center bg-warning p-2">Add equipment</h6>
                        <div class="row pl-2 pr-2">
                            <div class="form-group col-6">
                                <label for="">Equipment Name</label>
                                <input type="text" name="ename" id="" class="form-control btn-sm" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Department of Use</label>
                                
                                <select class="form-control" name="dept" id="" required>
                                    <option value="" selected>Select ...</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row pl-2 pr-2">
                            <div class="form-group col-6">
                                <label for="">Purchase Date</label>
                                <input type="date" name="date" id="" class="form-control btn-sm" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Serial number / Token</label>
                                <input type="text" name="serial_number" id="" class="form-control btn-sm" required>
                            </div>
                        </div>
                        <div class="row pl-2 pr-2">
                            <div class="form-group col-6">
                                <label for="">Number of equipment</label>
                                <input type="number" name="number" id="" class="form-control btn-sm" required>
                                
                            </div>
                            <div class="form-group col-6">
                                <label for="">Amount per equipment</label>
                                <input type="number" name="number" id="" class="form-control btn-sm" required>
                            </div>
                        </div>

                        
                        <div class="button ">
                            <center>
                            <input type="submit" class="btn btn-dark mb-3" name="add" value="Add equipment">
                            </center>
                        </div>
                    </form>
                    </div>
                </div>
                
            </div>

            <?php
        include("./includes/bottom.php");
        ?>
</div>


<?php

include("./includes/footer.php");
?>