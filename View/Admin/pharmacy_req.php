<?php 
    $title = 'pharmacy Requests';
    include('header.php');
?> 

    <div id = "mainview">

        <div class= "docReq">
            <legend style="text-transform:uppercase; font-weight:bold; font-size:18px;"> <center> Pharmacy Requests </center> </legend>
            <br>
        <table id="doctor">
                           <table id="doctor">
                            <tr>
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
                                  <td>'.$user[$i]['email'].'</td>
                                  <td>'.$user[$i]['address'].'</td>
                                  <td>'.$user[$i]['username'].'</td>
                                  <td>'.$user[$i]['password'].'</td>
                                  <td>'.$user[$i]['dob'].'</td>
                                  <td>'.$user[$i]['licenceno'].'</td>
                                  <td>'.$user[$i]['storeno'].'</td>
                                  <td>'.$user[$i]['nidno'].'</td>
                                  <td>
                                   <a href="../../Controller/Admin/validatePharmacyDl.php?id='.$user[$i]['sl'].'">
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

    </div>

<?php include('footer.php');?> 