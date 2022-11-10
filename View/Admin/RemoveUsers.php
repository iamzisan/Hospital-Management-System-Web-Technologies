<?php
$title = 'Remove Users';
include('header.php');

?>
    <script type="text/javascript" src="remove.js"></script>
    <div id='mainview'>
                 
                    
                    
                    <div id ="rmvUsers">
                        
                        <select id="type" name = "User" onchange= "showResult(this.value)">
                            <option selected disabled> Select User</option> 
                            <option id="us" value = "Admin"> Admin </option>
                            <option id="us" value = "Doctor"> Doctor </option>
                            <option id="us" value = "Patient"> Patient </option>
                            <option id="us" value = "Pharmacy"> Pharmacy </option>
                        </select>

                        <input type="text" id="userName" name="userName" autocomplete="off" placeholder="Search Users Name.." onkeyup="showResult(this.value)" style="width: 400px; height: 30px;">
                        
                        
                        <div id="rmvTable">
                            <p style="color:red;" id="result"></p>
                        </div>
                        
                    </div>

                    

                        

                      
                        
     
                    </table>
                    
    
    </div>
            
       

<?php

include('footer.php');
?>
