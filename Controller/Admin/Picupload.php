<?php
 

 if (isset($_POST['Upload']))
 	{
 		

 		$filename = $_FILES['picture']['name'];
 		$filesize = $_FILES['picture'] ['size'];
 		$filetemp = $_FILES['picture']['tmp_name'];
 		$fileerror = $_FILES['picture']['error'];

 		$fileExt = explode('.', $filename);
        $location = '../Pictures/'.time().".".$fileExt[1];

        if ($filesize < 25000000)
                {   
                    
                    if (move_uploaded_file($filetemp, $location))
                        {
                            $msg = "Upload successfully!";
                            
                        }
                    else
                        {
                            $msgErr= "Unsuccessful! ";
                        }    
                    
                }
 				
 				else 
 				{
 					$msgErr="The size of the image you upload must be less than 25 megabytes..";
                    echo $msg;
 				}


 			}

 		
 		
 		


?>