<!DOCTYPE html>
<html lang="en" style="background-image:url(images/bodybggkm.jpg);">
<?php
$conn=mysqli_connect("localhost","root","","gahra")



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
 
       
	   
	   
	  
	   
	  <br><a href="index.php"><button class="button button1" style=" width:650px; float:left; margin-left:40px;"><b>Gahra's Home</b></button></a>
	<a href="gkm.php"><button class="button button2" style="width:650px; float:right; margin-right:40px;"><b>Gahra Khel Mahotsav Home</b></button></a>
	
	   
	   
 <!-- Page wrapper  -->
        
                    <br><br><br><br><br><h3 style="width:cover;"><b>Gahra Khel Mahotsav 2020</b></h3> <br><br>
                
           
            <!-- End Bread crumb -->

						    <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
						
						 
						 
						 
						 
					   <div class="col-lg-7" style="margin-left:280px; float:centre; padding:0;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:skyblue">
                                <h4 class="m-b-0 text-white"><b>Register for TEAM Events - Kabbadi, RassaKassi, Relay</b></h4>
                            </div>
                            <div class="card-body">
                                <form action='config/actions.php' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
										<div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Select Age Group</b></label>
													<select name="rt_agegr" class="form-control custom-select" data-placeholder="Choose Age Group" tabindex="1" required>
                                                        <option>--Select Age Group--</option>
                                                        <option value="under14">Under 14</option>
                                                        <option value="under19">Under 19</option> 
														<option value="above19">Above 19</option>
                                                       
														
													 </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Select Game</b></label>
													<select name="rt_game" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" required>
                                                        <option>--Select Event--</option>
														<option value="kabbadi">Kabbadi</option> 
														<option value="rassakassi">Rassa-Kassi</option>
                                                        <option value="400mrelay">400 M Relay Race (only under 14)</option> 
													 </select>
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>1st Player Name</b></label>
                                                    <input type="text" name="rt1_name" class="form-control" required>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"><b>Date of Birth</b></label>
                                                    <input type="date" name="rt1_dob" class="form-control" required> 
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
                                                    <input type="text" name="rt_mobile" class="form-control" required> 
                                                   </div></div>
                                            </div>
											
											
											
											 <div class="card-header"  style="background-color:skyblue">
                                <h4 class="m-b-0 text-white"><b>Entry Fees For Every Event is Rs. 30/- Per Team</b></h4>
                            </div>
							<br></div>
                                        
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="Pay Entry Fee Online"> 
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