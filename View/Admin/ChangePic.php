<?php
session_start();
if (isset($_COOKIE['flag']))
 {
$msg = "";
$msgErr= "";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include "../Control/Picupload.php";
}

?>

<html>
<head>
	<title> Change Picture </title>
</head>
<body>

    <form method= "POST" action= "#" enctype="multipart/form-data">
    
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
                    <h3><li> <a href= "Dashboard.php"> Dashboard </a> </li></h3>
                    <h3><li> <a href= "Viewpro.php"> View Profile </a> </li></h3>
                    <h3><li> <a href= "AddUsers.php"> Add Users </a> </li></h3>
                    <h3><li> <a href= "RemoveUsers.php"> Remove Users </a> </li></h3>
                    <h3><li> <a href= "AdminMain.php"> Admin Request </a> </li></h3>
                    <h3><li> <a href= "DocMain.php"> Doctor Request</a> </li></h3>
                    <h3><li> <a href= "ViewUsers.php"> View All Users </a> </li></h3>
                    <h3><li> <a href= "../Control/Logout.php"> Logout </a> </li></h3>
                    </ul>
                
            </td>
            <td colsapn=2 >
                <fieldset>
                <legend> PROFILE PICTURE</legend>
                <table height= "70%" width= "100%">
                
                    <tr>
                        <td align="top">
                            <img src= "../Pictures/img.jpg" width="100px" height="100px">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                        <input type= "file" name="picture" value= "picture"> 
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p><?php echo $msg; ?></p>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="style="color:red"><?php echo $msgErr; ?></p>  
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type= "submit" name= "Upload" value="Upload">
                        </td>
                    </tr>

                    
                </table>
                </fieldset>
            </td>
        </tr>
            
        <tr>
            <td colspan=3>
            <center>
            <p>Copyright@2017</p>
            </center>
            </td>
        </tr>
        </table>
    </form>

</body>
</html>
<?php 
}
?>