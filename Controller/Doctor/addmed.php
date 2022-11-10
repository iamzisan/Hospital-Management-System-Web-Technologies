<?php
$var;
  require_once '../../Model/Doctor/db_connect2.php';

if(isset($_POST["addmed"]))
  {
    insertmed();
  }
  
  
  function insertmed()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }
  $id=$_POST["id"];
  $medicine=$_POST["rno"];
  $test=$_POST["msg"];
   $patientname=$_POST["pname"];
  $phone=$_POST["phone"];


  $query="INSERT INTO `medicine`(`sl`, `dname`, `pname`, `phone`, `medicine`, `tests`) VALUES ('$id','$var','$patientname','$phone','$medicine','$test')";
$query2="UPDATE `appointmentlist` SET `status`='medicined'where `username`='$var' and sl='$id'";
execute($query);
execute($query2);
 header("Location:../../View/Doctor/approvedlist.php");


}




  ?>