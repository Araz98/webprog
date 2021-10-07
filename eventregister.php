<!DOCTYPE html>
<body>

<?php

//call this function to check if session is exists or not
    session_start();
    $user=$_SESSION["username"]; //pass value $_SESSION variable to variable $user to display

//if session is exists
if(isset ($user))
{

	$con=mysqli_connect("localhost", "root","","project") or die("Cannot connect to server");

	$user=$_SESSION["username"];

	$sql="SELECT COUNT(*) from beahero";
 	$result=mysqli_query($con, $sql);

	 $rows= mysqli_fetch_array($result, MYSQLI_BOTH);




    if ($rows['COUNT(*)'] < 5) 
    {

    	$query = "SELECT * FROM beahero WHERE username ='$user'";
		$sql_result = mysqli_query($con,$query);

    	if (mysqli_num_rows($sql_result)>0) //to return the query result in number of rows

		{
 			echo "<script type='text/javascript'>alert('Sorry, you have already joined this event.'); window.location.href='userEvent.php';</script>";
 		}
 	
 		else
 		{

 			$sql1="INSERT INTO beahero SELECT username,ic,email,gender,bloodtype FROM userprofile WHERE username='$user'";

 			$result1=mysqli_query($con,$sql1);

 			if($result1){

 				echo "<script type='text/javascript'>alert('Thank you for joining be a hero event!'); window.location.href='userEvent.php';</script>";
 			}

 			else {
 				echo "<script type='text/javascript'>alert('Failed.'); window.location.href='userEvent.php';</script>";
 			}
	

		}
	}

	else 
	{
		echo "<script type='text/javascript'>alert('Sorry, participant limit has exceeded.'); window.location.href='userEvent.php';</script>";
	}

    	
    
}
	

    else
    echo "No session exist or session is expired. Please log in again";



		

?>
</body>
</html>