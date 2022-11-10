<?php session_start();

require "../../Model/pharmacy/db_connect.php";
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
    $query = "SELECT username from login where username='$uname' and password='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["username"];

      header("Location:pharmecypanel.php");
    }
    else
    {
echo '<script>alert("Please check your username and Password")</script>';
    }
  }


}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login2.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
Login Form</div>
<form method="post" action="">
        <div class="field">
          <input type="text" name="uname">
          <label>User Name</label>
		    <td><span> <?php echo $err_uname;?></span></td>
        </div>
<div class="field">
          <input type="password" name="psw">
          <label>Password</label>
		   <td><span><?php echo $err_psw;?></span></td>  
        </div>

<div class="field">
          <input type="submit" name="login" value="Login" />
        </div>

</form>
</div>
</body>
</html>
