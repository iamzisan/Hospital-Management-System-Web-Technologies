<?php
$var;
  require_once '../../Model/Doctor/db_connect2.php';


  



  function patientdetails()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM doctor_reg WHERE username='$var'";
    $product=get($query);
    return $product[0];


  }







  ?>