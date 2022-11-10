<?php
include('header/patheader.php');
//require "../Models/db_connect.php";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical_service";
$var=$_SESSION["loggedinuser"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if($query="SELECT count(sl) AS total FROM medicine WHERE dname='$var'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

$salary=$Ao*500;


}

?>



<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
  padding-top: 153px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>

<section>

<center><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../../storage/tk.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
<div class="flip-card-back">
      <p style="padding-top:104px;">Earnings</p> <br>
	  <h1><?php echo $salary ; ?> TK</h1> 
      
      
    </div>
  </div>
</div>

 
</section>
  </body>
</html>
