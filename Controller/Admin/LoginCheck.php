<?php
    session_start();
    require_once('../../Model/Admin/usersModel.php');
    $userNameErr= $passwordErr="";
   
    $userName="";
    $password="";
    $flag=0;
    $msg="";


	if(isset($_POST['Login']))
    {
        
        if(empty($_POST['userName'])) 
        {
          $userNameErr = "Please fill up user name properly";
        }
        else 
        {
          $userName = $_POST['userName'];
        }

        if(empty($_POST['password'])) 
        {
          $passwordErr = "Please fill up password properly";
        }
        else 
        {
          $password = $_POST['password'];
        }
        
        if($userName != "" && $password != "")
        {
           $user=validate($userName, $password);

            if ($user)
            {
                $_SESSION['userName'] = $userName;
                $_SESSION['password'] = $password;

                if(isset($_POST["Remember"])) 
                    {
                        setcookie ("userName",$_POST["userName"],time()+ 3600,"/");
                        setcookie ("password",$_POST["password"],time()+ 3600,"/");
                    }
                setcookie("flag", "true", time()+1800, "/");
                
                if($user['type']=='patient'){
                    header('location: ../../View/Admin/dashboard.php');
                }
                else if($user['type']=='admin')
                {
                    header('location: ../../View/Admin/dashboard.php');
                }
                else if($user['type']=='doctor')
                {
                    header('location: ../../View/Admin/dashboard.php');
                }
                else if($user['type']=='pharmacy')
                {
                    header('location: ../../View/Admin/dashboard.php');
                }
                
            } else {
                $msg = "Invalid Username/Password.";
            }

        }


	}

   

    else{
		echo "";
	}

?>