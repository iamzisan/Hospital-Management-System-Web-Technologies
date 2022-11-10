<?php 
    require_once('../../Model/Admin/usersModel.php');

    $id = $_GET['id'];
    $user = 'doctor_req';
    
    $user = getUser($user,$id);
    $Id = $user['id'];
    $status = deleteUserById("doctor_req",$Id);

    if($status){
        header('location: ../../View/Admin/Dashboard.php');
    }
    
?>