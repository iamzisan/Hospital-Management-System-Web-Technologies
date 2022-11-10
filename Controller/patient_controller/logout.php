
<?php
	
	session_start();
	//session_destroy();
	//stat
	session_start();
	session_destroy();
	setcookie("flag","false", time()-10,"/");
	setcookie("userName","", time()-10,"/");
	setcookie("password","", time()-10,"/");
	//end
	//
	session_unset();

	
	unset($_SESSION['flag']);
	setcookie('cflag', 'true', time()-10,'/');
	header('location: ../../view/patient_view/login.php');
?>