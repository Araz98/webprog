<!DOCTYPE html>
<body>

<table border='1'><tr>
 
 <td>Username:</td>
<td>Password:</td>
 <td>IC:</td>
 <td>Email:</td>
<td>Gender:</td>
 <td>Blood Type:</td>


<?php
$con=mysqli_connect("localhost", "root", "","project");

$sql="SELECT * FROM userprofile";

$result=mysqli_query($con,$sql);

 while($ww=mysqli_fetch_array($result,MYSQLI_NUM))
 {
$username=$ww[0];
$password=$ww[1];
 $ic=$ww[2];
 $email=$ww[3];
 $gender=$ww[4];
 $bloodtype=$ww[5];


 echo"<tr>
 <td>$username</td>
<td>$password</td>
 <td>$ic</td>
<td>$email</td>
<td>$gender</td>
<td>$bloodtype</td>

</tr>";
 }
echo"</table>";
?>
</body>
</html> 