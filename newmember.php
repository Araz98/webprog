<!DOCTYPE html>
<body>
<?php
$con=mysqli_connect("localhost","root","","project");
$username=$_POST["user"];
$password=$_POST["pass"];
$password2=$_POST["rpass"];
$ic=$_POST["ic"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$bloodtype=$_POST["bloodtype"];

$insert="INSERT INTO userprofile VALUES('$username','$password','$ic','$email','$gender','$bloodtype')";

$search_email="SELECT email FROM userprofile WHERE email='$email'";

$search_username="SELECT username FROM userprofile WHERE username='$username'";

$search_username_admin="SELECT username FROM admin WHERE username='$username'";

$search_email_admin="SELECT email FROM admin WHERE email='$email'";

if ($password != null && $email != null && $username != null)
{
        if ($password==$password2)
        {
            $searche_result=mysqli_query($con,$search_email);
            $counte=mysqli_num_rows($searche_result);
            $searche_result_admin=mysqli_query($con,$search_email_admin);
            $counte_admin=mysqli_num_rows($searche_result_admin);
            if ($counte==0 && $counte_admin==0)
            {
                $searchu_result=mysqli_query($con,$search_username);
                $countu=mysqli_num_rows($searchu_result);
                $searchu_result_admin=mysqli_query($con,$search_username_admin);
                $countu_admin=mysqli_num_rows($searchu_result_admin);
                if ($countu==0 && $countu_admin==0)
                {
                    $insert_result=mysqli_query($con,$insert);
                    if($insert_result)
                    {
                      session_start();
                      $_SESSION["username"]= $username;
                      header("Location:index.html");
                    }

                    else
                        echo "Error.";
                }
                else
                    echo "Username is already in use.";

            }
            else
                echo "E-mail is already in use.";
        }
        else
            echo "The 2 passwords don't match";
}
else 
    echo "Please fill in all the blanks.";
?>
</body>
</html>