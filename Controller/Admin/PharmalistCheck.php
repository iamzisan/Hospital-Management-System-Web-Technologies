<?php
session_start();
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
                    <img src= "../Pictures/Doc.png" height="70px" width="70px">
                    </a> 
            </td>
       
            <td align= "Right" colspan = 2>
                Logged in as <a href="Viewpro.php"> <?php echo $_SESSION['user']['userName']; ?> </a> |
                <a href="../Control/Logout.php">Logout</a> 
            </td>
        </tr>
        <tr height= "80%">
            <td width = "30%"  valign= "top">
            <h1> Admin Account </h1>
   
                    <ul type= "disc" >
                    <h3><li> <a href= "../View/Dashboard.php"> Dashboard </a> </li></h3>
                    <h3><li> <a href= "../View/Viewpro.php"> View Profile </a> </li></h3>
                    <h3><li> <a href= "../View/AddUsers.php"> Add Users </a> </li></h3>
                    <h3><li> <a href= "../View/RemoveUsers.php"> Remove Users </a> </li></h3>
                    <h3><li> <a href= "../View/AdminMain.php"> Admin Request </a> </li></h3>
                    <h3><li> <a href= "../View/DocMain.php"> Doctor Request</a> </li></h3>
                    <h3><li> <a href= "../View/ViewUsers.php"> View All Users </a> </li></h3>
                    <h3><li> <a href= "../Control/Logout.php"> Logout </a> </li></h3>
                    </ul>
                
            </td>
            <td colspan=2  >
                <table  height ="100%" width ="100%">
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
                    <legend>Pharmacy List</legend>
                    <table  border="1" width="100%" >  
                    
                          <tr >  
                               <th>Pharmacy Name</th>
                               <th>Pharmacy Address</th>
                               <th>Trade License</th>
                               <th>Name</th> 
                               <th>Email</th>  
                               <th>User Name</th>
                               <th>Mobile Number</th>
                               <th>NID Number</th>
                               <th>Password</th>  
                               <th>Gender</th>   
                               <th>Date Of Birth</th>   
                          </tr> 
                          
                          <?php
                   
                            $file = fopen('../View/PharmaReg.txt', 'r')
                            or die("unable to open file");
                          
                            while(!feof($file))
                                {
                                                         
                                    $data = fgets($file);
                                    if($data != "") {
                                    $pharma = explode('|', $data);
                                                                         
                                    echo '<tr>
                                              <td>'.$pharma[0].'</td>
                                              <td>'.$pharma[1].'</td>
                                              <td>'.$pharma[2].'</td>
                                              <td>'.$pharma[3].'</td>
                                              <td>'.$pharma[4].'</td>
                                              <td>'.$pharma[5].'</td>
                                              <td>'.$pharma[6].'</td>
                                              <td>'.$pharma[7].'</td>
                                              <td>'.$pharma[8].'</td>
                                              <td>'.$pharma[9].'</td>
                                              <td>'.$pharma[10].'</td>
                                          </tr>'; 
                                    }
                                   
                                }
                                                       
                                 
                                                        
                            fclose($file);                                                
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