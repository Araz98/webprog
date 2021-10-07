<!DOCTYPE html>
<body>
<?php
session_start();
$user=$_SESSION["username"];

if(isset($user))
{

$con=mysqli_connect("localhost","root","","project") or die("Cannot connect to server.".mysqli_error($con));

$e=$_POST["password"];
$f=$_POST["ic"];
$h=$_POST["gender"];
$i=$_POST["email"];
$p=$_POST["bloodtype"];

$sql="UPDATE userprofile SET password='$e',ic='$f', gender='$h', email='$i',bloodtype='$p' WHERE username = '$user'";

$x=mysqli_query($con,$sql);

if($x)
 echo "Succesfully insert new data.";
}
else
 echo "Error in inserting new data.";
?>
</body>
</html> 