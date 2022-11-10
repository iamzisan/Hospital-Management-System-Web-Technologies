<?php
    session_start();
    require('../../Model/Admin/usersModel.php');
    $user = "admin_reg";
    $userName = $_SESSION['userName'];
    $password = $_SESSION['password'];
    $loginId = getLoginId($userName, $password);
    $id = getUserById($user,$userName, $password);
    $user = getUser($user, $id);

    $emailErr = $userNameErr = $passwordErr = $genderErr = $dobErr = "";

    $Name = ""; 
    $email = "";
    $userName= "";
    $password= "";
    $gender = "";
    $dob = "";

	if(isset($_POST['Update']))
        
    {
        if(empty($_POST['name'])) 
        {
          $Name = $user['name'];
          
        }
        else {
          $Name =$_POST['name'];
          
        }

        if(empty($_POST['email'])) 
        {
          $email = $user['email'];
        }
        else {

          if (strpos($_POST['email'], '@'))
            { 

             if( strpos($_POST['email'], '.') )
               {
                $email = $_POST['email'];
               } else {
                  $emailErr = "Invalid Email format! Check Your Email..";
               }

            } else {
              $emailErr = "@ is Missing..";
            }

            }

        if(empty($_POST['userName'])) {
          $userName =$user['username'];
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
                    } else {
                      $userName = $_POST['userName'];
                    }

                  }
                  
                } else {
                  $userNameErr = "User Name must contain at least two (2) characters";
                }
              }
        
        if(empty($_POST['password'])) {
          $password =$user['password'];
          } else {
          
          if (strlen($_POST['password'])<6)
            {
              $passwordErr = "Password length has to be at least 8 characters";  
            }
            else

            {
              if(strpos( $_POST['password'], '@') or strpos($_POST['password'], '#') or strpos($_POST['password'], '$') or strpos($_POST['password'], '%') )
              { 

                $password = $_POST['password'];
              } else {
                $passwordErr = "Password must contain at least one of the special characters (@, #,$, %)";
              }

            }
                  }

        if (empty($_POST['gender'])) {
               $gender = $user['gender']; 
        } else { 
          $gender = $_POST['gender']; 
        }
        
        if(empty($_POST['dob'])) {
          $dob = $user['dob']; 
        }
        else {
          $dob = $_POST['dob'];
        }

       
          

        } 
            
        
        
?>