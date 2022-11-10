<?php

if (isset($_POST['Enter']))
{
    

    if ($_POST['User'] == 'Admin')
    {
        
        $file = fopen('../View/OrgAdmin.txt', 'r')
        or die("unable to open file");

        $ar= array();
        echo 
                        '<br> <br>
                        <table  border="1" width="100%" >  
                          <tr >  
                               <th>Name</th> 
                               <th>Email</th>  
                               <th>User Name</th>  
                               <th>Password</th>  
                               <th>Gender</th>   
                               <th>Date Of Birth</th> 
                               <th> Permission </th>  
                          </tr> ';
           $i=0;
            while(!feof($file))
            {

                
                $data = fgets($file);
                if (trim($data) != "")
                {
                $admin = explode('|', $data);
                
                    if($_POST['userName'] == $admin[2])
                    { 

                        echo '<tr>
                            
                                  <td>'.$admin['0'].'</td>
                                  <td>'.$admin['1'].'</td>
                                  <td>'.$admin['2'].'</td>
                                  <td>'.$admin['3'].'</td>
                                  <td>'.$admin['4'].'</td>
                                  <td>'.$admin['5'].'</td>
                                  <td align= "center">
                                  <input type="submit" name="Remove'.$i.'" value= "Remove" style="width: 90px; height: 30px;">
                                  </td>
                                  </tr>
                                  </table>'; 
                                  
                                  
                            $i++;
                    }

                    else
                        {
                            echo "";
                        }
                        

                }
                    
                        
                }

                fclose($file);


    }
}


if(isset($_POST["Remove0"]))
{


    $arr = array();
    $file = fopen('../View/OrgAdmin.txt', 'r')
        or die("unable to open file");

        while(!feof($file))
            {

                $data = fgets($file);

                if (trim($data) != "")
                {
                $admin = explode('|', $data);
                
                    
                    if($_POST['userName'] != $admin[2]) 
                    {
                       
                        array_push($arr, $admin);
                    }
                    if($_POST['userName'] == $admin[2])
                    {
                       
                        $admin = "";

                        $file1=fopen('../View/OrgAdmin.txt', 'w') ;
                        fwrite($file1,$admin);
                        fclose($file1);

                    }
                }

            }

            fclose($file);
            
            $file2=fopen('../View/OrgAdmin.txt', 'a') ;

            $keys = array_keys($arr);
            for($i = 0; $i <count($keys); $i++) {

                  $arr_keys = array_keys($arr[$keys[$i]]);
                  for($j = 0; $j <count($arr_keys); $j++) {

                      $data = $arr[$keys[$i]] [$arr_keys[$j]]."|".$arr[$keys[$i]] [$arr_keys[$j+1]]."|".
                              $arr[$keys[$i]] [$arr_keys[$j+2]]."|".$arr[$keys[$i]] [$arr_keys[$j+3]]."|".$arr[$keys[$i]] [$arr_keys[$j+4]]
                              ."|".$arr[$keys[$i]] [$arr_keys[$j+5]];

                      fwrite($file2,$data);
                      break;

                  }

                  
              }
            fclose($file2);
            } 



?>