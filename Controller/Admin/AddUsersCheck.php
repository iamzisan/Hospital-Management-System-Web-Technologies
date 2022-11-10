<?php

	if(isset($_POST['Admin'])){
        
        header("location: ../../View/Admin/ManualAdminAdd.php");
      	
	}
    elseif(isset($_POST['Doctor'])){
        
        header("location: ../View/ManualDoctorAdd.php");
        
    }
    
    elseif(isset($_POST['Pharmacy'])){
        
        header("location: ../View/ManualPharmaAdd.php");
        
    }
    
    else{
		echo "Invalid request...";
	}

?>