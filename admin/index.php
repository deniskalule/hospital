<?php

    session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}


include("./includes/header.php");

?>
    
<div class="row login-section">
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-3 col-md-3 logo-section text-center shadow">
        <img src="" alt="logo" width="45" height="45">
        <p class="text-white">Welcome to Byeyale Citizens Clinic</p>
    </div>
    <div class="col-lg-3 col-md-3 login-form shadow">
        <h5 class="text-center mb-5">Admin Login</h5>
        <?php
          if(isset($_SESSION['error'])){
            echo "
              <div class='alert alert-danger text-center'>
                <p style='font-size: 12px;''>".$_SESSION['error']."</p> 
              </div>
            ";
            unset($_SESSION['error']);
          }
        ?>
        <form action="login.php" class="form form-sm" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Username: </label>
              <input type="text" name="username" id="" class="form-control btn-sm" required>
              
            </div>
            <div class="form-group">
              <label for="">Password:</label>
              <input type="text" name="password" id="" class="form-control btn-sm" placeholder=""required>
              
            </div>
            <input name="login" id="" class="btn btn-dark form-control" type="submit" value="Login">
        </form>
    </div>
    <div class="col-lg-3 col-md-3"></div>
</div>
      
<?php
include("./includes/footer.php");
?>
    
