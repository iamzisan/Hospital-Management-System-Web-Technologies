<?php
    
    $NameErr =$emailErr = $userNameErr = $mobNumErr = $nidNumErr = $dlicenseErr =  $passwordErr = $conPasswordErr = $genderErr =  $dobErr =  "" ;

      $Name = ""; 
      $email = "";
      $userName= "";
      $mobNum = "";
      $nidNum = "";
      $dlicense = "";
      $password= "";
      $conPassword = "";
      $gender = "";
      $dob = "";
    
    if(isset($_POST["submit"]))
    {

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
        
        if(empty($_POST['dlicense'])) {
          $dlicenseErr = "Please fill up your License number properly";
          }
        else {
          $dlicense = $_POST['dlicense'];
        }

        if(empty($_POST['password'])) {
          $passwordErr = "Please fill up the password properly";
          }

          else {

            if (strlen($_POST['password'])<6)
            {
              $passwordErr = "Password length  has to be at least 8 characters";  
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
        
    }
    else 
    {
        echo "";
    }
?>