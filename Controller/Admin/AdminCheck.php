<?php

if(isset($_POST["Accept0"]))

    {

            $Name = $ad[0][0]; 
            $email = $ad[0][1];
            $userName = $ad[0][2];
            $password = $ad[0][3];
            $gender = $ad[0][4];
            $dob = $ad[0][5];  

        if($Name != "" && $email != "" && $userName != "" && $password != "" && $gender != "" && $dob != "" )
          {
            $Admin = $Name."|".$email."|".$userName."|".$password."|".$gender."|".$dob;

            $file1 = fopen("../View/OrgAdmin.txt", "a");
            fwrite($file1, $Admin);
            fclose($file1);
            $msg= "Sucessful!";

        $file = fopen('../View/AdminReg.txt', 'r')
        or die("unable to open file");

        $arr= array();

        while(!feof($file))
            {

                
            $data = fgets($file);
            if (trim($data) != "")
            {
            $admin = explode('|', $data);


                if(  $admin[1]!= $email  && $admin[2] != $userName)
                { 
                  array_push($arr, $admin); 

                        
                }

                if( $email == $admin[1] && $userName == $admin[2])
                    {
                      $ad = "";

                        $file1=fopen('../View/AdminReg.txt', 'w') ;
                        fwrite($file1,$ad);
                        fclose($file1);
                    }
                    

                }
                
                    
            }
            fclose($file);
            
            $file2=fopen('../View/AdminReg.txt', 'a') ;

            $keys = array_keys($arr);
            for($i = 0; $i <count($keys); $i++) {

                  $arr_keys = array_keys($arr[$keys[$i]]);
                  for($j = 0; $j <count($arr_keys); $j++) {
                      $data=$arr[$keys[$i]] [$arr_keys[$j]]."|".$arr[$keys[$i]] [$arr_keys[$j+1]]."|".
                      $arr[$keys[$i]] [$arr_keys[$j+2]]."|".$arr[$keys[$i]] [$arr_keys[$j+3]]."|".$arr[$keys[$i]] [$arr_keys[$j+4]]."|".$arr[$keys[$i]] [$arr_keys[$j+5]];
                      fwrite($file2,$data);
                      break;

                  }

                  
              }
            fclose($file2); 
            }

        
            
        }



if(isset($_POST["Reject0"]))

    {

            $Name = $ad[0][0]; 
            $email = $ad[0][1];
            $userName = $ad[0][2];
            $password = $ad[0][3];
            $gender = $ad[0][4];
            $dob = $ad[0][5];  

        if($Name != "" && $email != "" && $userName != "" && $password != "" && $gender != "" && $dob != "" )
        {

        $file = fopen('../View/AdminReg.txt', 'r')
        or die("unable to open file");

        $arr= array();

        while(!feof($file))
            {

                
            $data = fgets($file);
            if (trim($data) != "")
            {
            $admin = explode('|', $data);


                if(  $admin[1]!= $email  && $admin[2] != $userName)
                { 
                  array_push($arr, $admin);    
                }

                if( $email == $admin[1] && $userName == $admin[2])
                    {
                      $ad = "";

                        $file1=fopen('../View/AdminReg.txt', 'w') ;
                        fwrite($file1,$ad);
                        fclose($file1);
                    }
                    

            }
                
                    
            }
            fclose($file);
            
            $file2=fopen('../View/AdminReg.txt', 'a') ;

            $keys = array_keys($arr);
            for($i = 0; $i <count($keys); $i++) {

                  $arr_keys = array_keys($arr[$keys[$i]]);
                  for($j = 0; $j <count($arr_keys); $j++) {
                      $data=$arr[$keys[$i]] [$arr_keys[$j]]."|".$arr[$keys[$i]] [$arr_keys[$j+1]]."|".
                      $arr[$keys[$i]] [$arr_keys[$j+2]]."|".$arr[$keys[$i]] [$arr_keys[$j+3]]."|".$arr[$keys[$i]] [$arr_keys[$j+4]]."|".
                      $arr[$keys[$i]] [$arr_keys[$j+5]];
                      fwrite($file2,$data);
                      break;

                  }

                  
              }
            fclose($file2); 
            }

        
            
        }

else 
{
    echo "";
}  

?>