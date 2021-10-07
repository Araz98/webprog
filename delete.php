<!DOCTYPE html>
<body>
<?php
$con=mysqli_connect("localhost", "root", "","project");
$Username=$_POST["name"];

$sql_delete="DELETE FROM userprofile WHERE username LIKE '$Username'";

$sql_result=mysqli_query($con,$sql_delete);

if($sql_result)
	echo"Sucessfully deleted.";
 else 
	echo"Error in deleting the data";

?>
</body>
</html> 