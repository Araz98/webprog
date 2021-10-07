<html>
<body>
<?php

$con = mysqli_connect("localhost", "root", "", "project");
$eventname = $_POST["eventname"];
$description = $_POST["description"];
$date = $_POST["date"];
$time = $_POST["time"];
$venue = $_POST["venue"];



echo "New event is successfully inserted";

$sql = "Insert into event values ('$eventname','$description','$date','$time','$venue')";
mysqli_query($con, $sql);

?>
</body>
</html>