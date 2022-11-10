<?php
$var;
  require_once '../../Model/pharmacy/db_connect2.php';

if(isset($_POST["update"]))
  {
    update();
  }

function update(){
	
	    
  $sl=$_POST["id"];
    
  $name=$_POST["pname"];
  $power=$_POST["ophone"];
  $price=$_POST["pnid"];
  $companyname=$_POST["oaddress"];
  $quantity=$_POST["roono"];
	  
     $sql1="UPDATE `medinfo` SET `medname`='$name',`company`='$companyname',`power`='$power',`unitprice`='$price',`stock`='$quantity' WHERE `sl`='$sl'";
	
	execute($sql1);
	header("Location:../../View/pharmacy/stockinfo.php");
	
	
}



  ?>
