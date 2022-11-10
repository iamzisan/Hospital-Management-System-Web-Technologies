<?php
    
    require_once('../../Model/Admin/usersModel.php');
    $NameErr =$emailErr = $userNameErr = $passwordErr = $conPasswordErr = $genderErr =  $dobErr =  "" ;

      $Name = ""; 
      $email = "";
      $userName= "";
      $password= "";
      $conPassword = "";
      $gender = "";
      $dob = "";

      $data = $_POST['data'];
      $mydata = json_decode($data);
    
       
      $Name = $mydata->name;

      if (strpos($mydata->email, '@'))
        { 
          if(strpos($mydata->email, '.') )
             {
                $email = $mydata->email;

             }  else{
                  echo "Invalid Email format! Check Your Email..";
                  }

        } else{
            echo "@ is Missing..";
            }
      

     
                  
      if (strlen($mydata->userName)>1)
      {
        $s_char = array("^" ,"£", "$", "%" , "&", "*" ,"(", "}" , "{" ,"@" ,"#", "~" ,"?" ,">", "<", ">" ,"," ,"|", "=" ,"+" ,"¬", "-", "[" ,"]" , "!" ) ;

        for ($i=0; $i<sizeof($s_char); $i++)
        {

          if (strpbrk($mydata->userName, $s_char[$i]))
          {
            $userNameErr = "User Name can contain alpha numeric characters, period, dash or underscore only";
            break;
          }else {
            $userName = $mydata->userName;
          }

        } 

      } else{
        $userNameErr = "User Name must contain at least two (2) characters";
      }
          

      if (strlen($mydata->password)<6)
      {
        echo "Password length has to be at least 8 characters";  
      } else {

        if(strpos( $mydata->password, '@') or strpos($mydata->password, '#') or strpos($mydata->password, '$') or strpos($mydata->password, '%') )
        { 
          $password = $mydata->password;

        } else {
          echo "Password must contain at least one of the special characters (@, #,$, %)";
        }

    }
          
        


    
    $conPassword = $mydata->conPassword;
    
    if (!($conPassword == $password)) 
      { 
        echo "Password does not matched"; 
      }


        
    $gender = $mydata->gender; 

        
    if(empty($mydata->dob)) {
          echo "Please fill up the date of birth properly";
        } else {
          $dob = $mydata->dob;
        }

       
    if($Name != "" && $email != "" && $userName != "" && $password != "" && $conPassword != "" && $gender != "" && $dob != "" )
        {
          $type= 'admin';
          insertAdmin($Name, $email, $userName, $password, $conPassword, $gender, $dob , $type);
          login($userName, $password, $type);

          echo "Successfully Added";
          
        }



?>