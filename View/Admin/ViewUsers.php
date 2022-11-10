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
                                <a href = "PharmaList.php">
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
                    
                </div>    
                    

            </div>
                
        
        </div>
                         
                
            
<?php include('footer.php');?> 