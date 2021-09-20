
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

    header("location:../pages/login.php");
}




if(isset($_POST['set'])){

  $id = $_POST['id'];
 $sname = $_POST['sname'];
   $apipr = $_POST['apipr'];
   $apipu = $_POST['apipu'];
   $currency = $_POST['currency'];
   $branch = $_POST['branch'];
   $bname = $_POST['bname'];
   $baddress = $_POST['baddress'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $title = $_POST['title'];
   $logo = $_FILES['logo']['name'];
   $target = "logo/".basename($logo);
   
   $sql = "SELECT email FROM settings WHERE id = '$id'";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    $msg = 'Settings already added.';

}else{


   $sql = "INSERT INTO settings (sname, apipr, apipu, currency, branch, bname, baddress, email, phone, title, logo) VALUES ('$sname','$apipr','$apipu','$currency','$branch','$bname','$baddress','$email','$phone','$title','$logo')";
   
   if(mysqli_query($link, $sql)){

    move_uploaded_file($_FILES['logo']['tmp_name'], $target);
			
			$msg = "Settings Added!";
		}else{
			
			$msg = "Settings Not Added!";
		}
}

}




if(isset($_POST['uset'])){

  $id = $_POST['id'];
  $sname = $_POST['sname'];
    $apipr = $_POST['apipr'];
    $apipu = $_POST['apipu'];
    $currency = $_POST['currency'];
    $branch = $_POST['branch'];
    $bname = $_POST['bname'];
    $baddress = $_POST['baddress'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $logo = $_FILES['logo']['name'];
    $target = "logo/".basename($logo);
    
     
 
    $sql = "UPDATE settings SET  sname='$sname', apipr='$apipr', apipu='$apipu', currency='$currency', branch='$branch', bname='$bname', baddress='$baddress', email='$email', phone='$phone', title='$title', logo='$logo' WHERE id = '$id' ";
    
    if(mysqli_query($link, $sql)){
 
     move_uploaded_file($_FILES['logo']['tmp_name'], $target);
       
       $msg = "Settings Updated!";
     }else{
       
       $msg = "Settings Not Updated!";
     }
 }
 
 








    ?>




  <!-- Main Content -->
       <div class="container-fluid bg-white rounded-top shadow h-100 py-2 p-3 m-3 >
        <section class="section">
          <div class="section-header">
            <h1><i class="fa fa-home " style="font-size:20px"></i><span style="font-size:20px;">CONFIGURATION</span></h1>
           
          
          </div>


        
         

 
          <hr></hr>
          
        
          
            <div class="box-header with-border">
            
            <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
          </br>

     <form class="form-horizontal" action="settings.php?id=<?php echo $id ;?>" method="POST" enctype="multipart/form-data" >

           <legend>Courier Settings </legend>
		   
		  <div class="form-group">
        <input type="hidden" name="id"  value="<?php echo $id;?>" class="form-control">
        </div>
 <div class="form-group">
        <input type="text" name="sname" placeholder="site url"  value="<?php echo $bankurl;?>" class="form-control">
        </div>

     

        
        
     <div class="form-group">
        <input type="text" name="currency" placeholder="currency" value="<?php echo $currency;?>"  class="form-control">
        </div>

        

        <div class="form-group">
        <input type="text" name="bname" placeholder="bank name" value="<?php echo $name;?>"  class="form-control">
        </div>
        
     <div class="form-group">
        <input type="text" name="baddress" placeholder="address" value="<?php echo $address;?>"  class="form-control">
        </div>

        <div class="form-group">
        <input type="text" name="email" placeholder="email" value="<?php echo $emaila;?>"  class="form-control">
        </div>
        
     <div class="form-group">
        <input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"  class="form-control">
        </div>

      
        
     <div class="form-group">
        <input type="text" name="title" placeholder="title" value="<?php echo $title;?>"  class="form-control">
        </div>

        <div class="form-group">
        <input type="file" name="logo" placeholder="logo" value="<?php echo $logo;?>"  class="form-control">
        </div>
        
     

      
      
	  
	  <button style="" type="submit" class="btn btn-primary" name="set" > <i class="fa fa-send"></i>&nbsp; Add Settings </button>

    <button style="" type="submit" class="btn btn-success" name="uset" > <i class="fa fa-send"></i>&nbsp; Update Settings </button>

    </form>


    </div>
   </div>

   </div>
  </div>
  </section>
    <footer class="sticky-footer bg-white mt-3">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BOclassified 2021</span>
                    </div>
                </div>
            </footer>
</div>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    
<script>

