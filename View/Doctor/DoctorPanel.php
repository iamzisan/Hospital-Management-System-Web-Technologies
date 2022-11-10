<?php
include('header/patheader.php');




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical_service";

$var=$_SESSION["loggedinuser"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(sl) AS total FROM appointmentlist WHERE username='$var' And status='none'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='no';}
  else {
    $Ao=$values["total"];
  }

}


if($query="SELECT count(sl) AS total FROM appointmentlist WHERE username='$var' And status='approved'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ta=$values["total"];
  if($Ta==0)
  {$Ta='no';}
  else {
    $Ta=$values["total"];
  }

}


?>

<style>


.main-section {
	width: 66%;
    margin: 0 auto;
    text-align: center;
    padding: 236px 5px;
}
.dashbord {
  width: 42%;
  display: inline-block;
  background-color: #34495e;
  color: #fff;
  margin-top: 50px;
}
.icon-section i {
  font-size: 30px;
  padding: 10px;
  border: 1px solid #fff;
  border-radius: 50%;
  margin-top: -25px;
  margin-bottom: 10px;
  background-color: #34495e;
}
.icon-section p {
  margin: 0px;
  font-size: 20px;
  padding-bottom: 10px;
}
.detail-section {
  background-color: #2f4254;
  padding: 5px 0px;
}
.dashbord .detail-section:hover {
  background-color: #5a5a5a;
  cursor: pointer;
}
.detail-section a {
  color: #fff;
  text-decoration: none;
}
.dashbord-green .icon-section,
.dashbord-green .icon-section i {
  background-color: #16a085;
}
.dashbord-green .detail-section {
  background-color: #149077;
}
.dashbord-orange .icon-section,
.dashbord-orange .icon-section i {
  background-color: #f39c12;
}
.dashbord-orange .detail-section {
  background-color: #da8c10;
}
.dashbord-blue .icon-section,
.dashbord-blue .icon-section i {
  background-color: #2980b9;
}
.dashbord-blue .detail-section {
  background-color: #2573a6;
}
.dashbord-red .icon-section,
.dashbord-red .icon-section i {
  background-color: #e74c3c;
}
.dashbord-red .detail-section {
  background-color: #cf4436;
}
.dashbord-skyblue .icon-section,
.dashbord-skyblue .icon-section i {
  background-color: #8e44ad;
}
.dashbord-skyblue .detail-section {
  background-color: #803d9b;
}













</style>


<section>

<div class="main-section">
          <div class="dashbord dashbord-red">
            <div class="icon-section">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <small>Apointment Request</small>
              <p>You Have <?php echo $Ao ; ?> Apointment Request</p>
            </div>
            <div class="detail-section">
              <a href="todayappointment.php">View All </a>
            </div>
          </div>
          <div class="dashbord dashbord-green">
            <div class="icon-section">
              <i class="fa fa-users" aria-hidden="true"></i><br>
              <small>Patients</small>
              <p>You have <?php echo $Ta ; ?> Patients to serve</p>
            </div>
            <div class="detail-section">
              <a href="approvedlist.php">View All </a>
            </div>
          </div>
          
         
          </div>












</section>
  </body>
</html>
