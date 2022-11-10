<?php

    include '../../Controller/Admin/LoginCheck.php';
    
?>

<html>
<head>
	<title>Login</title>
    
</head>
<body>
    <div class="topnav">
        <a href="Home.html">Home</a>
        <a href="View/Admin/login.php">Login</a>
        <link rel="stylesheet" type="text/css" href="../../CSS/loginStyle.css">
        <div class="reg-container">
            
            <a href="#">Registration</a>
            
            <div class="reg-content">
                <a href="View/Admin/DoctorReg.php">Doctor</a>
                <a href="View/Admin/PatientReg.php">Patient</a>
                <a href="View/Admin/PharmacyReg.php">Pharmacy</a>
                
            </div>

        </div>
        
    </div>
	

    <form method="post">
    <div class="form">
        
        <legend>
        <a href="../../HOME1.html"> 
            <img align="left" src= "../../Pictures/Doc.png" height="70px" width="70px" style="display: inline-block; "> </a> 
             MEDICAL SERVICES
        </legend>
        <br>
        <br>

        <label>User Name</label>
        <input type="text" name="userName" 
            value="<?php 
                        if(isset($_COOKIE['userName']))
                        {
                            echo $_COOKIE['userName'];
                        }
                        else {  echo $userName;  } ?>">

        <p style="color:red"><?php echo $userNameErr; ?> </p>
        <br>

        <label>Password</label>
        <input type="password" name="password"
            value = "<?php

                        if(isset($_COOKIE['password']))
                                {
                                    echo $_COOKIE['password'];
                                }

                        else { echo $password;  }?>">
        <p style="color:red"><b><?php echo $passwordErr; ?></b></p>
        <br>
        
        <input type="checkbox" name="Remember" style="width:5%; display: inline-block;"> Remember Me 
        <br>
        <br>
        
        <input type="submit" id="submit" name="Login" value="Login" style="width: 250px; height: 40px;">
        <p style="color:red"><?php echo $msg; ?></p>
        <br>

        <center>
            <label><a href="Fpass.php">Forgot Password?</a></label>
            <br>
            <label> Don't have any account?<a href="Registration.php">Sign Up</a> </label> 
        </center>
        


       

    </div>
    </form> 

    
        
        

   
    
    <div class="footer">
        <footer>
            <center>
                <p style="color: white;">Copyright@2021</p>
            </center>
        </footer>
    </div>            
            

</body>
</html>
