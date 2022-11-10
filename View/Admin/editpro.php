<?php 
    
    $title = 'Edit Profile';
    include('header.php');

    $emailErr = $userNameErr = $passwordErr = $genderErr = $dobErr = "";
    
?>
 <div id="mainview">
    <div>   
    <form method = "post" name= "jsFrom" onSubmit="submitForm(event)" action="../../Controller/Admin/EditProCheck.php">
        
       
            
            
                <table id="personalPro" >
                
                    <tr>
                        <td> 
                            <b> Name : </b> 
                            <p style="color:darkred;"> 
                                <?php echo $user["name"]; ?> 
                            </p> 
                        </td>

                        <td> <input id= "name" type= "text" name= "name"> </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    
                    <tr>
                        <td> 
                            <b>Email : </b>
                            <p style="color:darkred;"> <?php echo $user["email"]; ?> </p> 
                        </td>
                        <td> <input id= "email" type="text" name= "email"> </td>
                    </tr>
                    
                    <tr>
                        <td>
                            
                        </td>

                        <td>
                            <p style="color:red;"> <?php echo $emailErr; ?> </p>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            <b>User Name :</b>
                            <p style="color:darkred;"><?php echo $user["username"]; ?></p> 
                        </td>
                        <td> <input id="uname" type="text" name= "userName"> </td>
                    </tr>
                    
                    <tr>
                        <td>
                            
                        </td>

                        <td>
                            <p style="color:red;"><?php echo $userNameErr; ?></p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b>Password :</b>
                            <p style="color:darkred;"><?php echo $user["password"]; ?></p> 
                        </td>
                        <td> <input id="password" type="Password" name="Password"> </td>
                    </tr>

                    <tr>
                        <td>
                            
                        </td>

                        <td>
                            <p style="color:red;"><?php echo $passwordErr; ?></p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b>Gender : </b>
                            <p style="color:darkred;"> <?php echo $user["gender"]; ?> </p>    
                        </td>
                        <td> 
                            <input type="radio" name="gender" id="ge" style="display: inline-block; width: 15%;"
                            <?php if(isset($gender) && $gender=="Male") echo "checked"; ?> value="Male" > Male
                            <input type="radio" name="gender" id="ge" style="display: inline-block; width: 15%;"
                            <?php if(isset($gender) && $gender=="Female") echo "checked"; ?> value="Female"> Female
                            <input type="radio" name="gender" id="ge" style="display: inline-block; width: 15%;"
                            <?php if(isset($gender) && $gender=="Others") echo "checked"; ?> value="Others"> Others              
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                             
                        </td>

                        <td>
                            <p style="color:red;"><?php echo $genderErr; ?></p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b>Date of Birth : </b>
                            <p style="color:darkred;"> <?php echo $user["dob"]; ?></p>
                        </td>
                        <td> <input  id="dob" type="date" name= "dob">
                        </td>
                    
                    <tr>
                        <td>
                         
                        </td>

                        <td></td>

                    </tr>
                    
                    
                </table>

                <input class="submit" type="submit" name= "Update" value="Update" style= "width:250px;">
            
       
            </form>
            </div>
     </div>

    <script type="text/javascript">

         function submitForm(e)
        {
          console.log(e);
          e.preventDefault();
          console.log("form submitted");

          var name = document.getElementById('name').value;
          var email = document.getElementById('email').value;
          var username = document.getElementById('uname').value;
          var password = document.getElementById('password').value;
          var gender = document.getElementById('ge').value;
          var dob = document.getElementById('dob').value;

          if(name == "")
          {
           var name = "<?php echo $user['name']; ?>"; 
          }

          if(email == "")
          {
           var email = "<?php echo $user['email']; ?>"; 
          }

          if(username == "")
          {
           var username =  "<?php echo $user['username']; ?>"; 
          }

          if(password == "")
          {
           var password = "<?php echo $user['password']; ?>"; 
          }

          if(gender == "")
          {
           var gender = "<?php echo $user['gender']; ?>"; 
          }

          if(dob == "")
          {
           var dob = "<?php echo $user['dob'];?>";
          }
          
          const obj = {
                  'name':name,
                  'email':email,
                  'userName':username,
                  'password':password,
                  'gender':gender,
                  'dob':dob
            
                };

        const data= JSON.stringify(obj);

            console.log(data);

            const http = new XMLHttpRequest();
            http.open("POST", `../../Controller/Admin/EditProCheck_JS.php`, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(`data=${data}`);
            
            http.onreadystatechange = function() {
              
              if(this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        }
    }
         
        
    </script>

            
<?php include('footer.php');?> 