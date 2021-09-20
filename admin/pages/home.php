<?php
 session_start();
if(isset($_SESSION['uid'])){
 
 
  include '../../config/database.php';
  include '../../config/config.php';
 include 'users_query.php';
  include 'header.php';
  $msg = "";

}
else{

    header("location:../pages/login.php");
}



?>
  
 
 
  

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  

  <link rel="stylesheet" href=" https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
  <link rel="stylesheet" href=" https://cdn.datatables.net/buttons/1.5.6/css/buttons.jqueryui.min.css">



  

  <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href=" https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="">
 
  
    
    



  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.jqueryui.min.js"></script>
   
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
 
 
 
 <!-- Main Content -->
     <div class="container-fluid">
        <section class="section">
          





          <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Shipment</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">  <?php echo $totalu;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <a href="card.php">Update Shipment</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="history.php">Add Shipment History</a>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
            </br>
         
            
            
            
            
            
            
            </br>   </br>
            
            
              <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
          
           <div class="container">
                        <div class="card shadow mb-4">
          <div class="card-body">
		   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Last Shipment</h6>
                        </div>
               <div class="table-responsive">
                     <table class="table table-bordered" width="100%" cellspacing="0"  id="example">
                                    <thead>
                                        <tr>
                                             <th style="display:none">id</th>
                                            <th>SENDER NAME</th>
                                            <th>EMAIL</th>
                                             <th>TRACK ID</th>
                                            <th>SHIPMENT DATE </th>
                                            <th>PACKAGE NAME</th>
                                             <th>DELIVERY DATE</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php 
                                    $sql= "SELECT * FROM track 	ORDER BY id DESC LIMIT 10";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){  
				  if(isset($row['pid']) ){
	 $ids = $row['id'];									
 $pname = $row['pname'];
   $shipdate = $row['shipdate'];
   $saddress = $row['saddress'];
   $sname = $row['sname'];
   $raddress = $row['raddress'];
   $rname = $row['rname'];
   $email = $row['email'];
   $status = $row['status'];
   $location = $row['location'];
   $pdate = $row['pdate'];
      $pid = $row['pid'];
					  
				  }else{
					 
				  }
				  
        
				  ?>
				

                            
                                        <tr class="odd gradeX">
                                      
                                       <form class="form-horizontal" action="history.php" method="POST" enctype="multipart/form-data" >
                                      
                                      
                                      
                                      <td style="display:none"><input name="id" value="<?php echo $row['id'];?>"></td>
                                      
                                      
                                            <td><?php echo $row['sname'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['pid'];?></td>
                                            <td><?php echo $row['shipdate'];?></td>
                                                                                        <td><?php echo $row['pname'];?></td>
                                     

                                            <td><?php echo $row['edd'];?></td>
                                     
                                            
    
                                        </tr>

<?php    
          }
          }
?>


                                     </tbody>
                                </table>
                            </div>
                        </div>
						</div>
						</div>
                      </div>

      </div>
      </div>
      </div> 
      </div>
	   <footer class="sticky-footer bg-white mt-3">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BOclassified 2021</span>
                    </div>
                </div>
            </footer>
      </div>
	  </div>
      </div>
      </section>
	  
      </div>
      </div>       
     
     
     
     
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
       
    } );
    

    table.buttons().container()
        .insertBefore( '#example_filter' );

        table.buttons().container()
        .appendTo( '#example_wrapper .col-sm-12:eq(0)' );
} );



</script>

            
            
            
            
            
            
            
          </div>




            </div>
          </div>
        </section>
      </div>
