<!DOCTYPE html>
<body>

 <?php

$con=mysqli_connect("localhost", "root", "","project");

$USERNAME=$_POST["name"];

$sql="SELECT * FROM userprofile WHERE username='$USERNAME'";

$result=mysqli_query($con,$sql) or die("Cannot execute sql.");

$x=mysqli_fetch_array($result,MYSQLI_BOTH);


if($USERNAME=$x[0])
{
 ?>
 <p>Below are customer's information details:</p>

<br>Username:<input name="username" type="text" value=<?php echo "$x[0]"; ?>></br>
<br>Password:<input name="password" type="text" value=<?php echo "$x[1]"; ?>></br>
<br>IC:<input name="ic" type="text" value=<?php echo "$x[2]"; ?>></br>
<br>Email:<input name="email" type="text" value=<?php echo "$x[3]"; ?>></br>
<br>Gender:<input name="gender" type="text" value=<?php echo "$x[4]"; ?>></br>
<br>Blood Type:<input name=bloodtype type="text" value=<?php echo "$x[5]"; ?>></br>



<?php
}
else echo"<p>Username not exist</p>";
?>

</body>
</html>