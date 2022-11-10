<?php
session_start();
  require_once '../../Model/Doctor/db_connect2.php';
 $var=$_SESSION["loggedinuser"];
$query ="Delete from appointmentlist where `status`='none' and username='$var'";
  execute($query);
	header("Location:../../View/Doctor/todayappointment.php");




  ?>
