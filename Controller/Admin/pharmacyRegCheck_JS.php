<?php
    
    require_once('../../Model/Admin/DB_config.php');
    $data = $_POST['data'];
    $mydata = json_decode($data);
    

    $userNameErr = $NameErr = $mobErr = $addErr = $pharmacyNoErr = $emailErr = $passwordErr = $conPasswordErr = $genderErr =  $dobErr =  $licenseErr = $nidNoErr="" ;

      $Name = ""; 
      $email = "";
      $mob = "";
      $userName= "";
      $add ="";
      $password = "";
      $conPassword = "";
      $gender = "";
      $dob = ""; 
      $pharmacyNo = "";
      $license = ""; 
      $nidNo= "";

      $checkPassword = $mydata->password;

      
       
      $Name = $mydata->name;

      if (strpos($mydata->email, '@'))
        { 
          if( strpos($mydata->email, '.') )
             {
                $email = $mydata->email;

             }  else{
                  echo "Invalid Email format! Check Your Email..";
                  }

        } else{
            echo "@ is Missing..";
            }

      $mob = $mydata->mob;
      
      $gender = $mydata->gender; 

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
          

      if (strlen($checkPassword)<6)
      {
        echo "Password length has to be at least 8 characters";  
      } else {

        if(strpos( $checkPassword, '@') or strpos($checkPassword, '#') or strpos($checkPassword, '$') or 
            strpos($checkPassword, '%') )
        { 
          $password = $checkPassword;

        } else {
          echo "Password must contain at least one of the special characters (@, #,$, %)";
        }

    }
          
        
    

    
    $conPassword = $mydata->conPassword;
    
    if (!($conPassword == $password)) 
      { 
        echo "Password does not matched"; 
      }

       

    $dob = $mydata->dob;
       
    $nidNo = $mydata->nidNo;

    $pharmacyNo = $mydata->pharmacyNo;
    
    $license = $mydata->license;

    $add= $mydata->add;
        
       
    if($Name != "" && $email != "" && $mob != "" && $gender != "" && $add != "" && $userName != "" && $password != "" && 
        $conPassword != "" && $dob != "" &&  $license != "" && $nidNo != "" && $pharmacyNo != "")
        {
         
         $type = "pharmacy"; 
        
          // Create connection
          $conn = getConnection();
          $sql = "INSERT INTO pharmacy_registration (name, email, phone, gender, address, username, password, confirmpassword, dob, 
                    licenceno, storeno, nidno, type) VALUES 
                    ('$Name', '$email' , '$mob', '$gender','$add','$userName', '$password', '$conPassword', '$dob', '$license', 
                        '$pharmacyNo', '$nidNo', '$type')";

          $status = mysqli_query($conn, $sql);

          if($status)
          {
            
            $sql2 = "INSERT INTO login (username, password, type) VALUES ('$userName', '$password', '$type')"; 
            $result = mysqli_query($conn, $sql2);
            echo "Successfully Added";
          }
          
        }



?>