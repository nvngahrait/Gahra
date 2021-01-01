<!DOCTYPE html>
<html lang="en" style="background-image:url(images/bodybggkm.jpg);">
<?php
include("connect.php");
error_reporting(0);
session_start();

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
  background-color: green; 
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
  background-color: silver;
  color: white;
}

</style>
</head>

<body style="background-image:url(images/bodybggkm.jpg);">
   
 
       
 <!-- Page wrapper  -->
        
                    <br><br><br><br><br><h3 style="width:cover;"><b>Gahra Khel Mahotsav 2020</b></h3> <br><br>
                
           
            <!-- End Bread crumb -->

	
	
	
	
	
	
	
	<a href="gkmsingle.php"><button class="button button1" style="width:650px; float:left; margin-left:40px;"><b>Register for Single Event</b></button></a>
	<a href="gkmteam.php"><button class="button button2" style="width:650px; float:right; margin-right:40px;"><b>Register for Team Event</b></button></a>
	<br><br><br><Br>
	 <br><div class="col-lg-9" style="margin-left:170px;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:red">
                                <h4 class="m-b-0 text-white"><b>Donate For Gahra Khel Mahotsav 2020</b></h4>
                            </div>
							
                            <div class="card-body">
                              
                                       
                                        <hr> <p style="width:770px; float:right;"><b><button class="btn btn-success" style="width:500px; height:50px; font-size:30px; text-align:center; margin-left:120px;"><b>Donate Now</b></button><br><br><br>Scan this QR Code to Donate Your Amount in Gahra Khel Mahotsav 2020.
										<br><br>You Can Donate Online (PhonePe, Paytm, Skrill, Paypal, Gpay, Bank Transfer at phone No. 8059393996 (Naveen Kumar)
										<br><br> Plz Donate as much as you can. So, that event is organized properly. The prize will given to your children not others.
										<br><br>&nbsp&nbsp&nbsp ............ Nvn Ydv Gahra ..........&nbsp&nbsp&nbsp&nbsp&nbsp <br> <br> 	<button class="btn btn-success" style="width:500px; height:50px; font-size:30px; text-align:center; margin-left:120px; background-color:violet;"><b>Donate Now</b></button><br> </b></p>
										<img src="images/paytm.jpg" style="height:400px;"></img>
                                            
                                              
	</div></div></div>
	
	
	<div class="col-lg-5" style="width: 400px; float:right;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:purple">
                                <h4 class="m-b-0 text-white"><b>Winners of Gahra Khel Mahotsav</b></h4>
                            </div>
                            <div class="card-body">
                                
                                    <div class="form-body">
                                       
                                        <hr>
										
										<div class="table-responsive m-t-40" style="height:200px; overflow:hidden; overflow-y:scroll;">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											    <th>Winner ID</th>
												<th>Winner Name</th>
                                                <th>Game</th>	
												<th>position</th>
												
												 
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * from gkm_winners ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Winner Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr>
																					           <td>'.$rows['win_id'].'</td>
																					           <td>'.$rows['win_name'].'</td>
																							   <td>'.$rows['win_game'].'</td>
																							   <td>'.$rows['win_pos'].'</td>';
																								
																		    ?>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
                                             
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                  
                                                
	</div></div></div></div> 
	<div class="col-lg-6" style="width:700px; float:right;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:orange">
                                <h4 class="m-b-0 text-white"><b>List of All Donors</b></h4>
                            </div>
                            <div class="card-body">
                                
                                    <div class="form-body">
                                       
                                        <hr>
										
											<div class="table-responsive m-t-40" style="height:200px; overflow:hidden; overflow-y:scroll;">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											    <th>Doner ID</th>
												<th>Doner Name</th>
                                                <th>Donation Amount</th>	
												
												
												 
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * from gkm_donors ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Donation Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr>
																					           <td>'.$rows['dn_id'].'</td>
																					           <td>'.$rows['dn_name'].'</td>
																							   <td>'.$rows['dn_amount'].'</td>';
																								
																		    ?>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
                                             
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                  
                                                
	</div></div></div></div> 
	
	<div class="col-lg-5" style="width:400px; float:left;">
                        <div class="card card-outline-primary">
                            <div class="card-header"  style="background-color:metal">
                                <h4 class="m-b-0 text-white"><b>Total Registrations Till Now</b></h4>
                            </div>
                            <div class="card-body">
                                
                                    <div class="form-body">
                                       
                                        <hr>
										
											<div class="table-responsive m-t-40" style="height:200px; overflow:hidden; overflow-y:scroll;">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											    <th>Rg Id</th>
												<th>Player Name</th>
                                                <th>Game</th>	
												
												
												 
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * from gkm_reg_single ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Registration Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr>
																					           <td>'.$rows['rs_id'].'</td>
																					           <td>'.$rows['rs_name'].'</td>
																							   <td>'.$rows['rs_game'].'</td>';
																								
																		    ?>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
                                             
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                  
                                                
	</div></div></div></div>
	
	
	
	
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