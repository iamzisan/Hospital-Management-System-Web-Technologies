
<?php session_start();

require "../../Model/Doctor/db_connect.php";
global $con;

$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Username Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT username login from  where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:DoctorPanel.php");
    }
    else
    {
echo '<script>alert("Please check your username and Password")</script>';
    }
  }


}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>

  <body>
    <form class="box" action="" method="post">
      <h1>Login</h1>
      <input type="text" name="uname" placeholder="Username"/>
	   <td><span> <?php echo $err_uname;?></span></td>
      <input type="password" name="psw" placeholder="Password"/>
	   <td><span><?php echo $err_psw;?></span></td>  
      <input type="submit" name="submit" value="Login" />
    </form>
  </body>
</html>
