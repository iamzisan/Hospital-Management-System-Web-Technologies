
<?php
      session_start();
	 include('../../Controller/Doctor/userval.php');
if (!isLoggedIn()) {

  header('location: ../../controller/patient_controller/logout.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doctor Panel</title>
    <link rel="stylesheet" href="PatientPanel.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
 
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Doctor ~ <?php echo $_SESSION["loggedinuser"];?></header>
  <ul>
  <li><a href="DoctorPanel.php"><i class="fas fa-tachometer-alt"></i>DASHBOARD</a></li>
    <li><a href="DoctorProfile.php"><i class="fas fa-qrcode"></i>My Profile</a></li>
    <li><a href="todayappointment.php"><i class="fas fa-link"></i>Todays Appointment</a></li>
    <li><a href="approvedlist.php"><i class="fas fa-stream"></i>Approve List</a></li>

    <li><a href="history.php"><i class="fas fa-calendar-week"></i>History</a></li>
    <li><a href="earnings.php"><i class="far fa-question-circle"></i>Earnings</a></li>
	  
   
    
	<li><a href="../../Controller/Doctor/logout.php"><i class="far fa-envelope"></i>Logout</a></li>
</ul>
</div>