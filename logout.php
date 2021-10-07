<!DOCTYPE html>
<body>
<?php

session_start();
$user = @$_SESSION["username"];

if(isset($user))
{
	session_destroy();
	?>
	<script>
	window.location='index.html';
	</script>
	<?php
}
else
{
	echo "no session";
}

?>
</body>
</html>