<?php
	require_once('DB_config.php');
	
	function validate($userName, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM login WHERE username='{$userName}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		
		if(mysqli_num_rows($result) > 0 ){
			return $user;
		}else{
			return false;
		}
	}

	function getUserById($user,$userName, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM ".$user." WHERE username ='{$userName}' AND password = '{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user['id'];
	}

	function getLoginId($userName, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM login WHERE username ='{$userName}' AND password = '{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user['id'];
	}

	function getUser($user, $id){

		$conn = getConnection();
		$sql = "SELECT * FROM ".$user." WHERE id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result); 
		return $user;
	}

	function getAllUser($user){
		
		$conn = getConnection();
		$sql = "SELECT * FROM ".$user;
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			
			array_push($users, $user);

		}

		return $users;
	}

	function getAllUserNumber($user){
		$i=0;
		$conn = getConnection();
		$sql = "SELECT * FROM ".$user;
		$result = mysqli_query($conn, $sql);

		while($user = mysqli_fetch_assoc($result)){
			
			$i++;
		}

		return $i;
	}


	function deleteUserById($user, $id){

		$conn = getConnection();
		$sql = "DELETE FROM ".$user." WHERE id ='{$id}'";
		$result = mysqli_query($conn, $sql);
		return $result;
	}


	function updateAdmin($id, $Name, $email , $userName, $password, $gender, $dob){
		$conn = getConnection();
		
		$sql = "UPDATE admin_reg SET name = '{$Name}', email = '{$email}', username = '{$userName}', 
				password = '{$password}', gender='{$gender}', dob= '{$dob}'
				WHERE id = {$id}";
		$result = mysqli_query($conn, $sql);

	}

	function updateLogin($id, $userName, $password){
		$conn = getConnection();
		$sql = "UPDATE login SET username = '{$userName}', password = '{$password}'
				WHERE id = {$id}";
		$result = mysqli_query($conn, $sql);

	}

	function insertAdmin($Name, $email , $userName, $password, $conPassword, $gender, $dob, $type){
		$conn = getConnection();
		$sql = "INSERT INTO admin_reg (name, email, username, password, confirmpassword, gender, dob, type) VALUES ('$Name', 
		'$email' , '$userName', '$password', '$conPassword', '$gender', '$dob', '$type')";
		$result = mysqli_query($conn, $sql);
		
	}

	function insertDoc($Name, $email , $userName, $mobNum, $nidNum, $dlicense, $password, $conPassword, $gender, $dob, $type){
		$conn = getConnection();
		
		$sql = "INSERT INTO 
				doctor_reg (name, email, username, mobnum, nidnum, license, password, confirmpassword, gender, dob,type) 
				VALUES ('$Name', '$email' , '$userName', '$mobNum', '$nidNum', '$dlicense','$password', '$conPassword' ,
				'$gender', '$dob', '$type')";
		$result = mysqli_query($conn, $sql);
		
	}

	function login($userName, $password, $type)
	{
		$conn = getConnection();
		$sql = "INSERT INTO login (username, password, type) VALUES ('$userName', '$password' , '$type')";
		$result = mysqli_query($conn, $sql);
	}


?>