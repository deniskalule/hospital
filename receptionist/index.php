<?php
session_start();
if(isset($_SESSION['user'])){
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
        <h5 class="text-center mb-5">Receptionist Login</h5>
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
              <label for="">Staff ID: </label>
              <input type="text" name="staffid" id="" class="form-control btn-sm" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group">
              <label for="">Password:</label>
              <input type="password" name="password" id="" class="form-control btn-sm" placeholder="" aria-describedby="helpId">
              
            </div>
            <input name="login" id="" class="btn btn-primary" type="submit" value="Login">
        </form>
    </div>
    <div class="col-lg-3 col-md-3"></div>
</div>
      
<?php
include("./includes/footer.php");
?>
    
