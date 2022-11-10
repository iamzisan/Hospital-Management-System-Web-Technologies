<?php
require_once('../../Model/Admin/usersModel.php');

$user = $_POST['user'];
$search = $_POST['live'];

if ($user == "Admin")
{

    if ($user == "Admin" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        $user = "admin_reg";
        $conn = getConnection();
        $sql = "SELECT * FROM admin_reg WHERE name LIKE ('%$search%')";
        $result = mysqli_query($conn, $sql);
        echo '<table id="jTable">
        <tr>
           <th>Name</th> 
           <th>Email</th>  
           <th>User Name</th>  
           <th>Password</th>  
           <th>Gender</th>   
           <th>Date Of Birth</th>
        </tr>';
        while($admin = mysqli_fetch_array($result)) {
          echo '<tr>
           <td>' . $admin['name'] . '</td>
           <td>' . $admin['email'] . '</td>
           <td>' . $admin['username'] . '</td>
           <td>' . $admin['password'] . '</td>
           <td>' . $admin['gender'] . '</td>
           <td>' . $admin['dob'] . '</td>
           </tr>';
        }
        echo '</table>';
        mysqli_close($conn);
        
        }
        
        

}


if ($user == "Doctor")
{

    if ($user == "Doctor" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        $user = "doctor_reg";
        $conn = getConnection();
        $sql = "SELECT * FROM doctor_reg WHERE name LIKE ('%$search%')";
        $result = mysqli_query($conn, $sql);
        echo '<table id="jTable">
        <tr>
           <th>Name</th> 
           <th>Email</th>  
           <th>User Name</th>
           <th>mobile number</th>
           <th>nid number</th>
           <th>license</th>>  
           <th>Password</th>  
           <th>Gender</th>   
           <th>Date Of Birth</th>
        </tr>';
        while($doctor = mysqli_fetch_array($result)) {
          echo '<tr>
           <td>' . $doctor['name'] . '</td>
           <td>' . $doctor['email'] . '</td>
           <td>' . $doctor['username'] . '</td>
           <td>' . $doctor['mobnum'] . '</td>
           <td>' . $doctor['nidnum'] . '</td>
           <td>' . $doctor['license'] . '</td>
           <td>' . $doctor['password'] . '</td>
           <td>' . $doctor['gender'] . '</td>
           <td>' . $doctor['dob'] . '</td>
           </tr>';
        }
        echo '</table>';
        mysqli_close($conn);
        
        }
        
        

}

if ($user == "Pharmacy")
{

    if ($user == "Pharmacy" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        
        $conn = getConnection();
        $sql = "SELECT * FROM pharmacy_registration WHERE name LIKE ('%$search%')";
        $result = mysqli_query($conn, $sql);
        echo '<table id="jTable">
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>pharmacy address</th>
            <th>user name</th>
            <th>password</th>
            <th>license</th>
            <th>pharmacy No</th>
            <th>nid no</th>
        </tr>';
        while($pharmacy = mysqli_fetch_array($result)) {
          echo '<tr>
           <td>' . $pharmacy['name'] . '</td>
           <td>' . $pharmacy['email'] . '</td>
           <td>' . $pharmacy['address'] . '</td>
           <td>' . $pharmacy['username'] . '</td>
           <td>' . $pharmacy['password'] . '</td>
           <td>' . $pharmacy['licenceno'] . '</td>
           <td>' . $pharmacy['storeno'] . '</td>
           <td>' . $pharmacy['nidno'] . '</td>
           </tr>';
        }
        echo '</table>';
        mysqli_close($conn);
        
        }
        
        

}


if ($user == "Patient")
{

    if ($user == "Patient" && empty($search)){

        echo 'Please Enter Your User Name..';

        }else{

        
        $conn = getConnection();
        $sql = "SELECT * FROM patientprofile WHERE Username LIKE ('%$search%')";
        $result = mysqli_query($conn, $sql);
        echo '<table id="jTable">
        <tr>
           <th>User Name</th>
           <th>nid number</th>
           <th>Email</th>  
           <th>Password</th>  
           <th>Gender</th>   
           <th>Date Of Birth</th>
        </tr>';
        while($Patient = mysqli_fetch_array($result)) {
          echo '<tr>
           <td>' . $Patient['Username'] . '</td>
           <td>' . $Patient['Nid'] . '</td>
           <td>' . $Patient['Email'] . '</td>
           <td>' . $Patient['Password'] . '</td>
           <td>' . $Patient['Gender'] . '</td>
           <td>' . $Patient['Dob'] . '</td>
           </tr>';
        }
        echo '</table>';
        mysqli_close($conn);
        
        }
        
        

}







?>