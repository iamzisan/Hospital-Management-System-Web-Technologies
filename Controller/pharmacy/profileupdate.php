<?php
$var;
  require_once '../../Model/pharmacy/db_connect2.php';

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
           
    $query="UPDATE pharmacy_registration SET name='$name',phone='$phone',address='$address',password='$npassword' WHERE username='$var'";
    execute($query);

    $query2 = "UPDATE login SET password='$npassword' WHERE username='$var'";
    execute($query2);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../../View/pharmacy/pharmecyProfile.php");
}
  



  







  ?>