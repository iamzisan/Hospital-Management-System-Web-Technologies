 function submitForm(e)
        {
          console.log(e);
          e.preventDefault();
          console.log("form submitted");

          var name = document.forms["jsForm"]["name"].value;
          var email = document.forms["jsForm"]["email"].value;
          var mob = document.forms["jsForm"]["mob"].value;
          var gender = document.forms["jsForm"]["gender"].value;
          var add = document.forms["jsForm"]["add"].value;
          var username = document.forms["jsForm"]["uname"].value;
          var password = document.forms["jsForm"]["password"].value;
          var conPassword = document.forms["jsForm"]["conPassword"].value;
          var dob = document.forms["jsForm"]["dob"].value;
          var license = document.forms["jsForm"]["license"].value;
          var pharmacyNo = document.forms["jsForm"]["pharmacyNo"].value;
          var nidNo = document.forms["jsForm"]["nidNo"].value;
          

          if(name == "" || email == "" ||  mob == "" || add == "" || username == "" || password == "" || conPassword == "" ||
              gender == "" || dob == "" || license == "" || pharmacyNo == "" || nidNo == "")
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

            if(mob == "")
            {
              document.getElementById("mob").style.border = "2px solid red";
              document.getElementById("mobErr").innerHTML = "Please enter your Mobile Number!";
            } else{
              document.getElementById("mob").style.border = "1px solid black";
              document.getElementById("mobErr").innerHTML = "";
            }

            if(gender == "")
            {
              document.getElementById("genderErr").innerHTML = "Gender Required";
            } else{
              document.getElementById("ge").innerHTML = "";
              document.getElementById("genderErr").innerHTML = "";
            }

            if(add == "")
            {
              document.getElementById("add").style.border = "2px solid red";
              document.getElementById("addErr").innerHTML = "Please enter your Address!";
            } else{
              document.getElementById("add").style.border = "1px solid black";
              document.getElementById("addErr").innerHTML = "";
            }add

            if(username == "")
            {
              document.getElementById("uname").style.border = "2px solid red";
              document.getElementById("userNameErr").innerHTML = "Please enter your User Name!";
            }else{
              document.getElementById("uname").style.border = "1px solid black";
              document.getElementById("userNameErr").innerHTML = "";
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



            if(dob == "")
            {
             document.getElementById("dob").style.border = "2px solid red";
             document.getElementById("dobErr").innerHTML = "Date Of Birth Required"; 
            } else {
              document.getElementById("dob").style.border = "1px solid black";
              document.getElementById("dobErr").innerHTML = "";
            }


            if(license == "")
            {
             document.getElementById("license").style.border = "2px solid red";
             document.getElementById("licenseErr").innerHTML = "Please enter your License Number!"; 
            } else {
              document.getElementById("license").style.border = "1px solid black";
              document.getElementById("licenseErr").innerHTML = "";
            }

            if(pharmacyNo == "")
            {
             document.getElementById("pharmacyNo").style.border = "2px solid red";
             document.getElementById("pharmacyNoErr").innerHTML = "Please enter your Pharmacy No"; 
            } else {
              document.getElementById("pharmacyNo").style.border = "1px solid black";
              document.getElementById("pharmacyNoErr").innerHTML = "";
            }

            if(nidNo == "")
            {
             document.getElementById("nidNo").style.border = "2px solid red";
             document.getElementById("nidNoErr").innerHTML = "Please enter your Nid Number"; 
            } else {
              document.getElementById("nidNo").style.border = "1px solid black";
              document.getElementById("nidNoErr").innerHTML = "";
            }


      }
          else {

                const obj = {
                  'name':name,
                  'email':email,
                  'userName':username,
                  'password':password,
                  'conPassword':conPassword,
                  'gender':gender,
                  'dob':dob,
                  'mob' : mob,
                  'gender' : gender,
                  'add' : add,
                  'license' : license,
                  'pharmacyNo' : pharmacyNo,
                  'nidNo' : nidNo
                };

            const data= JSON.stringify(obj);

            console.log(data);

            const http = new XMLHttpRequest();
            http.open("POST", `../../Controller/Admin/pharmacyRegCheck_JS.php`, true);
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
                document.getElementById("add").style.border = "1px solid black";
                document.getElementById("license").style.border = "1px solid black";
                document.getElementById("pharmacyNo").style.border = "1px solid black";
                document.getElementById("nidNo").style.border = "1px solid black";

              }
            }

            


          }
        }