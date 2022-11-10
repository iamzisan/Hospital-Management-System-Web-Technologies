<?php
include('header/patheader.php');
require_once ('../../Controller/Doctor/drmedinfo.php');
$info = gethistory();
?>
<style>
  table {
    border-collapse: collapse;
  margin-left: 398px;
  color: white;
  border: transparent;
  }

  th, td {
    text-align: left;
    padding: 8px;
    background: black;
}
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }

  table tr:not(:first-child){
                 cursor: pointer;transition: all .25s ease-in-out;
             }
             table tr:not(:first-child):hover{background-color: #ddd;}

             .btn {
     background-color: red;
     border: none;
     color: white;
     padding: 12px 16px;
     font-size: 16px;
     cursor: pointer;
  	 border-radius: 10px;
   }


   .btn:hover {
     background-color: RoyalBlue;
   }

   a:link{


     color: white;
     text-decoration: none;

   }
   a:visited{

  color: white;

   }
#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 34%;
  font-size: 16px;
  padding: 12px 74px 12px 40px;
  border: 1px solid #ddd;
margin-bottom: 17px;
    margin-top: 22px;
    margin-left: 422px;

}
  </style>
<section>

 
 <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Date.." title="Type Id">

 <table id="table" border="1">
              <thead>
                <th>Patient Name</th>
                  <th>Phone No</th>
                <th>Medicine</th>
                <th>Tests</th>
                <th>Date</th>

            
            
              </thead>


              <tbody id="output">
                <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                      echo "<td>".$infos["pname"]."</td>";
                        echo "<td>".$infos["phone"]."</td>";
                      echo "<td>".$infos["medicine"]."</td>";
              echo "<td>".$infos["tests"]."</td>";
                echo "<td>".$infos["date"]."</td>";
                    
                     
           
                    echo "</tr>";
                  }
                ?>

              </tbody>








            </table>




          </div>
        </div>
      </div>
	  </section>
  </body>
</html>


      
<script>
$(document).ready(function(){
    $("#myInput").keypress(function(){
      $.ajax({
        type:'POST',
        url:'../Controller/searchhistory.php',
        data:{
          name:$("#myInput").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script> 