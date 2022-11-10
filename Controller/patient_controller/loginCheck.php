<?php
	session_start();
	require_once('../../model/patient_model/usersModel.php');

	
	
	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		
		
		if($username != '' && $password != ''){
			$status=validate($username, $password);

			if(isset($_POST["Remember"])) 
                    {
                        setcookie ("userName",$_POST["username"],time()+ 3600,"/");
                        setcookie ("password",$_POST["password"],time()+ 3600,"/");
                    }
			
			if($status==1){
				$id= getUserId($username, $password);
				
				$_SESSION['flag']='true';
				setcookie('cflag','true',time()+10000,'/');
				header('location: ../../view/patient_view/home.php?id='.$id);
				
			}
			else if($status==2){
				//echo "admin interface";
				$_SESSION['userName'] = $username;
                $_SESSION['password'] = $password;
              
                setcookie("flag", "true", time()+1800, "/");
				header("location: ../../view/Admin/dashboard.php");
				//end
				
			}
			else if($status==3){
				//echo "Doctor interface";
				 $_SESSION["loggedinuser"]=$username;
				header("Location:../../view/Doctor/DoctorPanel.php");
			}
			else if($status==4){
				//echo "pharmacy interface";
				//$row=mysqli_fetch_assoc($result);
				$_SESSION["loggedinuser"]=$username;
				
				header("Location:../../view/pharmacy/pharmecypanel.php");
			}
			else{
				header('location: ../../view/patient_view/login.php?msg=wrong');
			}
		}
			else{
				header('location: ../../view/patient_view/login.php?msg=null');
				}
		}
	else{
		echo "invalid request...";
	}

?>