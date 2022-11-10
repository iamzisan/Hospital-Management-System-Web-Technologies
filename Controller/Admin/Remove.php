<?php
	require_once('../../Model/Admin/usersModel.php');

	$id = $_GET['id'];
	$user = $_GET['user'];
    $type = $_GET['type'];



    $user0 = getUser($user,$id);
    print_r($user0);
    $userName = $user0['username'];
    $password = $user0['password'];

    
    $status = deleteUserById($user,$id);


    if($status){
        echo $id.$user.$type;
        echo $userName.$password;
        

        $id = getLoginId($userName, $password);
        $user = 'login';
        print($id);
        deleteUserById($user,$id);
        header('location: ../../View/admin/RemoveUsers.php');
    }

    

    
?>