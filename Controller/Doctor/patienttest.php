<?php
$var;
  require_once '../../Model/Doctor/db_connect2.php';


function approvelist()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM appointmentlist WHERE username='$var' and status='approved'";
    $product=get($query);
    return $product;


  }


  ?>