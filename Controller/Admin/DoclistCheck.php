<?php
session_start();
require_once('../../Model/usersModel.php');
if (isset($_COOKIE['flag']))
 {
?>
<html>
<head>
	<title> View Users </title>
</head>
<body >

    <form >
    
        <table border = "1" height ="100%" width ="100%">
        <tr>
            <td>
                    <a href="Dashboard.php">
                    <img src= "../../Pictures/Doc.png" height="70px" width="70px">
                    </a> 
            </td>
       
            <td align= "Right" colspan = 2>
                Logged in as <a href="Viewpro.php"> <?php echo $_SESSION['userName']; ?> </a> |
                <a href="../..Control/Admin/../Logout.php">Logout</a> 
            </td>
        </tr>
        <tr height= "80%">
            <td width = "30%"  valign= "top">
            <h1> Admin Account </h1>
   
                    <ul type= "disc" >
                    <h3><li> <a href= "../../View/Admin/Dashboard.php"> Dashboard </a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/Viewpro.php"> View Profile </a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/AddUsers.php"> Add Users </a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/SearchUsers.php"> Search Users </a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/RemoveUsers.php"> Remove Users </a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/AdminMain.php"> Admin Request </a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/DocMain.php"> Doctor Request</a> </li></h3>
                    <h3><li> <a href= "../../View/Admin/ViewUsers.php"> View All Users </a> </li></h3>
                    <h3><li> <a href= "../../Control/Admin/Logout.php"> Logout </a> </li></h3>
                    </ul>
                
            </td>
            <td colspan=2  >
                <table height ="100%" width ="100%">
                    <tr valign= "top">
                    <th height = "10%" >
                    <h2>Admin</h2>
                    </th>
                    
                    <th height = "10%" >
                    <h2>Doctor</h2>
                    </th>
                    
                    <th height = "10%" >
                    <h2>Patient</h2>
                    </th>
                    
                    <th height = "10%">
                    <h2>Pharmacy</h2>
                    </th>
                    </tr>
                    
                    <tr align= "center" height = "10%">
                        <td valign= "top">
                        <a href = "AdminlistCheck.php">Total List</a>
                        </td>
                        
                        <td valign= "top">
                        <a href = "DoclistCheck.php">Total List</a>
                        </td>
                        
                        <td valign= "top">
                        <a href = "PatientlistCheck.php">Total List</a>
                        </td>
                        
                        <td valign= "top" >
                         <a href = "PharmalistCheck.php">Total List</a>
                        </td>
                    </tr>
                    <tr valign= "top">
                    <td colspan=4>
                    <fieldset>
                    <legend>Doctor List</legend>
                    <table  border="1" width="100%" >  
                          <tr>  
                               <th>Name</th> 
                               <th>Email</th>  
                               <th>User Name</th>
                               <th>Mobile Number</th>
                               <th>NID Number</th>
                               <th>License</th>
                               <th>Password</th>  
                               <th>Gender</th>   
                               <th>Date Of Birth</th>   
                          </tr> 
                          
                        <?php
                   
                            $conn = getConnection();
                            $sql = "SELECT * FROM doctor_reg";
                            $result = mysqli_query($conn, $sql);

                            while($user = mysqli_fetch_assoc($result)){
                                echo '<tr>
                                  <td>'.$user['name'].'</td>
                                  <td>'.$user['email'].'</td>
                                  <td>'.$user['username'].'</td>
                                  <td>'.$user['mobilenum'].'</td>
                                  <td>'.$user['nidnum'].'</td>
                                  <td>'.$user['license'].'</td>
                                  <td>'.$user['password'].'</td>
                                  <td>'.$user['gender'].'</td>
                                  <td>'.$user['dob'].'</td>
                              </tr>';
                                
                            }                                               
                        ?>
                        
                           
                    </table> 
                    </fieldset>    
                    </td> 
                    </tr>
        
                </table>
            </td>
        </tr>
            
        <tr>
            <td colspan=3>
            <center>
            <p>Copyright@2021</p>
            </center>
            </td>
        </tr>
        </table>
    </form>

</body>
</html>

<?php
}

else
{
    header("location: Login.php");
}
?>