<?php 
    $title = 'Doctor Requests';
    include('header.php');
?> 

    <div id = "mainview">

        <div class= "docReq">
            <legend style="text-transform:uppercase; font-weight:bold; font-size:18px;"> <center> Doctor Requests </center> </legend>
            <br>
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
                                   <a href="../../Controller/Admin/validateDocDl.php?id='.$user[$i]['id'].'">
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

    </div>

<?php include('footer.php');?> 