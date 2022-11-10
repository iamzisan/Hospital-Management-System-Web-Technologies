<?php 
    $title = 'Admin-List';
    include('header.php');
?>          
    
        <div id="mainview">
                

             <div class="dashContent">
                <div class="Users">
                    
                    <div class="admin">
                        <div class="box">
                            <h2>ADMIN</h2>
                            <h3>
                                <a href = "AdminList.php">
                                    <input id="btn" type="submit" name="Total-List" value="Total-List">
                                </a>
                            </h5>
                        </div>

                        <div class="icon-case">
                            <img src="../../Pictures/Dashboard/administrator.png">
                        </div>    
                    </div>

                    <div class="doctor">
                        <div class="box">
                            <h2>DOCTOR</h2>
                            <h4>
                                <a href = "DocList.php">
                                    <input id="btn" type="submit" name="Total-List" value="Total-List">
                                </a>
                            </h4>
                        </div>

                        <div class="icon-case">
                            <img src="../../Pictures/Dashboard/doctor1.png">
                        </div>       
                    </div>

                    <div class="patient">
                        <div class="box">
                            <h2>PATIENT</h2>
                            <h4>
                                <a href = "PatientList.php">
                                    <input id="btn" type="submit" name="Total-List" value="Total-List">
                                </a>
                            </h4>    
                        </div>

                        <div class="icon-case">
                            <img src="../../Pictures/Dashboard/family.png">
                        </div>
                            
                    </div>

                    <div class="pharmacy">
                        <div class="box">
                            <h2>PHARMACY</h2>
                            <h4>
                                <a href = "PharmacyList.php">
                                    <input id="btn" type="submit" name="Total-List" value="Total-List">
                                </a>
                            </h4>
                        </div>

                        <div class="icon-case">
                            <img src="../../Pictures/Dashboard/pharmacy6.png">
                        </div>    
                    </div>

                </div>

                <div class="viewUsers">
                <h3 style="text-align:center; text-transform:uppercase; padding:5px;">Admin-lists</h3>
                <table  class="UsersTable">  
                          <tr >  
                               <th>Name</th> 
                               <th>Email</th>  
                               <th>User Name</th>  
                               <th>Password</th>  
                               <th>Gender</th>   
                               <th>Date Of Birth</th>   
                          </tr> 
                          
                        <?php
                            $conn = getConnection();
                            $sql = "SELECT * FROM admin_reg";
                            $result = mysqli_query($conn, $sql);

                            while($user = mysqli_fetch_assoc($result)){
                            
                            echo '<tr>
                                  <td>'.$user['name'].'</td>
                                  <td>'.$user['email'].'</td>
                                  <td>'.$user['username'].'</td>
                                  <td>'.$user['password'].'</td>
                                  <td>'.$user['gender'].'</td>
                                  <td>'.$user['dob'].'</td>
                              </tr>';   
                              }                                             
                        ?>
                        
                           
                    </table> 
                </div>    
                    

            </div>
                
        
        </div>
                    
                        
<?php include('footer.php');?>                     