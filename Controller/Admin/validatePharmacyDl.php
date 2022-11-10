<?php 
    require_once('../../Model/Admin/usersModel.php');

    $sl = $_GET['id'];
    
    $conn = getConnection();
    $sql = "SELECT * FROM pharmacy_request WHERE sl='{$sl}'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    $sl = $user['sl']; 

    $conn = getConnection();
    $sql = "DELETE FROM pharmacy_request WHERE sl='{$sl}'";
    $result = mysqli_query($conn, $sql);
    

    if($result){
        header('location: ../../View/Admin/Dashboard.php');
    }
    
?>