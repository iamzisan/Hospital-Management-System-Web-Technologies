<?php
include('header/patheader.php');
require_once ('../../Controller/doctor/patientinfo.php');
$data=patientdetails();
?>

<section><link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">

body{

    background:url(../../Image/Hospital.jpg);

}
.container {

    margin-left: 321px;
}
.panel {
  box-shadow: none;
}
.panel-heading {
  border-bottom: 0;
}
.panel-title {
  font-size: 17px;
}
.panel-title > small {
  font-size: .75em;
  color: #999999;
}
.panel-body *:first-child {
  margin-top: 0;
}
.panel-footer {
  border-top: 0;
}

.panel-default > .panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
}

form label {
    color: #999999;
    font-weight: 400;
}

.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}

.profile__contact-info-icon {
    float: left;
    font-size: 18px;
    color: #999999;
}
.profile__contact-info-body {
    overflow: hidden;
    padding-left: 20px;
    color: #999999;
}
.profile-avatar {
  width: 200px;
  position: relative;
  margin: 0px auto;
  margin-top: 196px;
  border: 4px solid #f3f3f3;
}
    </style>
</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-xs-12 col-sm-9">
    <form class="form-horizontal" method="post" action="../../Controller/Doctor/patientupdate.php" onsubmit="return validation()" enctype="multipart/form-data" >
        <div class="panel panel-default">
          <div class="panel-body text-center">
           <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-circle profile-avatar" alt="User avatar">
          </div>
        </div>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">User info</h4>
        </div>
        <div class="panel-body">

          <div class="form-group">
            <label class="col-sm-2 control-label">User Name:</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $_SESSION["loggedinuser"];?>" class="form-control" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Full Name:</label>
            <div class="col-sm-10">
              <input type="text" name="name" id="user" value="<?php echo $data["name"]?>" class="form-control">
            </div>
			<span id="username"style="padding-left: 159px;"  class="text-danger font-weight-bold"> </span>
          </div>

		 
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Contact info</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Phone number:</label>
            <div class="col-sm-10">
              <input type="tel" name="phone" id="mobileNumber" value="<?php echo $data["mobnum"]?>" class="form-control">
            </div>
			<span id="mobileno" style="padding-left: 159px;"class="text-danger font-weight-bold"> </span>
          </div>

        
          
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Security</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Current password</label>
            <div class="col-sm-10">
              <input type="password" value="<?php echo $data["password"]?>"class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">New password</label>
            <div class="col-sm-10">
              <input type="password" id="pass" name="npass"value="<?php echo $data["password"]?>" class="form-control">
            </div>
			<span id="passwords" style="padding-left: 159px;"class="text-danger font-weight-bold"> </span>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">

            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <button type="submit" name="Updateprofile" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">


</script></section>
  </body>
</html>




<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;





			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the name field";
				return false;
			}
			if((user.length <= 2) || (user.length > 25)) {
				document.getElementById('username').innerHTML =" ** name lenght must be between 2 and 25";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}







			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 11 digits only";
				return false;
			}



			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the Address field";
				return false;
			}
			
			if((emails.length <= 2) || (emails.length > 30)) {
				document.getElementById('emailids').innerHTML =" ** Address lenght must be between 2 and 30";
				return false;	
			}
			
		}

	</script>






















