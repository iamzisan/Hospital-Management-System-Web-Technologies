
<?php
	
	if(isset($_REQUEST['msg'])){
		$msg=$_REQUEST['msg'];
		
		if($msg=='null')
		{
			echo "<h3 align='center'>"."Warning! null value found!<br>please fill all necearry iformation"."</h3>";
		}
		
		if($msg=='error')
		{
			echo "<h3 align='center'>"."Warning!<br>Signup error"."</h3>";
		}
	}
	//$valid=null;

?>



<html>
<head>
    <title>PATIENT REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/homeStyle.css">
    
    
</head>
<body>

    <div class="topnav">
        <a href="../../Home.html">Home</a>
        <a href="login.php">Login</a>

        <div class="reg-container">
            
            <a href="#">Registration</a>
            
            <div class="reg-content">
                <a href="../Doctor/DocReg.php">Doctor</a>
                <a href="PatientReg.php">Patient</a>
                <a href="../pharmacy/PharmacyReg.php">Pharmacy</a>
                
            </div>

        </div>
        
    </div>

    <div class="form">

    	<form id="frm" method="post" onSubmit="return getName()" action="PatientRegCheck.php">
		
			<legend  align="center" >Patient</legend>
			
			<label>Username</label>
			<input class="txt" id="name" type="text" name="username" maxlength="10" 
				value="<?php if (isset($_REQUEST['username'])){echo $_REQUEST['username'];} ?>">

			<br>

			<b>NID Number</b>
			<input class="txt" id="nid" type="number" name="nid" value="<?php if (isset($_REQUEST['nid'])){echo $_REQUEST['nid'];} ?>">
			<br>

			<b>Email</b>
			<input class="txt" id="email" type="email" name="email" value="<?php if (isset($_REQUEST['email'])){echo $_REQUEST['email']; }?>">
			<br>

			<b>Password</b>
			<input class="txt" id="password" type="password" name="password" max="10" value="<?php if (isset($_REQUEST['password'])){echo $_REQUEST['password']; }?>">
			<br>
				
			<fieldset>
            		<legend><b>Gender</legend>
            		<input id="m" type="radio" name="gender" value="Male" style="display: inline-block; width: 15%;"> Male
			<input id="f"type="radio" name="gender" value="Femail" style="display: inline-block;  width: 15%;"> Female
			<input id="o" type="radio" name="gender" value="Other" style="display: inline-block;  width: 15%;"> Other
            		</fieldset>
            		<br>
                    
                    
                        <fieldset>
                        <legend><b>Date Of Birth</legend>
                        <input id="date" type="date" name="dob" >
                        </fieldset>
                        <br>
                    
			<input id="submit" type="reset" name="reset" value="Reset" style="width: 196px; display: inline-block; height: 45px">
			<input id="submit" type="submit" name="submit" value="Signup" style="width: 196px; display: inline-block; height: 45px"> 
					
					
			</table>
		
		
	</form>

    <div>

	
	
<div>


<script>
		//DOB
		function getDob(){
			let date = document.getElementById('date').value;
			
			let inputDate= new Date(date);
			let todayDate=new Date();
			
			if(date!==''){
				
				if(inputDate<todayDate){
					//alert('valid');
					return true;
				}
				else{
					alert('Date of Birth is invalid!');
					return false;
				}
				
			}else{
				alert('null value in Date of birth');
				return false;
			}
		}

		//gender
		function getGender(){

			if(document.getElementById('m').checked || document.getElementById('f').checked || document.getElementById('o').checked){
				//alert('Gender is selected');
				return getDob();
			}else{
				alert('Please Select "Gender"');
				return false;
			}
		}
		
		//password
		function getPass(){
		let password = document.getElementById('password').value;

			if(password != ''){
					if(password.length>4){
					//alert('Valid password');
					return getGender();
					}
					else{
						alert('Warning! Password should be more than 4 digit');
						return false;
					}
				
			}else{
				alert('Password is empty!');
				return false;
			}
			}
		//email
		function getEmail(){
			var mailformat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			let email = document.getElementById('email').value;

			if(email != ''){
				if(email.match(mailformat)){
						return getPass();
					}
					else{
						alert('invalid Email');
						return false;
					}
			}else{
				alert('Email is empty!');
				return false;
			}
		}

		//nid
		function getNid(){
		let nid = document.getElementById('nid').value;

			if(nid != ''){
					if(nid.length==10){
					//alert('Valid name and nid');
					return getEmail();
					
					}
					else{
						alert('Warning! NID should be 10 digit');
						return false;
					}
				
			}else{
				alert('NID is empty!');
				return false;
			}
			}
		//name
		function getName(){
		let name = document.getElementById('name').value;

			if(name != ''){
					if((/[a-zA-Z]/).test(name.charAt(0))){
						return getNid();
					}
					else{
						alert('Warning! Username should be start with a letter');
						return false;
					}
				
			}else{
				alert('Username is empty!');
				return false;
			}
			}
</script>
</div>

</body>
</html>