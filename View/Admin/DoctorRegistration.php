<?php
    
    $title = 'Add Doctor';
    include('header.php');


    $NameErr =$emailErr = $userNameErr = $mobErr = $nidNoErr = $licenseErr = $passwordErr = $conPasswordErr = $genderErr =  $dobErr =  "" ;

      $Name = ""; 
      $email = "";
      $userName= "";
      $mob = "";
      $nidNo = "";
      $license = "";
      $password= "";
      $conPassword = "";
      $gender = "";
      $dob = "";  

?>

    <div id="mainview">
        <div class="form">
                <form method="POST" name="jsForm" onSubmit="submitForm(event)">
                    
                        <legend><b><center>DOCTOR REGISTRATION</center></b></legend>
                        <br>


                        <label for="name"><b>Name</label> 
                        <input type="text" id="name" name="name" value="<?php echo $Name;?>">
                        
                        <p style="color:red" id="NameErr"><?php echo $NameErr; ?></p>
                        <br>

                        <label for="email"><b>Email</label>
                        
                        <input type="email" id="email" name="email" value="<?php echo $email;?>">
                        <p style="color:red" id="emailErr"><?php echo $emailErr; ?></p>
                        <br>

                        <label for="uname"><b>Username</label>
                        <input type="text" id="uname" name="userName" value="<?php echo $userName;?>">
                        <p style="color:red" id="userNameErr"><?php echo $userNameErr; ?></p>
                        <br>

                        <legend>Mobile Number</b></legend>
                        <input type="text" id="mob" name="mob" value="<?php echo $mob;?>"></td>
                        <p style="color:red" id="mobErr" ><?php echo $mobErr; ?></p>
                        <br>

                        <label><b>Nid No</b></label>
                        <input type="text" id="nidNo" name="nidNo" value="<?php echo $nidNo; ?>"></td>
                        <p style="color:red" id="nidNoErr" ><?php echo $nidNoErr; ?></p>
                        <br>

                        <label><b>Doctor License</b></label>
                        <input type="text" id="license" name="license" value="<?php echo $license; ?>"></td>
                        <p style="color:red" id="licenseErr" ><?php echo $licenseErr; ?></p>
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
                        


                        <fieldset>
                        <legend><b>Date Of Birth</legend>
                        <input type="date" id="dob" name="dob" value="<?php echo $dob ?>">
                        </fieldset>
                    
                        <p style="color:red" id="dobErr"><?php echo $dobErr; ?></p>
                        <br>
                        
                        <center>
                        <input type="submit" id="submit" name="submit" value="Submit"  style="width: 186px; display: inline-block; height: 45px">
                        <input type="reset" id="submit" name="reset" value="Reset"  style="width: 186px; display: inline-block; height: 45px;">
                        </center> 

                </form>
        <p id="errorMsg"></p>
        </div>

        <script type="text/javascript">
            function submitForm(e)
        {
          console.log(e);
          e.preventDefault();
          console.log("form submitted");

          var name = document.forms["jsForm"]["name"].value;
          var email = document.forms["jsForm"]["email"].value;
          var username = document.forms["jsForm"]["uname"].value;
          var mob = document.forms["jsForm"]["mob"].value;
          var nidNo = document.forms["jsForm"]["nidNo"].value;
          var license = document.forms["jsForm"]["license"].value;
          var password = document.forms["jsForm"]["password"].value;
          var conPassword = document.forms["jsForm"]["conPassword"].value;
          var gender = document.forms["jsForm"]["gender"].value;
          var dob = document.forms["jsForm"]["dob"].value;
          

          if(name == "" || email == "" || username == "" || password == "" || conPassword == "" ||
            gender == "" || dob == "") 
          {
            alert("Please fill up the form properly!");
            

            if(name == "")
            {
              document.getElementById("name").style.border = "2px solid red";
              document.getElementById("NameErr").innerHTML = "Please fill up your Name properly!";
            }else{
              document.getElementById("name").style.border = "1px solid black";
              document.getElementById("NameErr").innerHTML = "";
            }


            if(email == "")
            {
              document.getElementById("email").style.border = "2px solid red";
              document.getElementById("emailErr").innerHTML = "Please enter your Email Address!";
            } else{
              document.getElementById("email").style.border = "1px solid black";
              document.getElementById("emailErr").innerHTML = "";
            }


            if(username == "")
            {
              document.getElementById("uname").style.border = "2px solid red";
              document.getElementById("userNameErr").innerHTML = "Please enter your User Name!";
            }else{
              document.getElementById("uname").style.border = "1px solid black";
              document.getElementById("userNameErr").innerHTML = "";
            }

             if(mob == "")
            {
              document.getElementById("mob").style.border = "2px solid red";
              document.getElementById("mobErr").innerHTML = "Please enter your Mobile Number!";
            } else{
              document.getElementById("mob").style.border = "1px solid black";
              document.getElementById("mobErr").innerHTML = "";
            }

            if(nidNo == "")
            {
             document.getElementById("nidNo").style.border = "2px solid red";
             document.getElementById("nidNoErr").innerHTML = "Please enter your Nid Number"; 
            } else {
              document.getElementById("nidNo").style.border = "1px solid black";
              document.getElementById("nidNoErr").innerHTML = "";
            }

            if(license == "")
            {
             document.getElementById("license").style.border = "2px solid red";
             document.getElementById("licenseErr").innerHTML = "Please enter your License Number!"; 
            } else {
              document.getElementById("license").style.border = "1px solid black";
              document.getElementById("licenseErr").innerHTML = "";
            }

            if(password == "")
            {
              document.getElementById("password").style.border = "2px solid red";
              document.getElementById("passwordErr").innerHTML = "Please enter your Password!"; 
            }else{
              document.getElementById("password").style.border = "1px solid black";
              document.getElementById("passwordErr").innerHTML = "";
            }


            if(conPassword == "")
            {
              document.getElementById("conPassword").style.border = "2px solid red";
              document.getElementById("conPasswordErr").innerHTML = "Please enter your Password Again!";
            }else{
              document.getElementById("conPassword").style.border = "1px solid black";
              document.getElementById("conPasswordErr").innerHTML = "";
            }


            if(gender == "")
            {
              document.getElementById("genderErr").innerHTML = "Gender Required";
            } else{
              document.getElementById("ge").innerHTML = "";
              document.getElementById("genderErr").innerHTML = "";
            }

            if(dob == "")
            {
             document.getElementById("dob").style.border = "2px solid red";
             document.getElementById("dobErr").innerHTML = "Date Of Birth Required"; 
            } else {
              document.getElementById("dob").style.border = "1px solid black";
              document.getElementById("dobErr").innerHTML = "";
            }
            
          }
          else {

            const obj = {
                  'name':name,
                  'email':email,
                  'userName':username,
                  'mob' : mob,
                  'nidNo' : nidNo,
                  'license' : license,
                  'password':password,
                  'conPassword':conPassword,
                  'gender':gender,
                  'dob':dob
            };

            const data= JSON.stringify(obj);


            const http = new XMLHttpRequest();
            http.open("POST", `../../Controller/Admin/DoctorRegCheck_JS.php`, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(`data=${data}`);
            
            http.onreadystatechange = function() {
              
              if(this.readyState == 4 && this.status == 200) {
                alert(this.responseText);

                if(password!=conPassword)
                {
                  document.getElementById("errorMsg").innerHTML = "<b>Password not matched</b>";
                  document.getElementById("errorMsg").style.color = "red";

                }
                if(password.length<6)
                {
                  document.getElementById("errorMsg").innerHTML = "";
                }

                document.getElementById("ge").innerHTML = "";
                document.getElementById("name").style.border = "1px solid black";
                document.getElementById("email").style.border = "1px solid black";
                document.getElementById("uname").style.border = "1px solid black";
                document.getElementById("password").style.border = "1px solid black";
                document.getElementById("conPassword").style.border = "1px solid black";
                document.getElementById("dob").style.border = "1px solid black";

                document.getElementById("mob").style.border = "1px solid black";
                document.getElementById("license").style.border = "1px solid black";
                document.getElementById("nidNo").style.border = "1px solid black";
                


              }
            }

            


          }
        }
        </script>
    </div>