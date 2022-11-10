<?php 
    require_once('../../Model/Admin/usersModel.php');

	$id = $_GET['id'];
    $user = 'doctor_req';
	$user = getUser($user,$id);

    $Id = $user['id'];
    
    $Name = $user['name']; 
    $email = $user['email'];  
    $userName = $user['username'];
    $mobNum = $user['mobilenumber']; 
    $nidNum = $user['nidnum']; 
    $dlicense = $user['license']; 
    $password = $user['password'];
    $conPassword = $user['confirmpassword'];
    $gender = $user['gender'];
    $dob = $user['dob'];
    $type ="doctor";

    $status = insertDoc($Name, $email , $userName, $mobNum, $nidNum, $dlicense, $password, $conPassword, $gender, $dob, $type);

    if ($status)
    {   
        $user = 'doctor_req';
        deleteUserById($user,$Id);
        login($userName,$password,$type);
        header('location: ../../View/Admin/Dashboard.php');
    }
?>