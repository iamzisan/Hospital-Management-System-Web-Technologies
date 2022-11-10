
<?php
include('header/Resheader.php');
require_once ('../../Controller/pharmacy/addmed.php');
$info = getmed();
?>


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;

}

#myTable {
  border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 18px;

    color: white;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: mediumseagreen;
}

.container {
  border-radius: 5px;

  padding: 84px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 47%;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.scroll {
border: none;
    padding: 3px;
    font: 11px/36px sans-serif;
    width: 947px;
    height: 591px;
    overflow: scroll;
}
::-webkit-scrollbar {
width: 12px;
height: 12px;
}
::-webkit-scrollbar-track {
border: 1px solid yellowgreen;
border-radius: 10px;
}
::-webkit-scrollbar-thumb {
background: #3cb371;
border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
background: #88ba1c;
}
</style>
 <form  method="post" action="" enctype="multipart/form-data">
           

          <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Name.." title="Type in a name"></center>
 <center><div class="scroll">
<table id="myTable">
  <tr class="header">

    <th style="color:black">Sl </th>
    <th style="color:black">Medicine Name</th>

    
<th style="color:black">Company</th>
    <th style="color:black">Power</th>
	<th style="color:black">Unit Price</th>
	<th style="color:black">Stock</th>


  </tr>
 
  <tbody>
    <?php
      foreach($info as $info)
      {
        echo "<tr>";

        echo "<td>".$info["sl"]."</td>";
        echo "<td>".$info["medname"]."</td>";
  echo "<td>".$info["company"]."</td>";

echo "<td>".$info["power"]."</td>";

            echo "<td>".$info["unitprice"]."</td>";
			 echo "<td>".$info["stock"]."</td>";


        echo "</tr>";
      }
    ?>

  </tbody>
</div>
</table></center>



            </form>





	</div>
	<script>
 function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

        </script>




	</div>
  </body>
</html>