<!DOCTYPE html>
<html lang="en" style="background-image:url(images/bodybggkm.jpg);">
<?php
include("connect.php");
error_reporting(0);




if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			
		
			
		  
		
		
		if(empty($_POST['rs_name'])||empty($_POST['rs_mobile'])||$_POST['rs_agegr']==''||$_POST['rs_game']=='')
		{	
											$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Must be Fillup!</strong>
															</div>';
									
		
								
		}
	else
		{
		
				$fname = $_FILES['file']['name'];
								$temp = $_FILES['file']['tmp_name'];
								$fsize = $_FILES['file']['size'];
								$extension = explode('.',$fname);
								$extension = strtolower(end($extension));  
								$fnew = uniqid().'.'.$extension;
   
								$store = "gkm_img/".basename($fnew);                      // the path to store the upload image
	
					if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
					{        
									if($fsize>=1000000)
										{
		
		
												$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Max Image Size is 1024kb!</strong> Try different Image.
															</div>';
	   
										}
		
									else
										{
												
												
												
				                                 
												$rssql = "INSERT INTO gkm_reg_single(rs_agegr,rs_game,rs_name,rs_mobile,rs_village,rs_image,rs_dob) VALUE('".$_POST['rs_agegr']."','".$_POST['rs_game']."','".$_POST['rs_name']."','".$_POST['rs_mobile']."','".$_POST['rs_village']."','".$fnew."','".$_POST['rs_dob']."')";  // store the submited data ino the database :images
												mysqli_query($db, $rssql); 
												move_uploaded_file($temp, $store);
			  
													$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Congrass!</strong>  Successfully.
															</div>';
                header("Location:https://www.payumoney.com/paybypayumoney/#/EEA767BCCF3DAC160ED5FDE917E3CC14");
	
										}
					}
					elseif($extension == '')
					{
						$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>select image</strong>
															</div>';
					}
					else{
					
											$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid extension!</strong>png, jpg, Gif are accepted.
															</div>';
						
	   
						}               
	   
	   
	   }



	
	
	

}








?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Gahra Khel Mahotasav | Event Registration</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
h3{
	
	
	color:#F5B041;
	font-weight: normal;
	font-family: 'Ultra', sans-serif;   
	font-size: 100px;
	line-height: 82px;
	text-transform: uppercase;
	text-shadow: 0 8px black, 0 4px #777;
}

      .blink-two {
        animation: blinker-two 3s linear infinite;
      }
      @keyframes blinker-two {
        100% {
          opacity: 0;
        }
      }
	  .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 26px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: orange; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: #008CBA; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: white;
  color: #008CBA;
}
</style>
</head>

<body style="background-image:url(images/bodybggkm.jpg);">
   <br><a href="index.php"><button class="button button1" style="width:650px; float:left; margin-left:40px;"><b>Gahra's Home</b></button></a>
	<a href="gkm.php"><button class="button button2" style="width:650px; float:right; margin-right:40px;"><b>Gahra Khel Mahotsav Home</b></button></a>
	
       
 <!-- Page wrapper  -->
        
                    <br><br><br><br><br><h3 style="width:cover;"><b>Gahra Khel Mahotsav 2020</b></h3> <br><br>
                
           
            <!-- End Bread crumb -->

						    <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
						
						 
						 
						 
						 
					   <div class="col-lg-7" style="margin-left:290px; float:centre; padding:0;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:skyblue">
                                <h4 class="m-b-0 text-white"><b>Register for SINGLE Events - GKM</b></h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
										<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Select Age Group</b></label>
													<select name="rs_agegr" class="form-control custom-select" data-placeholder="Choose Age Group" tabindex="1" required>
                                                        <option>--Select Age Group--</option>
                                                        <option value="above14">Under 14</option>
                                                        <option value="under19">Under 19</option> 
														 <option value="above19">Above 19</option>
                                                        <option value="above60">Above 60</option> 
														
														
													 </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Select Game</b></label>
													<select name="rs_game" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" required>
                                                        <option>--Select Event--</option>
                                                        <option value="race100m">Race 100 M</option>
                                                        <option value="race400m">Race 400 M</option> 
														<option value="race1600m">Race 1600 M</option>
                                                        <option value="pullups">Pull Ups</option> 
														<option value="pushups">Push Ups</option>
														<option value="leamonrace">Leamon Race (only 60+)</option>
                                                        
													 </select>
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Player Name</b></label>
                                                    <input type="text" name="rs_name" class="form-control" required>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label"><b>Mobile No.</b></label>
                                                    <input type="text" name="rs_mobile" class="form-control form-control-danger" required>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
										 <div class="row p-t-20">
										<div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label"><b>Player Village</b></label>
                                                    <input type="text" name="rs_village" class="form-control form-control-danger">
                                                    </div>
                                            </div>
										
                                        <!--/row-->
                                       
                                            
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label"><b>Player Image</b></label>
                                                    <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="12n" required>
                                                    </div>
                                            </div>
											 <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rs_dob" class="form-control" required> 
                                                   </div>
                                            </div>
											
                                        </div>
                                        <div class="card-header"  style="background-color:skyblue">
                                <h4 class="m-b-0 text"><blink class="blink blink-two"><b>Entry Fees for Every Event is Rs. 30/- Per Head</b></blink></h4>
                            </div><br>
                                    <div class="form-actions">
                                      <input type="submit" name="submit" class="btn btn-success" value="Pay Online Now"> </a>
                                        <a href="index.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
        
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
	
	
	
	
	
	
	
	<!-- Page wrapper  -->
        
                  
                
           
            <!-- End Bread crumb -->


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>