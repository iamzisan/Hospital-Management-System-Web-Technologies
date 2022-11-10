<?php
    
    $title = 'Add Pharmacy';
    include('header.php');
     $userNameErr = $NameErr = $mobErr = $addErr = $pharmacyNoErr = $emailErr = $passwordErr = $conPasswordErr = $genderErr =  $dobErr =  $licenseErr = $nidNoErr="" ;

      $Name = ""; 
      $email = "";
      $mob = "";
      $userName= "";
      $add ="";
      $password = "";
      $conPassword = "";
      $gender = "";
      $dob = ""; 
      $pharmacyNo = "";
      $license = ""; 
      $nidNo= "";

?>

<div id="mainview">
   

    <div class="form">
        <form method="POST" name="jsForm" onSubmit="submitForm(event)" action="../../Controller/Admin/pharmacyRegCheck.php">
            
                <legend><b><center>PHARMACY REGISTRATION</center></b></legend>
                <br>


                <label for="name"><b>Name</b></label> 
                <input type="text" id="name" name="name" value="<?php echo $Name;?>">
                
                <p style="color:red" id="NameErr"><?php echo $NameErr; ?></p>
                <br>

                <label for="email"><b>Email</b></label>
                
                <input type="email" id="email" name="email" value="<?php echo $email;?>">
                <p style="color:red" id="emailErr"><?php echo $emailErr; ?></p>
                <br>

                <legend>Mobile Number</b></legend>
				<input type="text" id="mob" name="mob" value="<?php echo $mob;?>"></td>
				<p style="color:red" id="mobErr" ><?php echo $mobErr; ?></p>
				<br>

                <fieldset>
                <legend><b>Gender</legend>
                
                <input type="radio" name="gender" id="ge"
                <?php if(isset($gender) && $gender == 'Male') echo "checked"; ?> style="display: inline-block; width: 15%;" value="Male"> Male
                <input type="radio" name="gender" id="ge"
                <?php if(isset($gender) && $gender=="Female") echo "checked"; ?> style="display: inline-block; width: 15%;" value="Female"> Female
                <input type="radio" name="gender" id="ge"
                <?php if(isset($gender) && $gender=="Others") echo "checked"; ?> style="display: inline-block; width: 15%;" value="Others"> Others

                </fieldset>
                <p style="color:red" id="genderErr"><?php echo $genderErr; ?></p>
                <br>

                <legend><b>Pharmacy Address</legend>
				<input type="text" id= "add" name="add" value="<?php echo $add;?>"></td>
				<p style="color:red" id= "addErr" ><?php echo $addErr; ?></p>
				<br>

                <label for="uname"><b>Username</label>
                <input type="text" id="uname" name="userName" value="<?php echo $userName;?>">
                <p style="color:red" id="userNameErr"><?php echo $userNameErr; ?></p>
                <br>

                <label for="password"><b>Password</label>
                <input type="password" id="password" name="password" value="<?php echo $password;?>">
                <p style="color:red" id="passwordErr"><?php echo $passwordErr; ?></p>
                <br>

                <label> <b>Confirm Password </label>
                <input type="password" id="conPassword" name="conPassword" 
                    value="<?php echo $conPassword;?>">

                <p style="color:red" id="conPasswordErr"><?php echo $conPasswordErr; ?></p>
                <br>
                    
                <fieldset>
                <legend><b>Date Of Birth</legend>
                <input type="date" id="dob" name="dob" value="<?php echo $dob ?>">
                </fieldset>
            
                <p style="color:red" id="dobErr"><?php echo $dobErr; ?></p>
                <br>

                <label><b>Trade License</b></label>
				<input type="text" id="license" name="license" value="<?php echo $license; ?>"></td>
				<p style="color:red" id="licenseErr" ><?php echo $licenseErr; ?></p>
				<br>

				<label><b>Pharmacy No</b></label>
				<input type="text" id="pharmacyNo" name="pharmacyNo" value="<?php echo $pharmacyNo; ?>"></td>
				<p style="color:red" id="pharmacyNoErr" ><?php echo $pharmacyNoErr; ?></p>
				<br>

				<label><b>Nid No</b></label>
				<input type="text" id="nidNo" name="nidNo" value="<?php echo $nidNo; ?>"></td>
				<p style="color:red" id="nidNoErr" ><?php echo $nidNoErr; ?></p>
				<br>

                
                <center>
                <input type="submit" id="submit" name="submit" value="Submit"  style="width: 186px; display: inline-block; height: 45px">
                <input type="reset" id="submit" name="reset" value="Reset"  style="width: 186px; display: inline-block; height: 45px;">
                </center>
                 

        </form>
        <p id="errorMsg"></p>
    </div>

    <script src="pharmacyReg.js">
       
    </script>
</div>