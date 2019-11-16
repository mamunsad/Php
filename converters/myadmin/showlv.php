 <!--For Show Lavel From Database--->

 <div class="container">
     <h1 class="text-center text-white bg-dark">
         My Database
     </h1><br>
     <div class="table-responsive table-hover">
         <table class="table table-bordered table-striped">
             <thead>
                 <th> ID </th>
                 <th> NAME </th>
                 <th> TYPE </th>
                 <th> DETAILS </th>
                 <th> SYNTAX </th>
                 <th> OUTPUT </th>
                 <th> IMAGE</th>
             </thead>
         

 <!--For Show Lavel From Database End--->
 
 <?php
             
$conn = mysqli_connect("localhost", "root", "" , "info");
$sql = "SELECT id, name, type, details, syntax, output, image FROM myphpfile";
 


$result =$conn-> query ($sql);
 	if($result -> num_rows >0){while($row =$result->fetch_assoc()){
                 echo "<tr>
                 <td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["type"]."</td><td>".$row["details"]."</td><td>".$row["syntax"]."</td><td>".$row["output"]."</td><td>".$row["image"]."</td></tr>";} 
echo "</table>"; } else { echo "0 result";}
$conn->close();
             
?>


</table>
     </div>
 </div>
