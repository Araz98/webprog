<?php
$con=mysqli_connect("localhost","root","","project") or die("Cannot connect to server");
$username=$_POST['user'];
$password=$_POST['pass'];
$searchu="SELECT password FROM userprofile WHERE username='$username'";
$searcha="SELECT password FROM admin WHERE username='$username'";
if ($username!=null && $password!=null)
{
    $resulta=mysqli_query($con,$searcha);
    $counta=mysqli_num_rows($resulta);
    if($counta == 0)
    {
            $resultu=mysqli_query($con,$searchu);
            $countu=mysqli_num_rows($resultu);
            if ($countu==0)
                echo "Username does not exist";
            else
            {
                $row=mysqli_fetch_array($resultu);
                if($row['password'] == $password)
                {
                    session_start();
                    $_SESSION["username"]= $username;
                    header("Location:index1.php");
                }
                else
                    echo "Username and password don't match.";
        }
            
    }
    else
    {
        $row=mysqli_fetch_array($resulta);
        if($row['password'] == $password)
        {
            session_start();
            $_SESSION["username"]= $username;
            header("Location:admin.html");
        }
        else
            echo "Username and password don't match.";
    }
    
}
else
    echo "Please fill in the relevant details.";
?>