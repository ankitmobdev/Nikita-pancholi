<?php
    $connection=mysql_connect("localhost","root","");
	$database=mysql_select_db("cy_data");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index - Skeets</title>
    <meta name="description" content="Angle - Blog is a clean and minimalist photography blog perfectly designed for photographers and bloggers. Slimply is beautiful, clean and very classic design.">
    <meta name="keywords" content="photoblog, portfolio, photography, photographer, unique, creative, blog, minimal, beautiful theme">
    <meta name="author" content="Laza Themes">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/icon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Font Stroke 
    ================================================== -->
	<link rel="stylesheet" type="text/css" href="fonts/fontstroke/pe-icon-7-stroke/css/helper.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontstroke/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Animate 
    ================================================== -->
	<link href='css/effect2.css' rel='stylesheet' type='text/css'>
	<link href='css/animate.css' rel='stylesheet' type='text/css'>
    
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     
  
	
	<!-- Add fancyBox CSS files -->
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
	
	<!-- Owl Slider CSS -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="screen" />
	
	<!-- Custom scroll bar -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
	
	<!-- Custom select box -->
	<link rel="stylesheet" type="text/css" href="css/countrySelect.css">
	
    <!-- Custom Css 
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/rs-wp-v1.2.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Fonts 
    ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,500,700,800,600' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
    <![endif]-->
    <script>
	   var angle = 0;
function galleryspin(sign) { 
spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}
</script>

<script>
$(document).ready(function(){
    $("#img1").click(function(){
        $("#1").fadeIn(1000);
        $("#2").hide();
        $("#3").hide();
    });
	 $("#img2").click(function(){
        $("#2").fadeIn(1000);
        $("#1").hide();
        $("#3").hide();
    });
	 $("#img3").click(function(){
        $("#3").fadeIn(1000);
        $("#1").hide();
        $("#2").hide();
    });
});
</script>
<script>
$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
</script>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>  
    
    
  </head>
  <body>
	
	<!-- Wrapper -->
	<div id="wrapper">
	
		
	
		<!-- Support Online -->
		<div id="rst-support-online" class="animated fadeIn">
			<form action="shortcodes.html" class="animated fadeInDownBig">
				<header>
					<p><i class="fa fa-comment-o"></i>Live Support Chat</p>
					<a href="#"><i class="fa fa-times"></i></a>
				</header>
				<h6>You are chatting with <b>Support Team</b></h6>
				<div class="rst-chat-content">
					<ul>
						<li>
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<p class="rst-name">Support Team</p>
							<p class="rst-say">Duis vel tellus sed dolor sodales?</p>
						</li>
						<li>
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<p class="rst-name rst-you">You</p>
							<p class="rst-say">Duis vel tellus sed dolor..</p>
						</li>
						<li>
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<p class="rst-name">Support Team</p>
							<p class="rst-say">Duis vel tellus sed dolor sodales?</p>
						</li>
						<li>
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<p class="rst-name rst-you">You</p>
							<p class="rst-say">Duis vel tellus sed dolor..</p>
						</li>
						<li>
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<p class="rst-name">Support Team</p>
							<p class="rst-say">Duis vel tellus sed dolor sodales?</p>
						</li>
						<li>
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<p class="rst-name rst-you">You</p>
							<p class="rst-say">Duis vel tellus sed dolor..</p>
						</li>
					</ul>
				</div>
				<div class="rst-chat-input">
					<input type="text" name="support-message" id="support-message" placeholder="Type your message ..." />
					<span class="btn btn-primary btn-file">
						<img src="images/icon//livechat-submit.png" alt="" /><input type="file" name="support-upload" id="support-upload" />
					</span>
					<input type="submit" value="SEND" />
				</div>
			</form>
		</div>
		<!-- Support Online -->
	
		<!-- Header -->
		<header id="rst-header" class="wpb_row">
		
			<!-- Register bar -->
			<nav class="rst-line-reg">
				<div class="container">
					<div class="rst-line-reg-social">
						<ul>
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="rst-line-reg-setting">
						
						<!-- Account settings -->
						<!-- <div class="rst-account">
							<a href="#"><img class="img-circle" src="http://placehold.it/299x299" alt="" />liza doe<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="account.html"><i class="fa fa-user"></i>setting</a></li>
								<li><a href="#"><i class="fa fa-arrow-circle-o-left"></i>Log out</a></li>
							</ul>
						</div>  -->
						<!-- Account settings -->
						
						<!-- Login -->
						<div class="rst-login">
							<a href="#">Sign in<i class="fa fa-angle-down"></i></a>
							<form action="shortcodes.html">
								<input type="email" name="login-email" id="login-email" class="text required email" placeholder="Email" />
								<input type="password" name="login-password" id="login-password" class="text required" placeholder="Password" />
								<input type="submit" value="sign in"/>
								<p>Not have an Account? <a href="#">Sign Up</a></p>
							</form>
						</div>
						<!-- Login -->
						
						<div class="rst-languages">
							<a href="#">English<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="#">English</a></li>
								<li><a href="#">Frances</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">Austria</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</nav>
			<!-- Register bar -->
			
			<!-- Header banner -->
			<div class="rst-header-banner rst-banner-background rst-banner-3 rst-index-page-banner">
			
				<!-- Menu bar -->
				<div class="rst-header-menu-bar" style="background-color:#fff;">
					<div class="container">
						<div class="rst-header-logo">
							<a href="index.html"><img src="images/Apptech-logo.png" alt="" width="200" height="70" /></a>
							<a class="rst-logo-sticky" href="index.html"><img src="images/header-logo-2.png" alt="" /></a>
						</div>
					<!--	<nav class="rst-header-menu">
							<button class="rst-menu-trigger">
								<span>Toggle navigation</span>
							</button>
							<ul>
                                <li ><a href="index.html" style="color:#333 !important">Home</a></li>
								<li><a href="about.html" style="color:#333 !important">About</a></li>
                                <li class="dropdown"><a href="services.php" class="dropdown-toggle" data-toggle="dropdown" style="color:green !important">Services<b class="caret"></b></a>
                                
                                <ul class="dropdown-menu multi-column columns-3" >
                                   <div style="width:100%;height:auto"> 
		            <div class="row">
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
                                <h3>Mobile App Development</h3>
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li class="divider"></li>
					            <li><a href="#">One more separated link</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li class="divider"></li>
					            <li><a href="#">One more separated link</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-4">
				            <ul class="multi-column-dropdown">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li class="divider"></li>
					            <li><a href="#">One more separated link</a></li>
				            </ul>
			            </div>
		            </div>
                   </div> 
	            </ul>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </li>
								<li><a href="products.html" style="color:#333 !important">Products</a></li>
								
                                
                                
                               
									
								</li>
								<li><a href="contact.html" style="color:#333 !important">Contact</a></li>
							</ul>
							<a class="rst-header-livechat" href="#">Live chat</a>
						</nav>-->
                        
                         <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          <div class="container-fluid" style="padding:10px 40px"> 
                             <div class="col-md-2">
                               <div class="overlay-content">
                                 <h6 style="color:#fff;padding-left:10px">MENUS</h6> <br> <br>
                                 <a href="http://localhost/skeets/index.php">Home</a>
                                 <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/about.html">About</a>
                                  <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/services.php">Services</a>
                                  <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/products.html">Portfolio</a>
                                  <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/contact.html">Contact</a>
                                  <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                               </div>
                             </div>
                             <div class="col-md-5 text-left">
                               <div class="overlay-content1">
                                 <h6 class="text-center" style="color:#fff;">SERVICES</h6> <br> <br>
                                     <div class="col-md-6 text-left">
                                         <a href="http://localhost/skeets/services.php">Android App Development</a>
                                         <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/ios_service.php">iPhone App development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/cross_service.php">Cross platform App Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/swift_service.php">Swift App Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/php_service.php">PHP Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/ruby_service.php">Ruby on Rails Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/asp_service.php">Asp.net Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/node_service.php">Node JS Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/angular_service.php">Angular JS Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/UX_service.php">UX/UI Design</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/web_app_service.php">Web App Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/enterprise_service.php">Enterprise App Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          
                                      </div>
                                      <div class="col-md-6 text-left">
                                         <a href="http://localhost/skeets/shopify_service.php">Shopify Development</a>
                                         <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/ecommerce_service.php">Ecommerce development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/laravel_service.php">Laravel Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/joomla_service.php">Joomla Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/wordpress_service.php">Wordpress Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                         <a href="http://localhost/skeets/react_service.php">React JS Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/drupal_service.php">Drupal Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/javascript_service.php">Javascript Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/storefront_service.php">Asp.net storefront Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/graphic_service.php">Graphic Design</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/mobile_app_service.php">Mobile App Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                          <a href="http://localhost/skeets/magento_service.php">Magento Development</a>
                                          <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                      </div>
                                      
                                      
                                         
                              </div>
                            </div>
                             <div class="col-md-3 text-left">
                               <div class="overlay-content1">
                                 <h6 style="color:#fff">PORTFOLIO</h6> <br> <br>
                                 <a href="http://localhost/skeets/index.php">Web Designing</a>
                                 <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/about.html">UI Designing</a>
                                 <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/services.php">Web Development</a>
                                 <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 <a href="http://localhost/skeets/products.html">Mobile App Development</a>
                                 <img src="images/images/line.png" style="padding-left:10px;box-sizing:border-box">
                                 
                              </div>
                            </div>
                             
                            <div class="col-md-2 text-left">
                               <div class="overlay-content1">
                                 <h6 style="color:#fff">CONTACT US </h6> <br> <br>
                                 <form>
                                   <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                     <input id="text" type="text" class="form-control" name="email" placeholder="Name">
                                   </div> <br> 
                                   <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                      <input id="tel" type="password" class="form-control" name="password" placeholder="Phone no.">
                                   </div> <br> <br>
                                  <button type="button" class="btn btn-success">SUBMIT</button>
                                   
                                 </form>
                              </div>
                            </div>
                            
                            
                            
                            
                            
                          </div> 
                       </div>
                       <span class="pull-right" style="font-size:30px;cursor:pointer;padding-top:30px" onclick="openNav()">&#9776;</span>
                        
                        
                        
                        
                        
                        
                        
                        
						<div class="clear"></div>
					</div>
				</div>
				<!-- Menu bar -->
				
				<!-- Banner content -->
				<div class="rst-banner-content"  style="background-image:url(images/laravelbanner.png);background-position:center;background-size:cover; max-width:100%;background-repeat:no-repeat">
					<div class="container">
						<div class="row">
						  <div class="col-sm-6">
								<div class="text-center">
								  <!--	<h1 style="font-size:25px !important">Make your <br />Cool Applications and Websites Today</h1>
									<h5>Find your own question right now</h5>-->	
								</div>
							</div>
							<div class="col-sm-6">
								<div class="text-center">
									<h1 style="font-size:25px !important;color:#003c50;font-weight:bold">Partner with Experts</h1>
									<h5 style="color:#fff">Our deep domain experience allows us to provide you the solution in Web Design, Development, Mobile Apps, ERP, 
                                    CRM solutions.</h5>	 <br> <br>
                                    
								</div>
                                
                                
							</div>
						</div>
					</div>
					
				</div>
				<!-- Banner content -->
				
			</div>
			<!-- Header banner -->
			
			<div class="rst-scroll-down text-center">
				<a href="#"><i class="fa fa-arrow-down"></i></a>
			</div>
			
		</header>
		<!-- Header -->
		
		<!-- Main page -->
		<section>
        
        <div class="container" style="padding:100px 0px">
           <div class="col-md-12 wow animated fadeIn">
             <h1 class="text-center">Android App Development Company </h1>
              <div class="text-center">
              <img src="images/images/line.png"></div>
             <p class="word">Imperial Web Design a Leading Android application development company offering fully functional and market capturing mobile apps to business and enterprises. We deliver the best android apps with our highly skilled android app developers, we are one among the best android app development companies in Bangalore since 2010.Android app are rapidly improving with the core Android OS and its evolving development tools, an android app can help you with a good carrier for your business.</p> 
             <p class="word">We use high quality tools, efficient and we are powerful in Android app programming, Android app testing, Android app designing to intensify the best usability, easy usage and user experiences. Our app engineers and designers join hands to make truly innovative and edgy android apps, at a diligently authentic time-table. Our Google apps are the part of several previously outstanding apps, wherever our purchasers have enjoyed nice success at style. We are able to build-up on your app idea or completely full-fill the present ideas. Our previous success and deep technical knowledge allows us to deliver the cutting-edge apps that your customers fall-in-love.</p>
       <ul class="word">Imperial Web Design provide customized services we offer are  </ul>  <br>
       <li class="word" style="list-style:bullet">Custom Android Apps Development</li>    
       <li class="word" style="list-style:bullet">Android App Ux/ Ui Design</li>
       <li class="word" style="list-style:bullet">Android Apps Testing / Portability</li>
<li class="word" style="list-style:bullet">Android M-commerce Applications</li>
<li class="word" style="list-style:bullet">Enterprise Android Applications</li>
<li class="word" style="list-style:bullet">Android Games Development</li>
<li class="word" style="list-style:bullet">Android Widget Development</li>
<li class="word" style="list-style:bullet">Android Support & Maintenance</li>
<li class="word" style="list-style:bullet">Android Social Media Applications</li>
<li class="word" style="list-style:bullet">Android App Code Audit</li>

 
     </div>
 </div>
        
        <!------------------------------------------------------------------------------------------------------------------------------------------>
        
    <div class="container text-center" style="padding:30px 0px ">
         <h1> Services Offered </h1>
         <div class="text-center">
              <img src="images/images/line.png"></div> <br> <br>
          <div class="col-md-3 col-sm-6 block-gap wow animated slideInLeft">
               <img src="images/images/Untitled-2_03.png">
                  
                   <h3><a href="website-design-mumbai.php" style="color:#60ff00;;" title="Website Design Company in Mumbai">Website Design</a></h3>
                   <p style="color:#fff">Website has the power to change the way your customers view and think about your business. It is a platform from which to project.</p>
               <img src="images/images/black-border_03.png" style="margin-bottom: -72px;"> 
         </div>
        
         <div class="col-md-3 col-sm-6 block-gap wow animated fadeIn" >
               <img src="images/images/Untitled-2_03.png">
                  
                   <h3><a href="website-design-mumbai.php" style="color:#60ff00;;" title="Website Design Company in Mumbai">Website Design</a></h3>
                   <p style="color:#fff">Website has the power to change the way your customers view and think about your business. It is a platform from which to project.</p>
               <img src="images/images/black-border_03.png" style="margin-bottom: -72px;"> 
         </div>
         
          <div class="col-md-3 col-sm-6 block-gap wow animated fadeIn" >
               <img src="images/images/Untitled-2_03.png">
                  
                   <h3><a href="website-design-mumbai.php" style="color:#60ff00;;" title="Website Design Company in Mumbai">Website Design</a></h3>
                   <p style="color:#fff">Website has the power to change the way your customers view and think about your business. It is a platform from which to project.</p>
               <img src="images/images/black-border_03.png" style="margin-bottom: -72px;"> 
         </div>
         
          <div class="col-md-3 col-sm-6 block-gap wow animated slideInRight" >
               <img src="images/images/Untitled-2_03.png">
                  
                   <h3><a href="website-design-mumbai.php" style="color:#60ff00;;" title="Website Design Company in Mumbai">Website Design</a></h3>
                   <p style="color:#fff">Website has the power to change the way your customers view and think about your business. It is a platform from which to project.</p>
               <img src="images/images/black-border_03.png" style="margin-bottom: -72px;"> 
         </div>
        
      </div>
      
      
      
       <div class="container text-left" style="padding:30px 0px ">
         <div class="col-md-12 gap wow animated slideInLeft" >
            <h3>Optimized Web Design</h3>
            <p>Our team of brilliant Website Developers and Programmers work directly with the SEO Department to team up and build up custom and professional Websites that are compelling and search engine friendly.</p>
         
         </div> <br> <br>
         
          <div class="col-md-12 gap wow animated slideInRight" style="margin-top:50px">
            <h3>User Experience</h3>
            <p>Starting from the initial stage of planning unto deployment, we build up an ideal user experience and innovative UI to deliver the best results. Our Master team of professional web developers works with you individually to be aware of the strategy, design and technology that is required for your business and make sure that your website is eye-catching, only one of its kind, user-friendly and search engine optimized and turn out to be an positive feature in your business.</p>
         
         </div>
    </div>
      
        
        
        
        
        <!-- Who we are -->
			<div id="rst-home-whoweare" class="wpb_row" style="padding:0px 0 110px;">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="rst-group-title text-left wow animated slideInLeft">
								
								<h3>Web Design Services include</h3>
								<img src="images/images/round_03.png" width="30" height="30" > <span>Static Website Design</span> <br> <br>
                                <img src="images/images/round_03.png" width="30" height="30"> <span>Static Website Design</span> <br> <br>
                                <img src="images/images/round_03.png" width="30" height="30"> <span>Static Website Design</span> <br> <br>
                                <img src="images/images/round_03.png" width="30" height="30"> <span>Static Website Design</span> <br> <br>
                                <img src="images/images/round_03.png" width="30" height="30"> <span>Static Website Design</span> <br> <br>
                                
                                
                                
                            </div>
							<a href="#" class="btn">read more</a>
						</div>
						<div class="col-sm-6 wow animated zoomIn"  style="padding-top:100px">
							<img src="images/compress image/laravel-development-services-min.png" alt=""  />
						</div>
					</div>
				</div>
				<!--<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>-->
			</div>
			<!-- Who we are -->

        <!--<div class="container-fluid" style="background-color:#36d678;padding:50px 30px">
            <div class="col-md-9">
               <h5 style="color:#fff"> looking for the best web designer in Mumbai, Iwebsitei can suffice your purpose.</h5>
            </div>
            <div class="col-md-3 text-center">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3" style="background-color:inherit;border:2px solid #fff"> Contact us now! </button>
            </div>
        
       </div>-->
       
       
     <div class="container-fluid text-center " style="padding:150px 30px;background-image:url(images/bannercontact.gif);background-size:cover;max-width:100%;max-height:700px;" >  
      
       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3" style="background-color:inherit;border:2px solid #fff"> Contact us now! </button>
       
    </div>   
       
       
       
       

<div class="container text-center" style="background-color:#fff;padding:70px 30px">
<h1>Android Propositions </h1>
<div class="text-center">
              <img src="images/images/line.png"></div>       
</div>


<div class="container-fluid">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/1slider.png" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/2slider.png" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="images/3slider.png" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 4</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>           
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Slide 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>           
            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="images/1slide50x50.png"><small>Slide One</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="images/1slide50x50.png"><small>Slide Two</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="images/1slide50x50.png"><small>Slide Three</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="images/1slide50x50.png"><small>Slide Four</small></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>

















       
       
       


<div class="container-fluid text-center" style="background-color:#f9f6f6;padding:50px 30px">
<h1>Android Projects</h1>
<div class="text-center">
              <img src="images/images/line.png"></div>       
      
     <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/wanaka-tree.jpg">
<div id="carousel" style="padding-left:20px">

  <figure id="spinner">
    <img src="wanaka-tree.jpg" alt>
    <img src="still-lake.jpg" alt>
    <img src="pink-milford-sound.jpg" alt>
    <img src="paradise.jpg" alt>
    <img src="morekai.jpg" alt>
    <img src="milky-blue-lagoon.jpg" alt>
    <img src="lake-tekapo.jpg" alt>
    <img src="milford-sound.jpg" alt>
  </figure>
 
</div>
<span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
<span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
</div>





 
	 
	 
<!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center" style="border-bottom:0px !important">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#36d678">Contact Us</h4>
        </div>
        <div class="modal-body" style="padding:0px 50px;">
            <div class="form-group">
                <input type="text" class="form-control inputtext" placeholder="Name"> <br /> 
            </div>
            <div class="form-group">
                <input type="email" class="form-control inputtext" placeholder="Email"> <br /> 
            </div>
            <div class="form-group">
                <input type="tel" class="form-control inputtext" placeholder="Phone"> <br /> 
            </div>
            <div class="form-group"> 
                 <textarea class="form-control inputtext" rows="5" placeholder="Project Short Description"></textarea> <br />
            </div>
            
         
        </div>
        <div class="modal-footer" style="border-bottom:0px !important">
          <button type="button" class="btn btn-primary" data-dismiss="modal">SUBMIT</button>
        </div>
      </div>
      
    </div>
  </div>



       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
             
        
			
			
			
			
			<!-- Social bar -->
			<div class="rst-socials-bar">
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-facebook"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-twitter"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-dribbble"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-instagram"></i></a>	
				</div>
				<div class="rst-social-item">
					<a href="#"><i class="fa fa-behance"></i></a>	

				</div>

				<div class="clear"></div>
			</div>
			<!-- Social bar -->
			
		</section>
		<!-- Main page -->
		
		<!-- Footer -->
		<footer id="rst-footer">
		
			<!-- Footer content -->
			<div class="rst-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4 widget widget-footer-box">
							<h3>About APPTech</h3>
							<p style="text-align:justify">APPTech Mobile is one of the top software development company offering web & mobile app development located in "INDIA. Our in depthcore industry experience of 8+ years offer excessive amount of client centric services by enabling customers to achieve competitive advantage through flexible and next generation global delivery models
                            </p>
						</div>
						<div class="col-lg-2 col-sm-4 widget widget-footer-box">
							<h3>ABOUT US</h3>
							<ul>
								<li><a href="#">Profile</a></li>
								<li><a href="#">Achievements</a></li>
								<li><a href="#">Why APPTech?</a></li>
								<li><a href="#">Team</a></li>
						    </ul>
						</div>
						<div class="col-lg-2 col-sm-4 widget widget-footer-box">
							<h3>Know More</h3>
							<ul>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Carrers</a></li>
								<li><a href="#">Contact</a></li>
								
							</ul>
						</div>
						<div class="col-lg-4 col-sm-12 widget widget-footer-box">
                            <i class="fa fa-map-marker" style="color:#fff;padding-top:20px;box-sizing:border-box"> </i>
							<span style="color:#8a95a6">Head Office INDORE | DELHI </span> <br> <br>
                            <span style="color:#8a95a6">301, Near Madhu Milan Square. Indore, M.P. INDIA </span> <br> <br>
                            <span style="color:#8a95a6">4335 Belmore street Burwood 2134 sydney AUSTRALIA </span> <br> <br>
                             <i class="fa fa-envelope" style="color:#fff;"> </i>
                             <span style="color:#8a95a6" >sales@apptechmobile.com </span> <br> <br>
                             <i class="fa fa-phone" style="color:#fff;"> </i>
                             <span style="color:#8a95a6"> 0731-4200898</span> <br> <br>
							<div class="rst-footer-newletter">
								<form action="shortcodes.html">
									<input type="text" name="email" id="email" placeholder="Your email adress" />
									<input type="submit" value="SUBMIT" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer content -->
			
			<!-- Footer copyright bar -->
			<div class="rst-footer-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="rst-copyright">
								<p>© Copyright 2016-2017. Apptech Mobile Solution [India]. All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<nav class="rst-footer-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">about</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-sm-3">
							<div class="rst-back-top">
								<a href="#">Back to top<i class="fa fa-long-arrow-up"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer copyright bar -->
		</footer>
		<!-- Footer -->
		
	</div>
	<!-- Wrapper -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
  
    <!-- Bootstrap Js Compiled Plugins -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- WoW Js -->
    <script type="text/javascript" src="js/wow.min.js"></script>
	
	<!-- Add Fancybox -->
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	<!-- Owl Slider Js -->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
	
	<!-- Validation Js -->
    <script type="text/javascript" src="js/jquery.validate.js"></script>
	
	<!-- Custom Google Maps js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgGyzOzpWh_mTpdx-UPt92W6GI8hE7P3M"></script>
	
	<!-- Custom scroll bar js -->
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>	
	
	<!-- Custom dropdown input js -->
	<script type="text/javascript" src="js/jquery.ddslick.min.js"></script>
	<script type="text/javascript" src="js/countrySelect.js"></script>
	
	<!-- Hoverdir js -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript" src="js/modernizr.js"></script>	
	
    <!-- Custom Js -->
	<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
	<script type="text/javascript" src="js/custom-form-elements.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.counterup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
     
     
     
     
      
   
     
  
     
     
     
     
     
  </body>
</html>