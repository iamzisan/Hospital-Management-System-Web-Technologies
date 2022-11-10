<?php 
    $title = 'View Profile';
    include('header.php');
?>
    <form>
        
        <div id="mainview">
            
                <table id="personalPro" >
                
                    <tr>
                    
                    <td><b>Name :</td>
                    <td> <?php echo $user['name']; ?>  </td>
                    <td rowspan= "5" align= "center" > <img src= "../../Pictures/img.jpg" height="100px" width="100px" ></td>
                    
                    </tr>
                    
                    <tr>
                    
                    <td><b>Email :</td>
                    <td> <?php echo $user["email"];?>  </td>
                    
                    </tr>
                    
                    <tr>
                    <td><b>User Name :</td>
                    <td> <?php echo $user["username"]; ?>  </td>
                    </tr>
                    
                    <tr>
                    <td><b>Password :</td>
                    <td> <?php echo $user["password"]; ?>  </td>
                    </tr>
                    
                    <tr>
                    <td><b>Gender :</td>
                    <td> <?php echo $user["gender"];?> </td>
                    </tr>
                    
                    <tr>
                    <td><b>Date of Birth :</td>
                    <td> 
                    <?php echo $user["dob"];?>
                    </td>
                    <td  align = "center"><a href = "Changepic.php"> Change </td>
                    </tr>
                    
                    <tr>
                    <td colspan = 3><a href= "editpro.php"> Edit Profile </a> </td>
                    
                    </tr>
                    
                </table>
            
        </div>    
    </form>    
    
            
  <?php include('footer.php');?> 