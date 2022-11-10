
<?php



  $flag=0;
  $name=$email=$phone=$space=$pass= $sql=$error="";
  if(isset($_POST['ownersignup'])){
    if(!empty($_POST['ouname'])){
      $name = mysqli_real_escape_string($conn, $_POST['ouname']);
    }
    else{

      $error="user name can not be empty";
      $flag=1;
    
    }


    if(!empty($_POST['pname'])){
      $email = mysqli_real_escape_string($conn, $_POST['pname']);

    }
    else{

      $error="user full name can not be empty";
      $flag=1;
    
    }
    if(!empty($_POST['ophone'])){
      $phone = mysqli_real_escape_string($conn, $_POST['ophone']);

    }
    else{

      $error="user phone number can not be empty";
      $flag=1;
    
    }
    if(!empty($_POST['pnid'])){
      $space = mysqli_real_escape_string($conn, $_POST['pnid']);

    }
    else{

      $error="NID can not be empty";
      $flag=1;

    }

    if(!empty($_POST['oaddress'])){
      $address = mysqli_real_escape_string($conn, $_POST['oaddress']);

    }
    else{

      $error="user address can not be empty";
      $flag=1;
    
    }

    if(!empty($_POST['ocpass'])){
      $pass = mysqli_real_escape_string($conn, $_POST['ocpass']);

    }
    else{

      $error="user password can not be empty";
      $flag=1;
    
    }
    if(!empty($_POST['ouname'])&&!empty($_POST['pname'])&&!empty($_POST['ophone'])&&!empty($_POST['pnid'])&&!empty($_POST['oaddress'])&&!empty($_POST['ocpass']))
    {
    $sql = "";

      mysqli_query($conn, $sql);

    //  header("Location:../login.html");



  echo '<script>alert("Your account is under review please try to login after 2 hours")</script>';

    }

  }

  ?>
<style>

#error_message{
    margin-bottom: 20px;
    background: #fe8b8e;
    padding: 0px;
    text-align: center;
    font-size: 14px;
    transition: all 0.5s ease;
  }

</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pharmecy Sign-Up</title>
    <link rel="stylesheet" href="signuppharmecy.css" />
  </head>
  <body>
    <form class="box" action="" method="post">
    <div id="Error_Message"><?php echo $error ?>
    </div>
      <h1>pharmecy Sign-Up</h1>
      <input type="text" name="ouname" placeholder="User Name" />
      <input type="text" name="pname" placeholder="Full Name" />
      <input type="text" name="ophone" placeholder="Phone Number">
	  <input type="text" name="gender" placeholder="Gender" />
      <input type="text" name="pnid" placeholder="Nid No" />
	   <input type="text" name="pnid" placeholder="Licence No" />
	    <input type="text" name="pnid" placeholder="Store No" />
      <input type="text" name="oaddress" placeholder="Address" />
      <input type="password" name="ocpass" placeholder="Password" />
      <input type="submit" name="ownersignup" value="Sign-Up" />
    </form>
  </body>
</html>
