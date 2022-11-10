

<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "patient");
$sql = "SELECT * FROM medicine WHERE date LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['pname']."</td>
		          <td>".$row['phone']."</td>
		          <td>".$row['medicine']."</td>
		          <td>".$row['tests']."</td>
				  <td>".$row['date']."</td>
		       
				   
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
