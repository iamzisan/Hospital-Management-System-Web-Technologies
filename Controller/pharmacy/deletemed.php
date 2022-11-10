<?php

  require_once '../../Model/pharmacy/db_connect2.php';
$id="$_GET[id]";


$query ="Delete from medinfo where sl='$id';";


 execute($query);
//echo $query;
	header("Location:../view/stockinfo.php");




  ?>
