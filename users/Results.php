<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frightcargo</title>

    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css"/>


    <!-- font icofont -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300,400,400i,700,900" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- animte css -->
    <link rel="stylesheet" href="css/animate.css"/>

    <!-- camera css goes here -->
    <link rel="stylesheet" href="css/camera.css">

    <!-- venobox css goes here -->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- datepicker css goes here -->
    <link rel="stylesheet" href="css/datepicker.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css"/>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
</head>
<body class="request_quote">

    <!-- preloader -->
    <div class="preloader-bg">
        <div class="preloader-container">
            <div class="my-preloader"><img src="images/favicon.png" alt="preloader"></div>
        </div>
    </div>


    <!--================================
        START HEADER AREA
    =================================-->

    <div id="google_translate_element" style="margin-left:1%">

</div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>









    <!-- start header -->
    <header>
        <!-- container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <div class="tiny_header clearfix">
                    <div class="col-md-12">
                        <div class="tiny_header_wrapper">
                            <div class="header_info">
                                <ul>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="track_trace.php">Track Shipment</a></li>
                                </ul>
                            </div>

                            <div class="times">
                                <p><i class="fa fa-clock-o"></i> <span class="day">Mon - Fri</span> 9am - 6pm</p>
                            </div>

                            <div class="social_links">
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row end -->

            <!-- row start -->
            <div class="row">
                <div class="header_middle_wrapper clearfix">
                    <div class="col-md-3 xs_fullwidth col-xs-3">
                        <div class="logo_container" style="margin-top:-105px;">
                            <a href="../index.php" class="logo"><img src="images/logo.png" class="img-responsive" alt="logo Here"></a>
                        </div>
                    </div>

                   

                   
                </div>
            </div><!-- /.row end -->


        </div><!-- /.container end -->
    </header><!-- start header -->
    <!--================================
        END HEADER AREA
    =================================-->
    <section class="breadcrumb">

        <div class="breadcrumb_content">
            <!-- container starts -->
            <div class="container">
                <!-- row starts -->
                <div class="row">
                    <!-- col-md-12 starts -->
                    <div class="col-md-12">
                        <div class="breadcrumb_title_wrapper">
                            <div class="page_title">
                                <h1>Track Result</h1>
                            </div>
                            <ul class="bread_crumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="bread_active">Track Result</li>
                            </ul>
                        </div>
                    </div><!-- col-md-12 ends -->
                </div>
                <!-- /.row ends -->
            </div><!-- /.container ends -->
        </div>

        <!-- menu starts -->
        <div class="menu_area">

            <!-- container starts -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mainmenu nav_shadow">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav magic_menu">
                                       	<li class="active"><a href="index.php">Home</a></li>
										<li><a href="about_us2.php">About us</a></li>
                                      	<li><a href="services.php">services</a></li>
                                        <li><a href="track_trace.php">Track & Trace</a></li>
										<li><a href="admin/pages/login.php">login</a></li>
                                        <!--<li><a href="contact.php">contact</a></li>-->
                                    </ul>
                                    
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div><!-- main menu ends -->
                    </div>
                </div><!-- /.row end -->

            </div><!-- /.container ends -->
        </div><!-- menu ends -->
    </section>

        <!--================================
        START SLIDER AREA
    =================================-->

    <!--================================
        END SLIDER AREA
    =================================-->














<?php
include "../config/database.php";


$tid = $_GET['track'];
?>















    </br></br>


<div class="container " >





                                	<?php

			$sql= "SELECT * FROM track WHERE pid = '$tid'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);

				$row['email'];
				if(isset($row['location'])){

					$location = $row['location'];
				}

			  }

				  ?>



	<div class="content1 ml-5  pull-center" style="background-color:skyblue;border:1px solid grey;">
		<h2>Order Tracking: <?php echo $row['pid'];?></h2>
	</div>
	<div class="content2" style="background-color:#ffffff;">
		<div class="content2-header1 ">
			<p>Expected delivery date : <span><?php echo $row['edd'];?></span></p>
		</div>
		<div class="content2-header1">
			<p>Status : <span><?php echo $row['status'];?></span></p>
		</div>
		<div class="content2-header1">
			<p>Date Shipped : <span><?php echo $row['shipdate'];?></span></p>
		</div>
		<div class="clear"></div>
	</div>






	<?php

			$sql= "SELECT * FROM track WHERE pid = '$tid'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);

				$row['status'];

				 // if confirmed
				if(isset($row['status']) && $row['status'] == "confirm" ){



	     $confirm  =     ' <div class="confirm">
                <div class="imgcircle" style="background-color:#140354">
                <img src="images/confirm.png" alt="confirm order" style="display:"  >
            	</div>
				<span class="line"></span>
				<p  style="">Confirmed </p>
			    </div>';


				}

				// if processed

				if(isset($row['status']) && $row['status'] == "process"  ){

			 $confirm  =   ' <div class="confirm">

                <div class="imgcircle" style="background-color:#140354">
                <img src="images/confirm.png" alt="confirm order" style="display:"  >
            	</div>
				<span class="line"></span>
				<p  style="">Confirmed </p>
			    </div>



			    <div class="process">
           	 	<div class="imgcircle" style="background-color:#140354">
                	<img src="images/process.png" alt="process order" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non">Processing</p>
			</div>


			    ';


				}


				// if dispatched

				if(isset($row['status']) && $row['status'] == "dispatch" ){




				    $confirm  =   ' <div class="confirm">

                <div class="imgcircle" style="background-color:#140354">
                <img src="images/confirm.png" alt="confirm order" style="display:"  >
            	</div>
				<span class="line"></span>
				<p  style="">Confirmed </p>
			    </div>



			    <div class="process">
           	 	<div class="imgcircle" style="background-color:#140354">
                	<img src="images/process.png" alt="process order" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non">Processing</p>
			</div>



			    	<div class="quality">
				<div class="imgcircle" style="background-color:#140354">
                  <img src="images/quality.png" alt="quality check" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non"> Quality</p>
			</div>



			    <div class="dispatch">
				<div class="imgcircle" style="background-color:blue">
                	<img src="images/dispatch.png" alt="dispatch product" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non">Dispatched</p>
			</div>

			    ';



				}





				// if quality checked




				if(isset($row['status']) && $row['status'] == "quality" ){


				    $confirm  =   ' <div class="confirm">

                <div class="imgcircle" style="background-color:#140354">
                <img src="images/confirm.png" alt="confirm order" style="display:"  >
            	</div>
				<span class="line"></span>
				<p  style="">Confirmed </p>
			    </div>



			    <div class="process">
           	 	<div class="imgcircle" style="background-color:#140354">
                	<img src="images/process.png" alt="process order" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non">Processing</p>
			</div>



			    	<div class="quality">
				<div class="imgcircle" style="background-color:#140354">
                <img src="images/quality.png" alt="quality check" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non"> Quality </p>
			</div>
			    ';

				}

				// if delivered


				if(isset($row['status']) && $row['status'] == "deliver" ){



				    $confirm  =   ' <div class="confirm">

                <div class="imgcircle" style="background-color:#140354">
                <img src="images/confirm.png" alt="confirm order" style="display:"  >
            	</div>
				<span class="line"></span>
				<p  style="">Confirmed </p>
			    </div>



			    <div class="process">
           	 	<div class="imgcircle" style="background-color:#140354">
                	<img src="images/process.png" alt="process order" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non"> Processing</p>
			</div>



			    	<div class="quality">
				<div class="imgcircle" style="background-color:#140354">
                  <img src="images/quality.png" alt="quality check" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non"> Quality</p>
			</div>



			    <div class="dispatch">
				<div class="imgcircle" style="background-color:blue">
                	<img src="images/dispatch.png" alt="dispatch product" style="display:non">
            	</div>
				<span class="line"></span>
				<p style="display:non">Dispatched</p>
			</div>

	<div class="delivery">
				<div class="imgcircle" style="background-color:blue">
                	<img src="images/delivery.png" alt="delivery" style="display:non">
				</div>
				<p style="display:non"> Delivered</p>
			</div>
			';
				}


			  }

				  ?>

	<div class="content3">
        <div class="shipment">
		 <?php echo $confirm ;?>




			<div class="clear"></div>
		</div>
	</div>
</div>





































































<div class="container" style="margin-bottom:150px;">
    <div class="row">
        <div class="col-xs-12">
            <?php

			$sql= "SELECT * FROM track WHERE pid = '$tid'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);

				$row['email'];
				if(isset($row['location'])){

					$location = $row['location'];
				}

			  }

				  ?>


            <hr>
            <div class="row" >
                <div class="col-xs-12 col-md-4 col-lg-4 pull-left" >
                    <div class="panel panel-default height" style="background-color:#e8fafc">
                        <div class="panel-heading" style="color:#fff; background-color:skyblue">Shipment Details</div>
                        <div class="panel-body" style="background-color:#e8fafc">
                            <strong>Quantity : </strong> <?php echo $row['qty'];?> <br>
                           <br>


                            <strong>Weight : </strong> <?php echo $row['weight'];?><br>
                            <br>
                            <strong>Service Type : </strong>  <?php echo $row['servicetype'];?>
                                 <br>

                            <br>
                            <strong>Description : </strong>  <?php echo $row['pdesc'];?>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="panel panel-default height" style="background-color:#e8fafc">
                        <div class="panel-heading" style="color:#fff; background-color:skyblue" >Destination</div>
                        <div class="panel-body">
                           <strong>Receiver Name : </strong> <?php echo $row['rname'];?> <br>
                           <br>


                            <strong>Receiver Email : </strong> <?php echo $row['email'];?><br>
                            <br>
                            <strong>Receiver Address : </strong>  <?php echo $row['raddress'];?>

                            <br>
                            <br>
                            <strong>Expected Date of Delivery : </strong>  <?php echo $row['edd'];?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 pull-right">
                    <div class="panel panel-default height" style="background-color:#e8fafc">
                        <div class="panel-heading" style="color:#fff; background-color:skyblue">Origin</div>
                        <div class="panel-body">
                             <strong>Sender Name : </strong> <?php echo $row['sname'];?> <br>
                           <br>


                            <strong>Location : </strong> <?php echo $row['location'];?><br>
                            <br>
                            <strong>Sender Address : </strong>  <?php echo $row['saddress'];?>

                            <br>
                            <br>
                            <strong>Shipment Date  : </strong>  <?php echo $row['shipdate'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>History summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table  table-bordered bg-white" width="100%" cellspacing="0">
                            <thead class="bg-white">

                                <tr>

                                    <td><strong>Date</strong></td>
                                    <td class="text-center"><strong>Location</strong></td>
                                    <td class="text-center"><strong>Remark</strong></td>
                                    <td class="text-right"><strong>Status</strong></td>
                                </tr>
                            </thead>
                            <tbody>

                                	<?php

						$sql= "SELECT * FROM history WHERE pid = '$tid'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				  while($row = mysqli_fetch_assoc($result)){



				  ?>


                                <tr>



                                    <td><?php echo $row['pdate'];?></td>
                                    <td class="text-center"><?php echo $row['location'];?></td>
                                    <td class="text-center"><?php echo $row['remark'];?></td>
                                    <td class="text-right"><?php echo $row['status'];?></td>





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






            <?php

			$sql= "SELECT * FROM track WHERE pid = '$tid'";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);

				$row['image'];
				if(isset($row['image'])){

					$image = $row['image'];
				}

			  }

				  ?>


<div class="container" align="center">

   <div  align="center"><button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Package Image</button></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $row['pname'];?></h4>
        </div>
        <div class="modal-body">
          <div align="center"><img src="../admin/pages/pimages/<?php echo $row['image']?>" width="300" height="300"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>








        </div>
    </div>
</div>














 <!--================================
        START FOOTER
    =================================-->


    <footer>
        <div class="big_footer_wrapper section_padding mt-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 xxs_fullwidth col-xs-6">
                        <div class="footer_about_wrapper reveal animated" data-anim="fadeInLeftShort" >
                            <div class="footer_logo" style="margin-top:-110px;margin-right:15px;">
                                <a href="index.php" >
                                    <img src="images/footer_logo.png" class="img-responsive" alt="footer_logo">
                                </a>
                            </div>
                            <div class="footer_about_us" style="margin-top:-100px;">
                                <p style="text-align: justify;">Frightcargo offers a host of logistic management services and supply chain solutions.
								We provide innovative solutions with the best people, processes, and technology.  </p>
                            </div>
                            <div class="footer_social">
                                <h4>get connected</h4>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets sevices reveal animated" data-anim="fadeInRightShort" data-delay="0.2s">
                            <div class="widget_title">
                                <h4>our services</h4>
                            </div>
                            <div class="footer_links">
                                <ul>
                                    <li><a href="#">Sea Freight</a></li>
                                    <li><a href="#">Road Transportation</a></li>
                                    <li><a href="#">Air Freight</a></li>
                                    <li><a href="#">Railway Logistics</a></li>
                                    <li><a href="#">Packaging & Storage</a></li>
                                    <li><a href="#">Warehousing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets contact reveal animated" data-anim="fadeInRightShort" data-delay="0.4s">
                            <div class="widget_title">
                                <h4>contact us</h4>
                            </div>
                            <div class="footer_address">
                                <ul>
                                    <li><span class="fa fa-paper-plane-o"></span> <div style="margin-top:-30px;margin-left:10px;" class="address_right">State Liaison office - Owena House<br> ( Ralph Shodeinde st, Central Business Dis,Abuja ).
</div></li>
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        <div class="number address_right">
                                            <a href="tel:07018373283">07018373283</a>
                                            <a href="tel:08134901464">08134901464</a>
											<a href="tel:09049848925">09049848925</a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="fa fa-envelope-o"></span>
                                        <div class="address_right" style="margin-top:-50px;margin-left:15px;>
                                            <a href="mailto:info@boclassified.com">info@boclassified.com</a>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets twitter reveal animated" data-anim="fadeInRightShort" data-delay="0.6s">
                            <div class="widget_title">
                                <h4>social media feeds</h4>
                            </div>

                            <div class="twitter_widget">
                                <div class="single_tweets">
                                    <span class="twit_icon fa fa-twitter"></span>
                                    <div class="twit">
                                        <p><span class="tag">@Frightcargo</span> Frightcargo Diplomatic Service is the best and they have carried out more than 50 Delivery for my office</p>
                                        <span class="time">3 minutes ago</span>
                                    </div>
                                </div>
                                <div class="single_tweets">
                                    <span class="twit_icon fa fa-twitter"></span>
                                    <div class="twit">
                                        <p><span class="tag">@Frightcargo</span> Frightcargo is the best and I am happy to used them for my containers delivery to Eastan Europe</p>
                                        <span class="time">3 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tiny_footer">
            <div class="container">
                <div class="col-md-6 xs_fullwidth col-xs-6">
                    <div class="footer_text_wrapper">
                        <p class="footer_text">Copyright © Frightcargo. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 xs_fullwidth col-xs-6">
                    <div class="footer_menu clearfix">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_us2.php">About Us</a></li>
                            <li><a href="track_trace.php">Track & Trace</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="contcat.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--//////////////////// JS GOES HERE ////////////////-->

    <!-- jquery latest version -->
    <script src="js/jquery-1.12.3.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery easing 1.3 -->
    <script src="js/jquery.easing1.3.js"></script>

    <!-- Owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>

    <!-- Isotope js-->
    <script src="js/isotope.js"></script>

    <!-- Pakcery layout js-->
    <script src="js/packery.js"></script>

    <!-- waypoint js -->
    <script src="js/waypoints.min.js"></script>


    <!-- smoothscroll js -->
    <script src="js/jqury.smooth-scroll.min.js"></script>

    <!-- jquery camera slider js -->
    <script src="js/jquery.camera.min.js"></script>
    <!-- Counter up -->
    <script src="js/jquery.counterup.js"></script>

    

    <!-- Main js -->
    <script src="js/main.js"></script>
</body>
</php>
