<?php

if(isset($_POST["Accept0"]))

    {

       
            $Name = $do[0][0]; 
            $email = $do[0][1];
            $userName = $do[0][2];
            $mob = $do[0][3];
            $nid = $do[0][4];
            $licenses= $do[0][5];
            $password = $do[0][6];
            $gender = $do[0][7];
            $dob = $do[0][8];  

        if($Name != "" && $email != "" && $userName != "" && $mob != ""&& $nid != ""&& $licenses!= ""&& $password != "" && $gender != "" && $dob != "" )
          {
            $Doctor = $Name."|".$email."|".$userName."|".$mob."|".$nid."|".$licenses."|".$password."|".$gender."|".$dob;

            $file1 = fopen("../View/OrgDoctor.txt", "a");
            fwrite($file1, $Doctor);
            fclose($file1);
            $msg= "Sucessful!";
          } 

        $file = fopen('../View/DocReg.txt', 'r')
        or die("unable to open file");

        $ar= array();

        while(!feof($file))
            {

                
            $data = fgets($file);
            if (trim($data) != "")
            {
            $doctor = explode('|', $data);

                if( $email != $doctor[1] && $userName != $doctor[2])
                { 
                  
                  array_push($ar, $doctor);      
                        
                }

                else
                    {
                      $ad="";

                        $file1=fopen('../View/DocReg.txt', 'w') ;
                        $data= $ad;
                        fwrite($file1,$data);
                        fclose($file1);
                    }
                    

                }
                
                    
            }

            fclose($file);
            
            $file2=fopen('../View/DocReg.txt', 'a') ;

            $keys = array_keys($ar);
            for($i = 0; $i <count($keys); $i++) {

                  $arr_keys = array_keys($ar[$keys[$i]]);
                  for($j = 0; $j <count($arr_keys); $j++) {
                      $data=$ar[$keys[$i]] [$arr_keys[$j]]."|".$ar[$keys[$i]] [$arr_keys[$j+1]]."|".
                      $ar[$keys[$i]] [$arr_keys[$j+2]]."|".$ar[$keys[$i]] [$arr_keys[$j+3]]."|".$ar[$keys[$i]] [$arr_keys[$j+4]]."|".
                      $ar[$keys[$i]] [$arr_keys[$j+5]]."|".$ar[$keys[$i]] [$arr_keys[$j+6]]."|".$ar[$keys[$i]] [$arr_keys[$j+7]]."|".
                      $ar[$keys[$i]] [$arr_keys[$j+8]];
                      fwrite($file2,$data);
                      break;

                  }

                  
              }
            fclose($file2);
            
  }


  if(isset($_POST["Reject0"]))

    {

       
            $Name = $do[0][0]; 
            $email = $do[0][1];
            $userName = $do[0][2];
            $mob = $do[0][3];
            $nid = $do[0][4];
            $licenses= $do[0][5];
            $password = $do[0][6];
            $gender = $do[0][7];
            $dob = $do[0][8];  

        $file = fopen('../View/DocReg.txt', 'r')
        or die("unable to open file");

        $ar= array();

        while(!feof($file))
            {

                
            $data = fgets($file);
            if (trim($data) != "")
            {
            $doctor = explode('|', $data);

                if( $email != $doctor[1] && $userName != $doctor[2])
                { 
                  
                  array_push($ar, $doctor);      
                        
                }

                else
                    {
                      $ad="";

                        $file1=fopen('../View/DocReg.txt', 'w') ;
                        $data= $ad;
                        fwrite($file1,$data);
                        fclose($file1);
                    }
                    

                }
                
                    
            }

            fclose($file);
            
            $file2=fopen('../View/DocReg.txt', 'a') ;

            $keys = array_keys($ar);
            for($i = 0; $i <count($keys); $i++) {

                  $arr_keys = array_keys($ar[$keys[$i]]);
                  for($j = 0; $j <count($arr_keys); $j++) {
                      $data=$ar[$keys[$i]] [$arr_keys[$j]]."|".$ar[$keys[$i]] [$arr_keys[$j+1]]."|".
                      $ar[$keys[$i]] [$arr_keys[$j+2]]."|".$ar[$keys[$i]] [$arr_keys[$j+3]]."|".$ar[$keys[$i]] [$arr_keys[$j+4]]."|".
                      $ar[$keys[$i]] [$arr_keys[$j+5]]."|".$ar[$keys[$i]] [$arr_keys[$j+6]]."|".$ar[$keys[$i]] [$arr_keys[$j+7]]."|".
                      $ar[$keys[$i]] [$arr_keys[$j+8]];
                      fwrite($file2,$data);
                      break;

                  }

                  
              }
            fclose($file2);
            
  }


?>