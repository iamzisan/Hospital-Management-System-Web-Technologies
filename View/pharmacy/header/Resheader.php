
<?php
      session_start();
	  include('../../Controller/pharmacy/userval.php');

    setcookie("Rifat", "rifat", time() + 3600, '/');
if (!isLoggedIn()) {

  header('location: ../../controller/patient_controller/logout.php');
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pharmacy Profile</title>
    <link rel="stylesheet" type="text/css" href="Receptionist.css" />
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
	  href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
      rel="stylesheet"
	  
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
	 
    />
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="bgimage">
      <div class="menu">
        <div class="leftmenu">
          <h3><a href="pharmecypanel.php">Pharmecy: <?php echo $_SESSION["loggedinuser"];?></a></h3>
        </div>
        <div class="rightmenu">
          <ul>
            
             <li><a href="addmedicine.php">Add Medicine</a></li>
            <li><a href="orderinfo.php">Order Info</a></li>
            <li><a href="stockinfo.php">Stock Info</a></li>
            <li><a href="AllDocTime.php">Doctor & Time</a></li>
			
           
			<li><a href="pharmecyProfile.php">My Profile</a></li>
			<li><a href="../../controller/patient_controller/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>