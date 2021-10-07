<!DOCTYPE html>
<body>

<table border='1'><tr>
 
 <th>Eventname:</th>
<th>Description:</th>
 <th>Date:</th>
 <th>Time:</th>
<th>Venue:</th>
 


<?php
$con=mysqli_connect("localhost", "root", "","project");

$sql="SELECT * FROM event";

$result=mysqli_query($con,$sql);

 while($ww=mysqli_fetch_array($result,MYSQLI_NUM))
 {
$eventname=$ww[0];
$description=$ww[1];
 $date=$ww[2];
 $time=$ww[3];
 $venue=$ww[4];
 


 echo"<tr>
 <td>$eventname</td>
<td>$description</td>
 <td>$date</td>
<td>$time</td>
<td>$venue</td>


</tr>";
 }
echo"</table>";
?>
</body>
</html> 