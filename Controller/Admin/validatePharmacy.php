<?php 
    require_once('../../Model/Admin/usersModel.php');
    require_once('../../Model/Admin/DB_config.php');

	$id = $_GET['id'];
    
	
    $conn = getConnection();
    $sql = "SELECT * FROM pharmacy_request WHERE sl='{$id}'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    $Id = $user['sl'];

    $Name = $user['name']; 
    $email = $user['email'];
    $mob = $user['phone'];
    $gender = $user['gender'];  
    $add = $user['address'];  
    $userName = $user['username'];
    $password = $user['password'];
    $conPassword = $user['confirmpassword'];
    $dob = $user['dob'];
    $license = $user['licenceno'];
    $pharmacyNo = $user['storeno'];
    $nidNum = $user['nidno']; 
    $type ="pharmacy";

    $conn = getConnection();
          $sql = "INSERT INTO pharmacy_registration (name, email, phone, gender, address, username, password, confirmpassword, dob, licenceno, storeno, nidno, type) VALUES 
                    ('$Name', '$email' , '$mob', '$gender','$add','$userName', '$password', '$conPassword', '$dob', 
                    '$license', '$pharmacyNo', '$nidNo', '$type')";
    $status = mysqli_query($conn, $sql);

    if ($status)
    {   
        
        $conn = getConnection();
        $sql = "DELETE FROM pharmacy_request WHERE sl='{$Id}'";
        $result = mysqli_query($conn, $sql);
        login($userName,$password,$type);
        header('location: ../../View/Admin/Dashboard.php');
    }
?>