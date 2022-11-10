<?php
session_start();

    $PharmaNameErr = $PharmaAddErr = $PharmalicenseErr = $NameErr =$emailErr = $userNameErr = $mobNumErr = $nidNumErr =  $passwordErr = $conPasswordErr =  $genderErr =  $dobErr =  "" ;
      
      $PharmaName = ""; 
      $PharmaAdd = "";
      $Pharmalicense = "";
      $Name = ""; 
      $email = "";
      $userName= "";
      $mobNum = "";
      $nidNum = "";
      $password= "";
      $conPassword = "";
      $gender = "";
      $dob = "";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{     
    if(isset($_POST["submit"]))
    {   
        if(empty($_POST['PharmaName'])) {
          $PharmaNameErr = "Please fill up your Pharmacy Name properly";
          }
        else {
          $PharmaName = $_POST['PharmaName'];
        }
        
        if(empty($_POST['PharmaAdd'])) {
          $PharmaAddErr = "Please fill up your Pharmacy Name properly";
          }
        else {
          $PharmaAdd = $_POST['PharmaAdd'];
        }
        
        if(empty($_POST['Pharmalicense'])) {
          $PharmalicenseErr = "Please fill up your Pharmacy License number properly";
          }
        else {
          $Pharmalicense = $_POST['Pharmalicense'];
        }

        if(empty($_POST['name'])) 
        {
          $NameErr = "Please fill up your Name properly";
        }
        else {
          $Name = $_POST['name'];
        }

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

          if(empty($_POST['userName'])) 
                {

                  $userNameErr = "Please fill up your username properly";
                }

          else {
                  
                  
                if (strlen($_POST['userName'])>1)
                {
                  $s_char = array("^" ,"£", "$", "%" , "&", "*" ,"(", "}" , "{" ,"@" ,"#", "~" ,"?" ,">", "<", ">" ,"," ,"|", "=" ,"+" ,"¬", "-", "[" ,"]" , "!" ) ;

                  for ($i=0; $i<sizeof($s_char); $i++)
                  {

                    if (strpbrk($userName, $s_char[$i]))
                    {
                      $userNameErr ="User Name can contain alpha numeric characters, period, dash or underscore only";
                      break;
                    }

                    else 
                    {
                      $userName = $_POST['userName'];
                    }

                  }
                  

                }
                else
                {
                  $userNameErr = "User Name must contain at least two (2) characters";
                }
            }
        
        if(empty($_POST['mobNum'])) {
          $mobNumErr = "Please fill up your mobile number properly";
          }
        else {
          $mobNum = $_POST['mobNum'];
        }
        
        if(empty($_POST['nidNum'])) {
          $nidNumErr = "Please fill up your NID number properly";
          }
        else {
          $nidNum = $_POST['nidNum'];
        }
        

        if(empty($_POST['password'])) {
          $passwordErr = "Please fill up the password properly";
          }

          else {
          

            if (strlen($_POST['password'])<6)
            {
              $passwordErr = "Password length must be greater than 5 characters";  
            }
            else

            {
              if(strpos( $_POST['password'], '@') or strpos($_POST['password'], '#') or strpos($_POST['password'], '$') or strpos($_POST['password'], '%') )
              { 

                $password = $_POST['password'];
               }
               
              else
              {
                $passwordErr = "Password must contain at least one of the special characters (@, #,$, %)";
              }

          }
        }


        if(empty($_POST['conPassword'])) {
        $conPasswordErr = "Please fill up the password properly";
        }
        else {
          $conPassword = $_POST['conPassword'];
        
             if (!($conPassword == $password)) 
                { 
                    $conPasswordErr = "Password does not matched"; 
                }
        }

        if (empty($_POST['gender'])) {
               $genderErr = "Gender is required"; 
        } 

        else { 
          $gender = $_POST['gender']; 
        }
        
        if(empty($_POST['dob'])) {
          $dobErr = "Please fill up the date of birth properly";
        }
        else {
          $dob = $_POST['dob'];
        }
        
        if( $PharmaName != "" && $PharmaAdd != "" && $Pharmalicense !="" && $Name != "" && $email != "" && $userName != "" && $mobNum != "" && $nidNum != "" && $password != "" && $conPassword != "" && $gender != "" && $dob != "" )
        {
          
          $PharmaUsers = $PharmaName."|".$PharmaAdd."|".$Pharmalicense."|".$Name."|".$email."|".$userName."|".$mobNum."|".$nidNum."|".$password."|".$gender."|".$dob;

          $file1 = fopen("PharmaReg.txt", "a");
          fwrite($file1, $PharmaUsers);
          fwrite($file1, "\n");

          fclose($file1);
          
          header('location: Login.php');
          
        }
    }
    else 
    {
        echo "";
    }
}

?>

<html>
<head>
  <title>Manual Admin Registration</title>
</head>
<body >
  <form method="post" action= "#">
    
      
  <table border = "1" height ="100%" width ="100%">
        <tr>
            <td width = "15%">
                    <a href="../Home.html">
                    <img src= "../Pictures/Doc.png" height="70px" width="70px">
                    </a> 
            </td>
            
            <td align= "Right" colspan = 2>
                Logged in as <a href="Dashboard.php"> <?php echo $_SESSION['user']['userName']; ?> </a> |
                <a href="../Control/Logout.php">Logout</a> 
            </td>
        </tr>
        <tr height= "80%">
            <td width = "30%"  valign = "top">
                <br>
                <br>
            
            <h1> Admin Account </h1>
   
                    <ul type= "disc" >
                    <h3><li> <a href= "Dashboard.php"> Dashboard </a> </li></h3>
                    <h3><li> <a href= "Viewpro.php"> View Profile </a> </li></h3>
                    <h3><li> <a href= "AddUsers.php"> Add Users </a> </li></h3>
                    <h3><li> <a href= "AdminMain.php"> Admin Request </a> </li></h3>
                    <h3><li> <a href= "DocMain.php"> Doctor Request</a> </li></h3>
                    <h3><li> <a href= "ViewUsers.php"> View Users </a> </li></h3>
                    <h3><li> <a href= "../Control/Logout.php"> Logout </a> </li></h3>
                    </ul>
                
            </td>
            <td colspan="2" align= "center">
                <br>
                <br>
                <fieldset style ="margin: 0px 300px ;">
                <legend><b>Admin</legend>
                <table>
                
                <tr>
          <td><b>Pharmacy Name</td>
          <td><input type="text" name="PharmaName" value="<?php echo $PharmaName;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $PharmaNameErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
          <td><b>Pharmacy Address</td>
          <td><input type="text" name="PharmaAdd" value="<?php echo $PharmaAdd;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $PharmaAddErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
          <td><b>Trade License</td>
          <td><input type="text" name="Pharmalicense" value="<?php echo $Pharmalicense; ?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $PharmalicenseErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
          <td><b>Name </td>
                    <td>
                    <input type="text" name="name" value="<?php echo $Name;?>">
                    </td>
        </tr>
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $NameErr; ?></p>
                    </td>
                </tr>

                <tr>
                    <td colspan=2><hr></td>
        </tr>

        <tr>
          <td><b>Email</td>
          <td><input type="email" name="email" value="<?php echo $email;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $emailErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
          <td><b>Username</td>
          <td><input type="text" name="userName" value="<?php echo $userName;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $userNameErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
          <td><b>Mobile Number</td>
          <td><input type="text" name="mobNum" value="<?php echo $mobNum;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $mobNumErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
          <td><b>NID Number</td>
          <td><input type="text" name="nidNum" value="<?php echo $nidNum;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $nidNumErr; ?></p>
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                
        <tr>
          <td><b>Password</td>
          <td><input type="password" name="password" value="<?php echo $password;?>"></td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $passwordErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>

        <tr>
          <td><b>Confirm Password </td>
          <td><input type="password" name="conPassword" value="<?php echo $conPassword;?>"></td>
        </tr>
                
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $conPasswordErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>

        <tr>
                    <td colspan=2>
          <fieldset>
                    <legend><b>Gender</legend>
                    <input type="radio" name="gender" 
                    <?php if(isset($gender) && $gender=="Male") echo "checked"; ?> value="Male"> Male
                    <input type="radio" name="gender" 
                    <?php if(isset($gender) && $gender=="Female") echo "checked"; ?> value="Female"> Female
                    <input type="radio" name="gender" 
                    <?php if(isset($gender) && $gender=="Others") echo "checked"; ?> value="Others"> Others
                    </fieldset>
                    </td>
        </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $genderErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                <tr>
                    <td colspan=2>
                    <fieldset>
                    <legend><b>Date Of Birth</legend>
                    <input type="date" name="dob" value="<?php echo $dob ?>">
                    </fieldset>
                    </td>
                </tr>
                
                <tr>
                    <td colspan = 2>
                    <p style="color:red"><?php echo $dobErr; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=2><hr></td>
        </tr>
                
                
        <tr>
          <td align= "center">
                    <input type="submit" name="submit" value="Submit"  style="width: 150px; height: 45px">
                    </td>
                    <td align= "center">
                    <input type="reset" name="reset" value="Reset"  style="width: 150px; height: 45px;">
                    </td>
                </tr>
                

                
                </table>
                
                </fieldset>
                <br>
                <br>
            
            </td>
        </tr>
            
        <tr>
            <td colspan=2>
            <center>
            <p>Copyright@2021</p>
            </center>
            </td>
        </tr>
            
  </table>
    
  </form>

</body>
</html>