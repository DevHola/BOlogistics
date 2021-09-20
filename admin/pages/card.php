<?php
session_start();
if(isset($_SESSION['uid'])){
 
 
  include '../../config/database.php';
  include '../../config/config.php';
  include 'header.php';
  $msg = "";

}
else{

    header("location:../pages/login.php");
}



if(isset($_POST['delete'])){
    
    $pid = $_POST['pid'];
    
    $sql = "DELETE   FROM track  WHERE pid = '$pid'";
    
       if(mysqli_query($link, $sql)){
           
           $msg = "package deleted!";
           
       }else{
           
           $msg = "package not be deleted!"; 
       }
      

    
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
  
  
  
 
  



    
    
 
    
    
    
    
    
    

   
   



  </head>
  <body>

  <!-- Main Content -->
      <div class="container-fluid shadow h-100 py-2 rounded-top bg-white p-3 m-2" >

        <section class="section">

         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1><i class="fa fa-users ml-5" style="font-size:20px"></i> <span style="font-size:20px;">Update Package</span></h1>
           
          </div>
		  <hr>
		  
          <div class="col-md-12 col-sm-12 col-sx-12">
              
                <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>
              
                <div class="card mb-4">
          <div class="card-body">
               <div class="table-responsive" >
                     <table  class="table table-bordered bg-white" style="overflow-x: auto;overflow-y: hidden;" width="100%" cellspacing="0"  id="example">
                                    <thead>
                                        <tr>
                                             <th style="display:none">PID</th>
                                            <th>SENDER NAME</th>
                                            <th>EMAIL</th>
                                             <th>TRACK ID</th>
                                            <th>SHIPMENT DATE </th>
                                            <th>PACKAGE NAME</th>
                                            <th>LOCATION </th>
                                            <th>SHIPTMENT STATUS</th>
                                            
                                             <th>ACTION</th>
                                            <th>ACTION</th>
                                             <th>ACTION</th>
                                               <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php 
                                    $sql= "SELECT * FROM track";
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
   
					  
				  }else{
					 
				  }
				  
        
				  ?>
				

                            
                                        <tr class="odd gradeX">
                                      <form action="card.php" method="POST">
                                          
                                         <td style="display:none"> <input type="text" name="pid" value="<?php echo $row['pid'];?>"></td>
                                            <td><?php echo $row['sname'] ;?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['pid'];?></td>
                                            <td><?php echo $row['shipdate'];?></td>
                                                                                        <td><?php echo $row['pname'];?></td>
                                     <td><?php echo $row['location'];?></td>
                                        <td><?php echo $row['status'];?></td>   
                                           

                                            <td><button type="submit" name="delete" style="width:100%" class="btn btn-danger"><span class="fas fa-trash">-Delete </span></button></td>

                                          </form>
                                            <td><a href="card-edit.php?id=<?php echo $ids;?>"><button  name="view" style="width:100%" class="btn btn-info"><span class="fas fa-check">-Edit </span></button></a></td>
                                            <td><a href="print.php?id=<?php echo $row['id'];?>"><button  name="print" style="width:100%" class="btn btn-success"><span class="fas fa-print">-Print Receipt </span></button></a></td>
                                            
                                            <td><a href="ocontrol.php?pid=<?php echo $row['pid'];?>"><button  name="ocontrol" style="width:100%" class="btn btn-warning"><span class="fas fa-print">-Package Control </span></button></a></td>
                                            
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

  </body>
</html>