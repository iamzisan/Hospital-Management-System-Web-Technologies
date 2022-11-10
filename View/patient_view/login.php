<?php
	if(isset($_REQUEST['msg'])){
		$msg=$_REQUEST['msg'];
		if($msg=='wrong'){
			echo '<script language="javascript">';
		    echo 'alert("Worng User Name & Password!!!!")';
		    echo '</script>';
		}
		if($msg=='null'){
			echo '<script language="javascript">';
			echo 'alert("Null Value Found")';
			echo '</script>';
			
		}
	}
?>

<html>
<head>
	<title>Login</title>
	
    
</head>
<body>
    <div class="topnav">
        <a href="../../Home.html">Home</a>
        <a href="login.php">Login</a>
        <link rel="stylesheet" type="text/css" href="../../CSS/loginStyle.css">
        <div class="reg-container">
            
            <a href="#">Registration</a>
            
            <div class="reg-content">
                <a href="../Doctor/DocReg.php">Doctor</a>
                <a href="PatientReg.php">Patient</a>
                <a href="../pharmacy/PharmacyReg.php">Pharmacy</a>
                
            </div>

        </div>
        
    </div>

    <form method="post" action="../../controller/patient_controller/loginCheck.php">
    <div class= form>
    	
			<legend>
	        <a href="../../HOME1.html"> 
	            <img align="left" src= "../../Pictures/Doc.png" height="70px" width="70px" style="display: inline-block; "> </a> 
	             MEDICAL SERVICES
        </legend>
        <br>
        <br>
			
					
						<label><h3>Username</h3></label>
						<input type="text" name="username" value=
						"<?php 
                        if(isset($_COOKIE['userName']))
                        {
                            echo $_COOKIE['userName'];
                        }
                         ?>"  placeholder="Username">
						<br>
					
					
						<label><h3>Password<h3></label>
						<input type="password" value=
						 "<?php

                        if(isset($_COOKIE['password']))
                                {
                                    echo $_COOKIE['password'];
                                }

                        ?>" name="password" placeholder="Password">
						<br>
					

					<input type="checkbox" name="Remember" style="width:5%; display: inline-block;"> Remember Me 
			        <br>
			        <br>
			        
						
						<input id="submit" type="submit" name="submit" value="Submit" style="width: 260px; height: 40px;">
					 <br> 
					<center>New here? <br><a href="../Admin/Registration.php">Signup</a></center>
					
		
		
    </div>
    </form>