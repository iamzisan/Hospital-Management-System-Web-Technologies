<?php
$var;

  require_once '../../Model/Doctor/db_connect2.php';

if(isset($_POST["appointment"]))
  {
    appoint();
  }
  
  
  function appoint()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $drname=$_POST["drname"];
  


  $query="INSERT INTO appointmentlist(username,drname,status) VALUES ('$var','$drname','Active')";

execute($query);
//echo $query;
header("Location:../../View/doctor/MakeAppoinment.php");


}

function getdetailsapointment()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }
//date_default_timezone_set('Asia/Dhaka');
				
    $query="SELECT * FROM appointmentlist WHERE username='$var' AND status='none'  ORDER BY `Emargency` DESC";
    $product=get($query);
    return $product;
//And datetime=date('Y-m-d')

  }


  ?>