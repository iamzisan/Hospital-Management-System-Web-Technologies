<?php
        $userName = $userNameErr = $email = $emailErr = "";
        $flag=0;
?>

<html>
<head>
	<title>Forget Password</title>
</head>
<body style="background: url('../Pictures/db5.jpg')no-repeat;   background-size: 100% 98%;">
	<form method="post">
		
			
	<table height= "100%" width= "100%">
        <tr>
            <td width = "15%">
                    <a href="../Home.html">
                    <img src= "../Pictures/Doc.png" height="70px" width="70px">
                    </a> 
            </td>
            
            <td align= "Right">
                <a href="../Home.html">Home</a> |
                <a href="login.php">Login</a> |
                <a href="Registration.php">Registration</a>
            </td>
        </tr>
        <tr height = "100%">
            <td colspan = 2>
                <fieldset style="margin: 0px 500px ;">
                <legend >Forget Password</legend>
                <br>
                <table align= "Center">
                    
                    <tr>
                        <td><b>Username</td>
                        <td><input type="text" name="userName" value="<?php 
                        if(isset($_POST["submit"]))
                        {
                                if(empty($_POST['userName'])) {
                                  $userNameErr = "Please fill up your username properly";
                                  }
                                else {
                                  $userName = $_POST['userName'];
                                  echo $userName;
                                    }
                        }
                        ?>"></td>
                    </tr>
                
                    <tr>
                        <td colspan = 2>
                        <p style="color:red">
                        <?php 
                        if(isset($_POST["submit"]))
                        {
                                if(empty($_POST['userName'])) {
                                  $userNameErr = "Please fill up your username properly";
                                  echo $userNameErr;
                                  }
                                else {
                                        $userName = $_POST['userName'];
                                     }
                        }
                        ?>
                         </p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"> <hr> </td>
                    </tr>
                    
					<tr>
                        <td><b>Enter Email</td>
                        <td>
                        <input type="email" name="email" 
                        value="<?php
                        if(isset($_POST["submit"]))
                        {
                            
                            if(empty($_POST['email'])) 
                                    {
                                      $emailErr = "Please enter an email";
                                    }
                                    else {


                                      if (strpos($_POST['email'], '@'))
                                        { 

                                             if( strpos($_POST['email'], '.') )
                                             {
                                              $email = $_POST['email'];
                                              echo $email;
                                             }
                                             else
                                             {
                                              $emailErr = "Invalid Email format! Check Your Email..";
                                             }

                                           
                                        }
                                        else
                                        {
                                          $emailErr = "@ is Missing..";
                                        }
                                    }
                        }

                        ?>">
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan = 2>
                        <p style="color:red"><?php
                            if(isset($_POST["submit"]))
                            {    
                                    
                                    if(empty($_POST['email'])) 
                                    {
                                      $emailErr = "Please enter an email";
                                      echo $emailErr;
                                    }
                                    else {


                                      if (strpos($_POST['email'], '@'))
                                        { 

                                             if( strpos($_POST['email'], '.') )
                                             {
                                              $email = $_POST['email'];
                                             }
                                             else
                                             {
                                              $emailErr = "Invalid Email format! Check Your Email..";
                                              echo $emailErr;
                                             }

                                           
                                        }
                                        else
                                        {
                                          $emailErr = "@ is Missing..";
                                          echo $emailErr;
                                        }
                                    }
                            }   ?>
                        </p>
                        </td> 
                        
                    </tr>
                    <tr>
						<td colspan=2>
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
						<td colspan=2>
                            <p style="color:red">
                            <?php 
    
                            if($userName != "" && $email != "")
                                {
                                    $file = fopen('../View/OrgAdmin.txt', 'r')
                                    or die("unable to open file");
                                    
                                    while(!feof($file))
                                    {
                                        
                                    $data = fgets($file);
                                    if ($data != "")
                                    {
                                    $admin = explode('|', $data);
                            
                                        if (trim($admin[1]) == $email && trim($admin[2]) == $userName)
                                           {
                                                $flag++;
                                                
                                                $pass= $admin[3];
                                                
                                                break;
                                           }
                                    }   
                                    }
                                    
                                    if($flag>0)
                                    {
                                        echo "Your Password is ". $pass;
                                        
                                    }
                                    else{
                                        echo "Check your Username/Email.";
                                    }
                                    
                                    fclose($file);
                                }
                            
                            ?>
                            </p>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td> </td>
                        <td align= "right">
                        <input type="submit" name="submit" value="Submit" style="width: 100px; height: 30px;">
                        </td>
					</tr>
                </table>
                </fieldset>
            </td>
        </tr>
            
        <tr>
            <td colspan = 2>
            <center>
            <p>Copyright@2017</p>
            </center>
            </td>
        </tr>
            
	</table>
		
	</form>

</body>
</html>



