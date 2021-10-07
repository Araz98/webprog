<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>BD</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />

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
session_start();
$user=$_SESSION["username"];
if(isset($user)){
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
					<h1>HELLO <?php echo "$user";?>!</h1>
					<p><i>WELCOME BACK</i></p>
					
				</div>
			</section>
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<script src="assets/js/admin.js"></script>
<script src="assets/js/my.js"></script>
<?php
}
else 
echo "No session exist or session is expired.Please Log IN again";
?>
</body>
</html>