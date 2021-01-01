<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>

<?php

include("connect.php");  //include connection file
include('header.php')

?>


<div class="clearfix"></div>
<div id="overflowMenu">
	<div class="ofMenu">
    	<ul>

        </ul>
    </div>
    <a title="Close" href="javascript:void(0);" class="closeMenu"><i class="fas fa-window-close"></i> Close</a>
</div>
</header>

<div class="wrapper bodyWrapper no_padding" role="main">
    <div class="container home-6">
    
	    <div id="SkipContent"></div>
    <div class="row">
      <div class="col-12">
                  
            <div id="post-17723" class="post-17723 page type-page status-publish hentry">
		<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        <div id="slide" class="home-slider full-cntrl-right-caption-left nav-white  flexslider banner-six">
            <ul class="slides">
                                            <li>
                                <img style="height:460px;" src='images/2.jpg' alt='Animals Pool'/>                                                                        <div class="container">
                                        <div class="slide-caption">
                                        <h2>Animal Bathing Pool (Johad)</h2>
                                            <p></p>

                                        </div>
                                    </div>
                                                                                                    </li>
                                                        <li>
                                <img style="height:460px;" src='images/3.jpg' alt='Shiv-Temple'/>                                                                        <div class="container">
                                        <div class="slide-caption">
                                        <h2>Shiv Mandir (Gahra)</h2>
                                            <p></p>

                                        </div>
                                    </div>
                                                                                                  </li>
                                                        <li>
                                <img style="height:460px;" src='images/5.jpg' alt='Temple-Place'/>                                                                        <div class="container">
                                        <div class="slide-caption">
                                        <h2>Empty Place Near Temple</h2>
                                            <p></p>

                                        </div>
                                    </div>
                                                                                                    </li>
																									<li>
                                <img style="height:460px;" src='images/62.jpg' alt='GKM'/>                                                                        <div class="container">
                                        <div class="slide-caption">
                                        <h2>Gahra Khel MAhotsav - GKM</h2>
                                            <p></p>

                                        </div>
                                    </div>
                                                                                                    </li>
                                        </ul>
        </div>
    <script>
       jQuery(document).ready(function($) {
            // Slider
            $('.home-slider').flexslider({
                animation: "slide",
                directionNav: true,
                prevText: "Previous",
                nextText: "Next",
                pausePlay: true,
                pauseText: "Pause",
                playText: "Play",
                controlNav: true,
                start: function(){
                    $('.flexslider').resize();
                }

            });
        });

    </script>
	<div class="wrapper" id="skipCont"></div>
    </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1500376748875 vc_row-o-equal-height vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_tta-container" data-vc-action="collapse"><div class="vc_general vc_tta vc_tta-tabs vc_tta-color-white vc_tta-style-modern vc_tta-shape-square vc_tta-spacing-1 home-tab-six vc_tta-o-no-fill vc_tta-tabs-position-top vc_tta-controls-align-left home-tab-six"><div class="vc_tta-tabs-container">
	
	<ul class="vc_tta-tabs-list"><li class="vc_tta-tab vc_active" data-vc-tab><a href="#whats-new" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Notices</span></a></li><li class="vc_tta-tab" data-vc-tab><a href="#news-tab" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Circulars</span></a></li></ul></div><div class="vc_tta-panels-container"><div class="vc_tta-panels"><div class="vc_tta-panel vc_active" id="whats-new" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#whats-new" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Notices</span></a></h4></div><div class="vc_tta-panel-body">    <div class="gen-list  no-border no-bg  padding-0 border-radius-none arrow-list ">
                
                     
					 <?php
												$sql="SELECT * from notices ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Notice Available!!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr>
																							   <td>'.$rows['notice_title'].'</td>';
																								
																		    ?><br>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
                           
            </div>
    </div></div><div class="vc_tta-panel" id="news-tab" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#news-tab" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Vikash Karya</span></a></h4></div><div class="vc_tta-panel-body">      <div class="gen-list  no-border no-bg  padding-0 border-radius-none arrow-list ">
                     <?php
												$sql="SELECT * from circulars ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Circulars Available!!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr>
																							   <td>'.$rows['circular_title'].'</td>';
																								
																		    ?><br>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
						</div>
          
      </div></div></div></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">		
		<div class="gen-list no-border no-bg padding-0 border-radius-none small-icon-list district-glance-six  normal-font ">
		<h3>Village at a Glance</h3>		<ul>
						<li class="  ">
				
				<a href="villageataglance.php"   style="">
				<span class="list-icon blue-bg border-radius-none"><i class="fa fa-area-chart" aria-hidden="true"></i></span>
								<div class="list-text"><b>Area:</b>  5.12 sq km				</div>
								</a>
				</li>
								<li class="  ">
				
				<a href="villageataglance.php"   style="">
				<span class="list-icon green-bg border-radius-none"><i class="fa fa-users" aria-hidden="true"></i></span>
								<div class="list-text"><b>Population:</b>2300				</div>
								</a>
				</li>
								<li class="  ">
				
				<a href="villageataglance.php"   style="">
				<span class="list-icon red-bg border-radius-none"><i class="fa fa-male" aria-hidden="true"></i></span>
								<div class="list-text"><b>Male:</b>1200				</div>
								</a>
				</li>
								<li class="  ">
				
				<a href="villageataglance.php"   style="">
				<span class="list-icon orange-bg border-radius-none"><i class="fa fa-female" aria-hidden="true"></i></span>
								<div class="list-text"><b>Female:</b>1100				</div>
								</a>
				</li>
								<li class="  ">
				
				<a href="villageataglance.php"   style="">
				<span class="list-icon blue-bg border-radius-none"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
								<div class="list-text"><b>Literacy :</b> 88.9%				</div>
								</a>
				</li>
						</ul>
				</div>
		</div></div></div>
		
		
		
		
		
		
		<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">		
		<div class="gen-list no-bg padding-20 border-radius-none arrow-list   normal-font ">
		                
						
						
		<h3>NEW UPDATES</h3>		
						<?php
												$sql="SELECT * from new_updates ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Updates Available!!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr> 
																							   <td>'.$rows['upd_name'].'</td>';
																								
																		    ?> <a href="gkm.php">Register Now</a><br>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
						
				</div>
		</div></div></div>
		
		
		
		
		
		
		
		
		
		<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">
    
    <div class="col-3 singlebox border meet-minister-six">
        
                <div class="box-1 aside-box">
            <div class="khowMinisterBox">
                <div class="khowMinisterBoxImg">
                    <img class="" src="images/img.jpg" alt="Naveen Yadav, Gshra">
                </div>
                <div class="MinisterProfile">
                <span class="Pname">Website Made By</span>
                <span class="Pdesg">Mr. Naveen Yadav (गाहडा )</span>
                                                 <ul>
                                  <li><a href="profile.php" title="Profile" target="_self" ><i class="fas fa-user-circle"></i> Profile</a></li>
                                                   <li><a href="contact.php" title="Contact" target="_self" >&nbsp<i class="fas fa-address-book"></i>Contact</a></li>
                                  </ul>
                              </div>
            </div>
        </div>
                </div>

    </div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid notice-tourist-row vc_custom_1525515363002 vc_row-has-fill vc_row-o-content-top vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1553669069207"><div class="wpb_wrapper">        <div id="slide" class="home-slider full-cntrl-center-caption-bottom   flexslider ">
            <ul class="slides">
                                            <li>
                                                                    <a href="contactsarpanch.php">
                                        <img style="height:350px;" src='images/pp.jpg' alt='Nvn Sir'/>                                                                                <div class="container">
                                            <div class="slide-caption">
                                            <h2>Mr. Raju Indora,</h2>
                                            <p>Sarpanch (2015-2020) of Village GAHRA</p>

                                            </div>
                                        </div>
                                                                            </a>
                                                                </li>
																 <li>
                                                                    <a href="contactsarpanch.php">
                                        <img style="height:350px;" src='images/gahra.jpg' alt='Nvn Sir'/>                                                                                <div class="container">
                                            <div class="slide-caption">
                                            <h2>Mr. Nvn Gahra,</h2>
                                            <p>Sarpanch (2025-2030) of Village GAHRA</p>

                                            </div>
                                        </div>
                                                                            </a>
                                                                </li>
                                        </ul>
        </div>
    <script>
       jQuery(document).ready(function($) {
            // Slider
            $('.home-slider').flexslider({
                animation: "slide",
                directionNav: true,
                prevText: "Previous",
                nextText: "Next",
                pausePlay: true,
                pauseText: "Pause",
                playText: "Play",
                controlNav: true,
                start: function(){
                    $('.flexslider').resize();
                }

            });
        });

    </script>
	<div class="wrapper" id="skipCont"></div>
    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1516352485015"><div class="wpb_wrapper">		
		<div class="no-border no-bg padding-0 border-radius-none notice-board-six  normal-font fore-color-white">
		<h3>Collage Website for B.tech intrested students</h3>		<b><ul>
						
				<li>
				<a href="https://ducic.ac.in">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
								<div class="list-text">Cluster Innovation Center, DU				</div>
								</a>
				</li>
				<li>
				<a href="https://ducic.ac.in">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
								<div class="list-text">Maharishi Dayanand University, Rohtak				</div>
								</a>
				</li>
				<li>
				<a href="https://ducic.ac.in">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
								<div class="list-text">IIT Bombay				</div>
								</a>
				</li>
				<li>
				<a href="https://ducic.ac.in">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
								<div class="list-text">NIT Gurugram				</div>
								</a>
				</li>
				<li>
				<a href="https://ducic.ac.in">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
								<div class="list-text">Ramjas Collage, Delhi University				</div>
								</a>
				</li>
						</ul></b>
				</div>
		</div></div></div><div class="wpb_column vc_column_container vc_col-sm-5 vc_col-has-fill"><div class="vc_column-inner vc_custom_1516597901835"><div class="wpb_wrapper">		<h3>Public Utilities</h3>		<div class="gen-list no-bg no-border normal-font  col-two padding-0 statistics-list public-utilities-six">
		<ul>
						
				<li>
				<a href="publicutilites.php" title="Gram Panchayat">
				<span class="list-icon border-radius-none blue-bg">2</span>
								<div class="list-text">Schools</div>
				</a>
				</li>
								
				<li>
				<a href="publicutilites.php" title="Hospitals">
				<span class="list-icon border-radius-none green-bg">0</span>
								<div class="list-text">Hospitals</div>
				</a>
				</li>
								
				<li>
				<a href="publicutilites.php" title="Municipalities">
				<span class="list-icon border-radius-none red-bg">Many</span>
								<div class="list-text">Parks</div>
				</a>
				</li>
								
				<li>
				<a href="publicutilites.php" title="Schools">
				<span class="list-icon border-radius-none orange-bg">4</span>
								<div class="list-text">Temples</div>
				</a>
				</li>
								
				<li>
				<a href="publicutilites.php" title="Universities">
				<span class="list-icon border-radius-none gray-bg">2</span>
								<div class="list-text">Old Age Homes</div>
				</a>
				</li>
								
				<li>
				<a href="publicutilites.php" title="Village">
				<span class="list-icon border-radius-none light-grey-bg">10</span>
								<div class="list-text">Shops</div>
				</a>
				</li>
						</ul>
				</div>
		</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1500444805769 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">    <div class="events-wrapper  no-bg ">
        <h3>Events</h3>
                <div class="no-events"> 
				<?php
												$sql="SELECT * from events ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Events Available Right Now!!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr> 
																							   <td>'.$rows['event_title'].'</td>';
																								
																		    ?><br>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
				</div>
                </div>
        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="photo-glry-cntr flexslider thumb-right with-caption">

        <div class="gallery-heading">
                            <h3>Photo Gallery</h3>
            
            
                <a class="bttn-more bttn-view" href="photogallery.php" target="_self" title=
                "View All"><span>View All</span></a>
            
        </div>

        <ul class="slides"    >
            
                    <li data-thumb="images/4.jpg">

                        <img style="height:387px;" src="images/4.jpg" alt="Wheat Crop"/>

                        
                            <div class="galery-caption"><a href="https://www.cropscience.bayer.com/en/crop-compendium/crops/wheat">Wheat Crop Farming</a></div>

                        
                    </li>

                
                    <li data-thumb="images/6.jpg">

                        <img style="height:387px;" src="images/6.jpg" alt="Shiv Mandir"/>

                        
                            <div class="galery-caption">Shiv Madir</div>

                        
                    </li>

                
                    <li data-thumb="images/23.jpg">

                        <img style="height:387px;" src="images/23.jpg" alt="Mustard Crop"/>

                        
                            <div class="galery-caption"><a href="https://www.cropscience.bayer.in/en/Products-H/Key-Crops/Mustard.aspx">Mustard Crops</a></div>

                        
                    </li>

                
            
        </ul>

    </div>

    

    <script>
        jQuery(document).ready(function(e) {

            //=========================
            jQuery('.thumb-bottom-scroll').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: ".thumb-bottom-crucel"
            }),

            jQuery('.thumb-bottom-crucel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                asNavFor: ".thumb-bottom-scroll"
            }),
            //=========================

            jQuery('.thumb-bottom').flexslider({
                animation: "fade",
                controlNav: "thumbnails",
                start: function(slider){
                    jQuery('body').removeClass('loading');
                }
            });
            //=========================
            jQuery('.no-thumb , .basic_slider').flexslider({
                animation: "slide",
                controlNav: false,
                start: function(slider){
                    jQuery('body').removeClass('loading');
                }
            });
            //=========================
            jQuery('.thumb-right').flexslider({
                animation: "fade",
                controlNav: "thumbnails",
                start: function(slider){
                    jQuery('body').removeClass('loading');

                }
            });
            //=========================
            jQuery('.thumb-left').flexslider({
                animation: "fade",
                controlNav: "thumbnails",
                start: function(slider){
                    jQuery('body').removeClass('loading');
                }
            });

            //=========================

            //Main slider components start
            jQuery(".full-cntrl-center-caption-blank").flexslider({
                animation: "slide",
                directionNav: true,
                prevText: "Previous",
                nextText: "Next",
                pausePlay: true,
                pauseText: "Pause",
                playText: "Play",
                controlNav: true
            });
                          jQuery('.photo-glry-cntr .flex-direction-nav').remove();
                    });

    </script>
    </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1500448460327"><div class="wpb_column vc_column_container vc_col-sm-5"><div class="vc_column-inner "><div class="wpb_wrapper">		
		<div class="gen-list no-border no-bg padding-0 border-radius-none arrow-list  col-two normal-font ">
		<h3>Quick Links</h3>		
		
		<?php
												$sql="SELECT * from quicklinks LIMIT 5";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Links Available!!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr> 
																							 <ul>  <li style="font-family:arial; color:black"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp&nbsp <td>'.$rows['ql_title'].'</td>';
																								
																		    ?></li></ul><br>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
				</div>
		</div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper">		
		<div class="gen-list no-border no-bg padding-0 border-radius-none arrow-list helpline-no-six  normal-font ">
		<h3>Helpline Numbers</h3>	
		
                        	<?php
												$sql="SELECT * from helpline_numbers ";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Helpline Numbers Available!!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				?>
																				<?php
																					echo ' <tr>
																					<ul>  <li style="font-family:arial; color:black"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp&nbsp 
																							   <td>'.$rows['hn_title'].'</td> - 
																							   <td>'.$rows['hn_contact'].'</td>';
																								
																		    ?></li></ul><br>
																			<?php 
																			} 
																			?>
																		 	<?php
																             }
																			 ?>
				</div>
		</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">		
		<div class="gen-list no-border no-bg padding-0 border-radius-none iconTop-textBottom-box-list media-gallery-six  normal-font ">
		<h3>Media Gallery</h3>		<ul>
						<li class="green-bg  border-radius-none">
				
				<a href="videogallery.php"   style="">
								<i class="fa fa-video" style="font-size:48px;color:white"></i>
				<div class="list-text">Video Gallery<br><span></span>
				</div>
								</a>
				</li>
								<li class="red-bg  border-radius-none">
				
				<a href="photogallery.php"   style="">
				<i class="fas fa-images" style="font-size:48px;color:white"></i>
								
				<div class="list-text">Photo Gallery<br><span></span>
				</div>
								</a>
				</li>
								<li class="blue-bg  border-radius-none">
				
				<a href="documents.php"   style="">
				<i class="fa fa-file-alt" style="font-size:48px;color:white"></i>
								
				<div class="list-text">Documents<br><span></span>
				</div>
								</a>
				</li>
						</ul>
				</div>
		</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    <div id="footerScrollbarWrapper" class="footerlogocarousel withbg withborder">
        <div>
            <div id="footerScrollbar" class="flexslider">
                <ul class="slides">
                                                <li>
                                                                    <a href="https://www.india.gov.in/" target="_blank" title="Indian Government Portal">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017053023.png" alt="india.gov.in"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="http://www.pmindia.gov.in/en/" target="_blank" title="Prime Minister of India">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017110781.png" alt="pmindia"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="http://www.digitalindia.gov.in/" target="_blank" title="Digital India">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/07/2017072418.png" alt="digital-india"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="https://www.pmnrf.gov.in/" target="_blank" title="Prime Minister&#8217;s National Relief Fund">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017053039.png" alt="PMNRF"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="https://data.gov.in/" target="_blank" title="Open Gov Data Plateform">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017053045.png" alt="data.gov"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="https://www.mygov.in/" target="_blank" title="My Government">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017053017.png" alt="mygov"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="http://www.makeinindia.com/home" target="_blank" title="Make in India">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017053052.png" alt="make in India"/>                                    </a>
                                                                </li>
                                                        <li>
                                                                    <a href="https://incredibleindia.org/" target="_blank" title="Incredible India">
                                        <img src="https://cdn.s3waas.gov.in/master/uploads/2017/04/2017053094.png" alt="Incredible India Site"/>                                    </a>
                                                                </li>
                                            </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
     jQuery(document).ready(function(){
        jQuery("#footerScrollbar").flexslider({
          animation: "slide",
          animationLoop: true,
          itemWidth: 200,
          itemMargin: 5,
          minItems: 2,
          maxItems: 6,
      		slideshow: 1,
      		move: 1,
      		controlNav: false,
      		pausePlay: true,
      	  pauseText: 'Pause',
      	  playText: 'Play'

    })
    });
    </script>
    </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>

</div>
                    <!-- end of the loop -->
          
              </div>
          </div>
  </div>
</div>

<?php

include('footer.php')

?>

<script>
  jQuery(document).ready(function(jQuery){
  var isExternal = function(url) {
     return !(location.href.replace("http://", "").replace("https://", "").split("/")[0] === url.replace("http://", "").replace("https://", "").split("/")[0]);
  }
var comp = new RegExp(location.host);
jQuery('a').each(function(){
 if(!comp.test(jQuery(this).attr('href'))){
   var href = jQuery(this).attr('href');
     if(typeof href == 'undefined' ){
        jQuery(this).attr('href','javascript:void(0)');
        href = '#';
     }
     if(href.indexOf('://') > 0 || href.indexOf('//') === 0){
        if(href!='javascript:void(0);' &&  !href.match("/^\/[a-z0-9]+jQuery/i") && href!='#'  && href!='/' && href!='' && !jQuery(this).hasClass('fancybox.iframe') && !jQuery(this).hasClass('fancybox')){
        jQuery(this).prop('title', 'External site that opens in a new window');
         jQuery(this).prop('target', '_blank');
        }
     }
}
});
});
  </script>
          <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131929568-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131929568-1');
        </script>
<link rel="stylesheet" id="flexslider-css"  href="https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/lib/bower/flexslider/flexslider.min.css?ver=5.4.7" media="all" />
<link rel="stylesheet" id="custom-flexslider-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/custom-flexslider.css?ver=5.1.1" media="all" />
<link rel="stylesheet" id="vc_tta_style-css"  href="https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/css/js_composer_tta.min.css?ver=5.4.7" media="all" />
<link rel="stylesheet" id="list-style-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/list-style.min.css?ver=5.1.1" media="all" />
<link rel="stylesheet" id="component-helper-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/component-helper.css?ver=5.1.1" media="all" />
<link rel="stylesheet" id="min-profile-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/profile-hm.css?ver=5.1.1" media="all" />
<link rel="stylesheet" id="events-css-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/events.css?ver=5.1.1" media="all" />
<link rel="stylesheet" id="home-gallery-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/photo-gallery-home.css?ver=5.1.1" media="all" />
<link rel="stylesheet" id="footer-style-css"  href="https://bhiwani.gov.in/wp-content/plugins/awas-shortcode/assets/css/footer-logo-carousel.css?ver=5.1.1" media="all" />
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/common_utility//js/common.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/jquery.flexslider.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/easyResponsiveTabs.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/jquery.fancybox.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/style.switcher.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/menu.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/table.min.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/custom.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/themes/district-theme-6/js/extra.js?ver=1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-includes/js/wp-embed.min.js?ver=5.1.1'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.7'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min.js?ver=5.4.7'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min.js?ver=5.4.7'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min.js?ver=5.4.7'></script>
<script type='text/javascript' src='https://bhiwani.gov.in/wp-content/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min.js?ver=5.4.7'></script>
<!-- back to top start -->
<script type="text/javascript">
jQuery(document).ready(function(){
var offset = 300,
  offset_opacity = 1200,
  scroll_top_duration = 700,
  $back_to_top = jQuery('.cd-top');
jQuery(window).scroll(function(){
  ( jQuery(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
  if( jQuery(this).scrollTop() > offset_opacity ) {
    $back_to_top.addClass('cd-fade-out');
  }
});
//smooth scroll to top
$back_to_top.on('click', function(event){
  event.preventDefault();
  jQuery('body,html').animate({
    scrollTop: 0 ,
    }, scroll_top_duration
  );
});

});
</script>
<!-- back to top end -->
</body>
</html>
