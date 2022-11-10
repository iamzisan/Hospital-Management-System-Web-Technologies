<?php 
    $title = 'Dashboard';
    
    include('header.php');
?>          
    
        <div id="mainview">

            <div class="dashContent">
                <div class="Users">
                    
                    <div class="admin">
                        <div class="box">
                            <h2>ADMIN</h2>
                            <h4>
                                <?php 
                                $user = "admin_reg";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
                            </h4>
                        </div>

                        <div class="icon-case">
                            <img src="../../Pictures/Dashboard/administrator.png">
                        </div>    
                    </div>

                    <div class="doctor">
                        <div class="box">
                            <h2>DOCTOR</h2>
                            <h4>
                                <?php 
                                $user = "doctor_reg";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
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
                                <?php 
                                $user = "patientprofile";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
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
                               <?php 
                                $user = "pharmacy_registration";
                                $i = getAllUserNumber($user);
                                echo $i;
                                ?>
                            </h4>
                        </div>

                        <div class="icon-case">
                            <img src="../../Pictures/Dashboard/pharmacy6.png">
                        </div>    
                    </div>

                </div>

                <div class="requestUsers">
                    
                    <br>
                    <div class="doctor1">
                    <h3 style="text-align:center; text-transform:uppercase; padding:5px;">Doctor Requests</h3>
                    
                        
                        <table id="doctor">
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>user name</th>
                                <th>mobile number</th>
                                <th>nid number</th>
                                <th>license</th>
                                <th>password</th>
                                <th>gender</th>
                                <th>date of birth</th>
                                <th>type</th>
                                <th>permission</th>
                            </tr>

                            
                            <?php
                            $result = array();
                            $user = getAllUser('doctor_req');

                            for($i=0; $i<count($user); $i++)
                            {
                                echo '<tr>
                                  <td>'.$user[$i]['name'].'</td>
                                  <td>'.$user[$i]['email'].'</td>
                                  <td>'.$user[$i]['username'].'</td>
                                  <td>'.$user[$i]['mobnum'].'</td>
                                  <td>'.$user[$i]['nidnum'].'</td>
                                  <td>'.$user[$i]['license'].'</td>
                                  <td>'.$user[$i]['password'].'</td>
                                  <td>'.$user[$i]['gender'].'</td>
                                  <td>'.$user[$i]['dob'].'</td>
                                  <td>'.$user[$i]['type'].'</td>
                                  <td>
                                   <a href="../../Controller/Admin/validateDoc.php?id='.$user[$i]['id'].'">
                                        <input id="btn" type="submit" name="accept" value="accept">
                                    </a>
                                    <a href="../../Controller/Admin/validateDocDl.php?id='.$user[$i]['id'].'">
                                        <input id="btn" type="submit" name="reject" value="reject">
                                    </a>
                                  </td>
                              </tr>';
                                
                            }

                            ?>

                            
                        </table>
                        
                    </div>
                    
                    <br>
                    <div class="doctor1">
                    <h3 style="text-align:center; text-transform:uppercase; padding:5px;">Pharmacy Requests</h3>
                    
                        
                        <table id="doctor">
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>pharmacy address</th>
                                <th>user name</th>
                                <th>password</th>
                                <th>date of birth</th>
                                <th>license</th>
                                <th>pharmacy No</th>
                                <th>nid no</th>
                                <th>permission</th>
                            </tr>

                            
                            <?php
                            $result = array();
                            $user = getAllUser('pharmacy_request');

                             for($i=0; $i<count($user); $i++)
                            {
                                echo '<tr>
                                  <td>'.$user[$i]['name'].'</td>
                                  <td>'.$user[$i]['email'].'</td>
                                  <td>'.$user[$i]['address'].'</td>
                                  <td>'.$user[$i]['username'].'</td>
                                  <td>'.$user[$i]['password'].'</td>
                                  <td>'.$user[$i]['dob'].'</td>
                                  <td>'.$user[$i]['licenceno'].'</td>
                                  <td>'.$user[$i]['storeno'].'</td>
                                  <td>'.$user[$i]['nidno'].'</td>
                                  <td>
                                   <a href="../../Controller/Admin/validatePharmacy.php?id='.$user[$i]['sl'].'">
                                        <input id="btn" type="submit" name="accept" value="accept">
                                    </a>
                                    <a href="../../Controller/Admin/validatePharmacyDl.php?id='.$user[$i]['sl'].'">
                                        <input id="btn" type="submit" name="reject" value="reject">
                                    </a>
                                  </td>
                              </tr>';
                                
                            }

                            ?>

                            
                        </table>
                        
                    </div>
                    <br>

                </div>
                
            </div>
            
        </div>
                         
                
            
    

   <?php include('footer.php');?> 