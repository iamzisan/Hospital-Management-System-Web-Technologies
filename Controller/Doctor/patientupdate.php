<?php
$var;
  require_once '../../Model/Doctor/db_connect2.php';

if(isset($_POST["Updateprofile"]))
  {
    Profileupdate();
  }
  
  
  function Profileupdate()
  {

      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }



            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $address=$_POST["address"];

            $npassword=$_POST["npass"];
           
    $query="UPDATE patient SET fullname='$name',phone='$phone',address='$address',password='$npassword' WHERE username='$var'";
    execute($query);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../../View/Doctor/DoctorProfile.php");
}
  



  







  ?>