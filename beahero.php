<!DOCTYPE html>
<body>

<table border='1'><tr>
 
 <th>Username:</th>
 <th>IC:</th>
 <th>Email:</th>
<th>Gender:</th>
 <th>Blood Type:</th>


<?php
$con=mysqli_connect("localhost", "root", "","project");

$sql="SELECT * FROM beahero";

$result=mysqli_query($con,$sql);

 while($ww=mysqli_fetch_array($result,MYSQLI_NUM))
 {
$username=$ww[0];
 $ic=$ww[1];
 $email=$ww[2];
 $gender=$ww[3];
 $bloodtype=$ww[4];


 echo"<tr>
 <td>$username</td>
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