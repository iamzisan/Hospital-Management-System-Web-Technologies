<?php
session_start();
  require_once '../../Model/Doctor/db_connect2.php';
 $var=$_SESSION["loggedinuser"];
$query ="UPDATE `appointmentlist` SET `status`='approved' WHERE `status`='none' and username='$var'";
  execute($query);
 // echo $query;
	header("Location:../../View/Doctor/todayappointment.php");




  ?>
