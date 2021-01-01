<?php
$conn=mysql_connect("localhost","root","","gahra")



?>

<?php
if(isset($_POST['submit'])){
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	$firstname=$_POST[''];
	
	
	$query="insert into gkm_reg_team() values()";
	$run= mysqli_query($conn,$query);
	
	
	if(run){
		echo "Data inserted successfully";
	}
	else{
		echo "error:" .mysqli_error($conn);
	}
	
	
	
}



?>



























<!DOCTYPE html>
<html lang="en" style="background-image:url(images/bodybggkm.jpg);">
<?php
include("connect.php");
error_reporting(0);




if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			
		
			
		  
		
		
		if(empty($_POST['rt1_name'])||empty($_POST['rt_mobile'])||$_POST['rr_agegr']==''||$_POST['rt_game']=='')
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
												
												
												
				                                 
												$rssql = "INSERT INTO gkm_reg_team(rt_agegr,rt_game,rt1_name,rt1_dob,rt2_name,rt2_dob,rt3_name,rt3_dob,rt4_name,rt4_dob,rt5_name,rt5_dob,rt6_name,rt6_dob,rt7_name,rt7_dob,rt_village,rt_mobile) VALUES ('".$_POST['rt_agegr']."','".$_POST['rt_game']."','".$_POST['rt1_name']."','".$_POST['rt1_dob']."','".$_POST['rt2_name']."','".$_POST['rt2_dob']."','".$_POST['rt3_name']."','".$_POST['rt3_dob']."','".$_POST['rt4_name']."','".$_POST['rt4_dob']."','".$_POST['rt5_name']."','".$_POST['rt5_dob']."','".$_POST['rt6_name']."','".$_POST['rt6_dob']."','".$_POST['rt7_name']."','".$_POST['rt7_dob']."',,'".$_POST['rt_village']."','".$_POST['rt_mobile']."')";  // store the submited data ino the database :images
												mysqli_query($db, $rssql); 
												move_uploaded_file($temp, $store);
			  
													$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Congrass!</strong>  Successfully.
															</div>';
                
	
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
</style>
</head>

<body style="background-image:url(images/bodybggkm.jpg);">
 
       
 <!-- Page wrapper  -->
        
                    <br><br><br><br><br><h3 style="width:cover;"><b>Gahra Khel Mahotsav 2020</b></h3> <br><br>
                
           
            <!-- End Bread crumb -->

						    <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
						
						 
						 
						 
						 
					   <div class="col-lg-6" style="width:600px; float:left; padding:0;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:skyblue">
                                <h4 class="m-b-0 text-white"><b>Register for TEAM Events - Kabbadi, RassaKassi, Relay</b></h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
										<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Select Age Group</b></label>
													<select name="rt_agegr" class="form-control custom-select" data-placeholder="Choose Age Group" tabindex="1">
                                                        <option>--Select Age Group--</option>
                                                        <option value="above18">Above 18</option>
                                                        <option value="under18">Under 18</option> 
														
													 </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Select Game</b></label>
													<select name="rt_game" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option>--Select Event--</option>
                                                        <option value="race100m">Race 100 M</option>
                                                        <option value="race400m">Race 400 M</option> 
														<option value="race100m">Race 1600 M</option>
                                                        <option value="race400m">Pull Ups</option> 
														<option value="race100m">Push Ups</option>
                                                        <option value="race400m">High Jump</option> 
														<option value="race100m">Long Jump</option>
                                                        <option value="race400m">PubG Mobile</option> 
														<option value="race100m">Subway Surfers</option>
                                                        <option value="race400m">PubG Mobile Lite</option> 
														<option value="race100m">Ludo</option>
                                                        <option value="race400m">Snake & Leader</option> 
													 </select>
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>1st Player Name</b></label>
                                                    <input type="text" name="rt1_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt1_dob" class="form-control"> 
                                                   </div>
                                           </div> </div>
                                            <!--/span-->
											
											<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>2nd Player Name</b></label>
                                                    <input type="text" name="rt2_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt2_dob" class="form-control"> 
                                                   </div></div>
                                            </div>
											<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>3rd Player Name</b></label>
                                                    <input type="text" name="rt3_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt3_dob" class="form-control"> 
                                                   </div></div>
                                            </div>
											<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>4th Player Name</b></label>
                                                    <input type="text" name="rt4_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt4_dob" class="form-control"> 
                                                   </div>
                                            </div></div>
											<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>5th Player Name</b></label>
                                                    <input type="text" name="rt5_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt5_dob" class="form-control"> 
                                                   </div>
                                            </div></div>
											<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>6th Player Name</b></label>
                                                    <input type="text" name="rt6_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt6_dob" class="form-control"> 
                                                   </div></div>
                                            </div>
											<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>7th Player Name</b></label>
                                                    <input type="text" name="rt7_name" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt7_dob" class="form-control"> 
                                                   </div></div>
                                            </div>
											
											
											
											
                                        </div>
										 <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Village</b></label>
                                                    <input type="text" name="rt_village" class="form-control">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Mobile No. (Captain)</b></label>
                                                    <input type="text" name="rt_mobile" class="form-control"> 
                                                   </div></div>
                                            </div>
											
											
											
											
                                        </div>
                                        
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
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