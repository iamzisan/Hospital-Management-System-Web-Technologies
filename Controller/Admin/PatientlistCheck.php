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
                    <a href="../Home.html">
                    <img src= "../Pictures/Doc.png" height="70px" width="70px">
                    </a> 
            </td>
        
            <td align= "Right" colspan = 2>
                Logged in as <a href="../View/Dashboard.php"> <?php echo $_SESSION['user']['userName']; ?> </a> |
                <a href="Logout.php">Logout</a> 
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
                    <legend>Patient List</legend>
                    <table  border="1" width="100%" >  
                          <tr>  
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
                   
                            $file = fopen('../View/PatientReg.txt', 'r')
                            or die("unable to open file");
                                    
                            while(!feof($file))
                                {
                                                         
                                    $data = fgets($file);
                                    if($data != "") {
                                    $patient = explode('|', $data);
                                                  
                                    echo '<tr>
                                              <td>'.$patient['0'].'</td>
                                              <td>'.$patient['1'].'</td>
                                              <td>'.$patient['2'].'</td>
                                              <td>'.$patient['3'].'</td>
                                              <td>'.$patient['4'].'</td>
                                              <td>'.$patient['5'].'</td>
                                              <td>'.$patient['6'].'</td>
                                              <td>'.$patient['7'].'</td>
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