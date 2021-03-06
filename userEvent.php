
<!DOCTYPE html>
<head> 
<title>BD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

 <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet" href="assets/css/my.css" />
</head>



<body>
<?php
//call this function to check if session is exists or not
    session_start();
    $user=$_SESSION["username"]; //pass value $_SESSION variable to variable $user to display

//if session is exists
    if(isset ($user)){
    ?>
<!-- Header -->
	<header class="header_area">
            	<div class="main_menu">
            		<nav class="navbar navbar-expand-lg navbar-light">
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><div class="logo"><a href="index.html">Blood Donation<span><i> by Allias.org</i></span></a></div>
						<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="userprofile.php">User Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
					
                                        
				</ul>
			</nav>


						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index1.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="userAbout.html">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="userEvent.php">Event</a></li> 
								
								<li><div style="background-color:white; border:solid 1px #333; float:left; text-align:center; padding:5px;"><a class="fa fa-user" href="#menu" >
  								 <br>User</a></div><li>
								<li class="nav-item"><a class="nav-link" href=""></a></li>
							</ul>
							
						</div> 
					
            		</nav>
           	 </div>
        </header>
<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<h1>BLOOD DONATION</h1>
					<h2><i>UPCOMING EVENT</i></h2>
					<a href="#event" class="button special scrolly">View Event</a>
				</div>
			</section>
 <!--================First Event =================-->
      
 <section id="event" class="welcome_area p_120">
        	
 <div class="container">
 	
	<div class="welcome_inner row">
        		
		<div class="col-lg-5">
  
			<div class="welcome_img">
 
				<img class="img-fluid" src="event1.jpg" alt="" height="300" width="300">
        				
			</div>
        			
		</div>
 
		<div class="col-lg-6 offset-lg-1">
        				
			<div class="welcome_text">
 
				<h3>Be A Hero Today</h3>
      					
				<p>Blood drive. 1 pint of blood saves 3 lives. What are you waiting for?Let's give a gift of life.</p>
        					
				<br>Date: 24th December 2019</br>
  <br>Time: 8.00 am - 8.00pm</br>
 <br>Venue: Hospital Serdang</br>
   					
				<a class="main_btn" href="eventregister.php">Register</a>
        				
			</div>
        			
		</div>
        		
	</div>
        	
 </div>
        
 </section>
      
  <!--================End First Event =================-->
       
<!--================Second Event =================-->
      
 <section id="event" class="welcome_area p_120">
        	
 <div class="container" >
 	
	<div class="welcome_inner row">
        		
		<div class="col-lg-5">?h
  
			<div class="welcome_img">
 
				<img class="img-fluid" src="7a57578ac5e50962303a92120a57f41a.jpg" alt="" height="300" width="300">
        				
			</div>
        			
		</div>
 
		<div class="col-lg-6 offset-lg-1">
        				
			<div class="welcome_text">
 
				<h3>Find The Hero In You</h3>
      					
				<p>Help in need or maybe even yourself. This is a chance for you to be more aware of giving to others in need. 
Lots of information of 'Bood Donation are waiting for you to figure out.</p>
        					
				<br>Date: 18th April 2019</br>
  <br>Time: 1.00 pm - 5.00pm</br>
 <br>Venue: Atrium, Poole House, Talbut Campus, Bournemouth University</br>
   					
				<a class="main_btn" href="eventregister2.php">Register</a>
        				
			</div>
        			
		</div>
        		
	</div>
        	
 </div>
        
 </section>
      
  <!--================End Second Event =================-->

   <!--================Third Event =================-->
      
 <section id="event" class="welcome_area p_120">
        	
 <div class="container" >
 	
	<div class="welcome_inner row">
        		
		<div class="col-lg-5">
  
			<div class="welcome_img">
 
				<img class="img-fluid" src="Vivacity-Megamall-Blood-Donation.jpg" alt="" height="300" width="300">
        				
			</div>
        			
		</div>
 
		<div class="col-lg-6 offset-lg-1">
        				
			<div class="welcome_text">
 
				<h3>Give The Gift Of Life</h3>
      					
				<p>A blood donation campaign held by LEO Club of NIIT College. Donate now and get free 1kg Rice and goodies bag. A lot of other activity will be held too!</p>
        					
				<br>Date: 16th April 2019</br>
  <br>Time: 10.00 am - 10.00pm</br>
 <br>Venue: Vivacity Megamall(E-Atrium)</br>
   					
				<a class="main_btn" href="eventregister3.php">Register</a>
        				
			</div>
        			
		</div>
        		
	</div>
        	
 </div>
        
 </section>
      
  <!--================End Third Event =================-->

    <?php //put right before close </body> tag
  }
  else
    echo "No session exist or session is expired. Please log in again";
  ?>
</body>
</html>


</tr>		
</table>
</form>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<script src="assets/js/my.js"></script>
</body>
</html>
