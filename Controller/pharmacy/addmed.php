<?php
$var;
  require_once '../../Model/pharmacy/db_connect2.php';

if(isset($_POST["addmed"]))
  {
    addmed();
  }


  function addmed()
{

  $name=$_POST["pname"];
  $power=$_POST["ophone"];
  $price=$_POST["pnid"];
  $companyname=$_POST["oaddress"];
  $quantity=$_POST["roono"];
 




  $query="INSERT INTO `medinfo`(`medname`, `company`, `power`, `unitprice`, `stock`) VALUES ('$name','$companyname','$power','$price','$quantity')";
//echo $query;
execute($query);
 header("Location:../View/addmedicine.php");


}
function getmed()
 {


  

   $query="SELECT * FROM medinfo";
   $product=get($query);
   return $product;


 }
function drapp()
 {


  

   $query="SELECT * FROM drapp";
   $product=get($query);
   return $product;


 }


  ?>
