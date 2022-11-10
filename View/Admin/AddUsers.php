<?php
session_start();
// if (isset($_COOKIE['flag']))
 //{

?>
<html>
<head>
	<title> Add New Users </title>
</head>
<body >

    <form method="post" action= "../../Control/Admin/AddUsersCheck.php">
    
        <table border ="1" height ="100%" width ="100%">
        <tr>
            <td>
                    <a href="Dashboard.php">
                    <img src= "../../Pictures/Doc.png" height="70px" width="70px">
                    </a> 
            </td>
       
            <td align= "Right" colspan = 2>
                Logged in as <a href="Viewpro.php"> <?php echo $_SESSION['userName']; ?> </a> |
                <a href="../..Control/Admin/Logout.php">Logout</a> 
            </td>
        </tr>
        <tr height= "80%">
            <td width = "30%" valign = "top">
            <h1> Admin Account </h1>
   
                    <ul type= "disc" >
                    <h3><li> <a href= "Dashboard.php"> Dashboard </a> </li></h3>
                    <h3><li> <a href= "Viewpro.php"> View Profile </a> </li></h3>
                    <h3><li> <a href= "AddUsers.php"> Add Users </a> </li></h3>
                    <h3><li> <a href= "SearchUsers.php"> Search Users </a> </li></h3>
                    <h3><li> <a href= "RemoveUsers.php"> Remove Users </a> </li></h3>
                    <h3><li> <a href= "AdminMain.php"> Admin Request </a> </li></h3>
                    <h3><li> <a href= "DocMain.php"> Doctor Request</a> </li></h3>
                    <h3><li> <a href= "ViewUsers.php"> View All Users </a> </li></h3>
                    <h3><li> <a href= "../../Control/Admin/Logout.php"> Logout </a> </li></h3>
                    </ul>
                
            </td>
            <td colspan=2>
                 <fieldset style="margin: 0px 300px ;">
                    <legend>Select User Type</legend>
                    <table align= "center"  >
                    
   
                        
                        <tr>
                            <td>
                            
                            <input type="submit" name="Admin" value="Admin" style="width: 250px; height: 50px;">
                            
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                            
                            <input type="submit" name="Doctor" value="Doctor" style="width: 250px; height: 50px;">
                           
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                            
                            <input type="submit" name="Pharmacy" value="Pharmacy" style="width: 250px; height: 50px;">
                           
                            </td>
                        </tr>
                        
     
                    </table>
                    </fieldset>
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
//}

//else
//{
    //header("location: Login.php");
//?>