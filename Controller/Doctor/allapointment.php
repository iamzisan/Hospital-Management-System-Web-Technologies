<?php
$var;
  require_once '../../Model/Doctor/db_connect2.php';


function getallapointment()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM appointmentlist WHERE username='$var' order by sl DESC";
    $product=get($query);
    return $product;


  }


  ?>