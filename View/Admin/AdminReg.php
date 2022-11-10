<?php
    
    $title = 'Add Admin';
    include('header.php');


    $NameErr =$emailErr = $userNameErr = $passwordErr = $conPasswordErr = $genderErr =  $dobErr =  "" ;

      $Name = ""; 
      $email = "";
      $userName= "";
      $password= "";
      $conPassword = "";
      $gender = "";
      $dob = "";  

?>
<script type="text/javascript" src="AddAdmin.js"></script>
    <div id="mainview">
        <div class="form">
                <form method="POST" name="jsForm" onSubmit="submitForm(event)" action="../../Controller/Admin/AdminReg.php">
                    
                        <legend><b><center>ADMIN REGISTRATION</center></b></legend>
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
    </div>