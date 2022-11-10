<?php
session_start();
  require_once '../../Model/Doctor/db_connect2.php';
 $var=$_SESSION["loggedinuser"];
$query ="UPDATE `appointmentlist` SET `status`='approved' WHERE sl='$_GET[id]'";
  execute($query);
	header("Location:../../View/Doctor/todayappointment.php");




  ?>
