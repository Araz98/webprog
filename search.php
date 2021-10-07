<!DOCTYPE html>
<body>

<?php

echo "<table border='1'><tr>
<th>Username</th>
<th>Password</th>
<th>IC</th>
<th>Email</th>
<th>Gender</th>
<th>Bloodtype</th>
 </tr>"; 

$con=mysqli_connect("localhost","root","","project");
$Username=$_POST["name"];
$Bloodtype=$_POST["blood"];

$sql="SELECT * FROM userprofile WHERE username LIKE '%$Username%' && bloodtype LIKE '%$Bloodtype%'";

$result=mysqli_query($con,$sql);
while($x=mysqli_fetch_array($result,MYSQLI_NUM))

{

 $Username=$x[0];
$Password=$x[1];
$IC=$x[2];
$Email=$x[3];
$Gender=$x[4];
$Bloodtype=$x[5];


 echo "<tr>
<td>$Username</td>
<td>$Password</td>
<td>$IC</td>
<td>$Email</td>
<td>$Gender</td>
<td>$Bloodtype</td>
 </tr>";
 }
 echo "</table>"; 

?>
</body>
</html>