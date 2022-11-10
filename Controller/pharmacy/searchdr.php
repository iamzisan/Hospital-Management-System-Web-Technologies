

<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "pharmecy");
$sql = "SELECT * FROM drapp WHERE drname LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['sl']."</td>
		          <td>".$row['drname']."</td>
		          <td>".$row['spec']."</td>
		          <td>".$row['time']."</td>
				  <td>".$row['roomno']."</td>
		         
				   
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
