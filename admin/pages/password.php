<?php

session_start();
if(isset($_SESSION['uid'])){
 
 
 $id = $_GET['id'];
  include '../../config/database.php';
  include '../../config/config.php';
  include 'header.php';


  $msg = "";

}
else{

    header("location:../pages");
}











if(isset($_POST['submit'])){


$opassword =$link->real_escape_string($_POST['opassword']);
$cpassword =$link->real_escape_string($_POST['cpassword']);
$password =$link->real_escape_string($_POST['password']);
$email =$link->real_escape_string($_POST['email']);


if ( $opassword == $cpassword){
    
    
$sql = "UPDATE admin SET password='$password' WHERE email='$email'";

    
  mysqli_query($link, $sql);

  

    $msg= " Password changed successfully";
    

 }
 
 else{
    

 $msg= "Wrong Old Password! ";
}
    

}


    ?>





  <!-- Main Content -->
       <div class="container-fluid bg-white rounded-top p-3 m-3 >
        <section class="section">
          <div class="section-header">
            <h1><i class="fa fa-home " style="font-size:20px"></i><span style="font-size:20px"> CHANGE PASSWORD</span></h1>
           <hr>
          

   


       

<div class="col-md-12 col-sm-12 col-sx-12">
          <div class="box box-default">
            <div class="box-header with-border">

          
          </br>
          	<?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
<div class="col-md-9 col-sm-12 col-sx-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header col-5 bg-white">
             
             
              <form class="form-horizontal" action="password.php?id=<?php echo $id ;?>" method="POST" >
   <div class="form-group mx-sm-3 mb-2">
<input type="text"  name="opassword"   placeholder="Old Password" class="form-control">
 
</div>          
<div class="form-group form-group mx-sm-3 mb-2">
<input type="password"  name="password"   placeholder="New Password" class="form-control">
 
</div>

<div class="form-group">
<input type="hidden"  name="cpassword"  value="<?php  echo $_SESSION['password']?>"  class="form-control">
 
</div>
             
<div class="form-group">
<input type="hidden"  name="email"  value="<?php  echo $_SESSION['email']?>" class="form-control">
 
</div>

<div class="form-group mx-sm-3 mb-2">
<input type="submit"  name="submit" value="Change Password" class="btn btn-warning">
 
</div>
</form>

            </div>
          </div>
    
        </div>
        
             </div>
          </div>
    
        </div>     </div>
        
          </section>
          </div>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    
<script>
        