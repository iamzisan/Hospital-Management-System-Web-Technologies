<?php
    session_start();
    require('../../Model/Admin/usersModel.php');
    
    $data = $_POST['data'];
    $mydata = json_decode($data);

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

	
        
          $Name = $mydata->name;

       

          if (strpos($mydata->email, '@'))
            { 

             if( strpos($mydata->email, '.') )
               {
                $email = $mydata->email;
               } else {

                  echo "Invalid Email format! Check Your Email..";

               }

            } else {

               echo "@ is Missing..";
            }

            

       

           if (strlen($mydata->userName)>1)
            {
              $s_char = array("^" ,"£", "$", "%" , "&", "*" ,"(", "}" , "{" ,"@" ,"#", "~" ,"?" ,">", "<", ">" ,"," ,"|", "=" ,"+" ,"¬", "-", "[" ,"]" , "!" ) ;

              for ($i=0; $i<sizeof($s_char); $i++)
              {

                if (strpbrk($mydata->userName, $s_char[$i]))
                {
                  echo "User Name can contain alpha numeric characters, period, dash or underscore only";
                  break;
                }else {
                  $userName = $mydata->userName;
                }

              } 

            } else{
              echo "User Name must contain at least two (2) characters";
            }
        
        
          
          if (strlen($mydata->password)<6)
            {
              echo "Password length has to be at least 8 characters";  
            }
            else

            {
              if(strpos( $mydata->password, '@') or strpos($mydata->password, '#') or strpos($mydata->password, '$') or strpos($mydata->password, '%') )
              { 

                $password = $mydata->password;
              } else {
               echo "Password must contain at least one of the special characters (@, #,$, %)";
              }

            }
                  

       
          $gender = $mydata->gender; 
    
        
        
          $dob = $mydata->dob;
  

       if($Name != "" && $email != "" && $userName != "" && $password != "" && $gender != "" && $dob != "" )
        {

          updateAdmin($id, $Name, $email, $userName, $password, $gender, $dob);
          $status = updateLogin($loginId, $userName, $password);
          
          $_SESSION['userName'] = $userName;
          $_SESSION['password'] = $password;
          
          echo "Successfully Updated!";
          

        }
        
    

            
        
        
?>