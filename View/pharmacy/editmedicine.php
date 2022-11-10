
<?php
include('header/Resheader.php');
$id="$_GET[id]";
	$price="$_GET[price]";
	$company="$_GET[company]";
	$power="$_GET[power]";
	$stock="$_GET[stock]";
	$medname="$_GET[medname]";

?>

<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 56%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] {
  border: 0;
  background: none;
  display: block;
  margin: 05px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: yellowgreen;
}
.box input[type="submit"] {
  border: 0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {
  background: #ff4500;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

</style>
<form class="box" action="../../Controller/pharmacy/update.php"onsubmit="return validation()" method="post">

      <div id="error_message"></div>
      <h1>Update Medicine</h1>
     
      <input type="text"id="user" name="pname"value="<?php echo $medname ?>" placeholder="Medicine Name" />
      <input type="text"id="mobileNumber" name="ophone" value="<?php echo $power ?>"placeholder="Power">
      <input type="text"id="nid" name="pnid" value="<?php echo $price ?>" placeholder="Unit Price" />
      <input type="text"id="emails" name="oaddress" value="<?php echo $company ?>"placeholder="Company Name" />
     <input type="hidden"id="emails" name="id" value="<?php echo $id ?>" />
	
	   <input type="text" id="rono"name="roono"value="<?php echo $stock ?>" placeholder="Quantity" />
      <input type="submit" name="update" value="Update Medicine" />
    </form>


	</div>
  </body>
</html>
<script type="text/javascript">


		function validation(){

			var user = document.getElementById('user').value;
			

			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;
     
        	
          	var Roomno = document.getElementById('rono').value;
            	var nid = document.getElementById('nid').value;



              error_message.style.padding = "10px";



			if(user == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the Medicine name field";
				return false;
			}
			if((user.length <= 3) || (user.length > 25)) {
				document.getElementById('error_message').innerHTML =" ** Medicine name lenght must be between 3 and 25";
				return false;
			}
			if(!isNaN(user)){
				document.getElementById('error_message').innerHTML =" ** only characters are allowed";
				return false;
			}













			if(mobileNumber == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill power field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('error_message').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length>5){
				document.getElementById('error_message').innerHTML =" **power not more than 5 digits ";
				return false;
			}



			




      if(emails == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Company field";
        return false;
      }

      if((emails.length <= 2) || (emails.length > 30)) {
        document.getElementById('error_message').innerHTML =" ** company name lenght must be between 3 and 30";
        return false;
      }



if(Roomno == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill Quantity field";
				return false;
			}
			if(isNaN(Roomno)){
				document.getElementById('error_message').innerHTML =" ** user must write digits in Price";
				return false;
			}
			if(Roomno.length>6){
				document.getElementById('error_message').innerHTML =" **Quantity not more than 6 digits ";
				return false;
			}



      if(nid == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Price field";
        return false;
      }
      if(isNaN(nid)){
        document.getElementById('error_message').innerHTML =" ** user must write digits";
        return false;
      }
      
      alert("Updated Successfully!");
      return true;
		}

	</script>
