<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>User Profile</title>

    <!-- Icons font CSS-->
    <link href="vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendors/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendors/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="csss/main.css" rel="stylesheet" media="all">
</head>

<body>
<?php 
       session_start();
       $user=$_SESSION["username"];

      if(isset($user))
      {

?>
<?php
$con=mysqli_connect("localhost","root","","project") or die("Cannot connect to server.".mysqli_error($con));;
$sql="SELECT * FROM userprofile WHERE username='$user'";
$result=mysqli_query($con,$sql) or die("Cannot execute sql.");
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
?>
               	 		

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">USER PROFILE</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="userprofile2.php" name="userprofile2">
                       

<div class="form-row">
                           

			    <div class="form-row">
                            <div class="name">PASSWORD</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="password" value="<?php echo "$row[1]";?>" required></input>
                                </div>
                            </div>
                        </div>
			<div class="form-row">
                            <div class="name">IC</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ic" value="<?php echo "$row[2]";?>" required></input>
				    <label class="label--desc">YYMMDD-XX-XXXX</label>
                                </div>
                            </div>
                        </div>
			
             		<div class="form-row">
                            <div class="name">Gender</div>
                            
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="gender" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="Female">
                                    <span class="checkmark"></span>
                                </label>
                            
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo "$row[3]";?>" required></input>
				    
                                </div>
                            </div>
                        </div>
                       
                                  
			
			<div class="form-row">
                            <div class="name">bloodtype</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="bloodtype" >
                                            <option disabled="disabled" selected="selected">- Choose blood type -</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
				    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
				    <option>O+</option>
                                    <option>O-</option>	
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="save">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendors/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/datepicker/moment.min.js"></script>
    <script src="vendors/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="jss/global.js"></script>
<?php
}
else
echo "<script type='text/javascript'>alert('Please log in again.'); window.location.href='index.html';</script>";
?>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->