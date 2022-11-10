<?php

	if(isset($_POST['Admin'])){
        
        header("location: ../../View/Admin/AdminReg.php");
      	
	}
    elseif(isset($_POST['Doctor'])){
        
        header("location: ../../View/Admin/DoctorReg.php");
        
    }
    
    elseif(isset($_POST['Patient'])){
        
        header("location: ../../View/Admin/PatientReg.php");
        
    }
    
    elseif(isset($_POST['Pharmacy'])){
        
        header("location: ../../View/Admin/PharmaReg.php");
        
    }
    
    else{
		echo "Invalid request...";
	}

?>