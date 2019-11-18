<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN” “http://www.w3.org/TR/html4/loose.dtd 1”>
<html>
<head>
<title>Admin PhpFunct</title>


<?php require_once("inc/admnavg.php"); ?>
<!--For Input Lavel--->
    <div class="jumbotron text-center">
        <h1>My PHP Function</h1>

<?php require_once("inc/adminpout.php"); ?>
    
 <?php
             
$conn = mysqli_connect("localhost", "root", "" , "php");
$sql = "SELECT id, name, type, details, syntax, output, image FROM phpfunction";
 


$result =$conn-> query ($sql);
 	if($result -> num_rows >0){while($row =$result->fetch_assoc()){
                 echo "<tr>
                 <td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["type"]."</td><td>".$row["details"]."</td><td>".$row["syntax"]."</td><td>".$row["output"]."</td><td>".$row["image"]."</td></tr>";} 
echo "</table>"; } else { echo "0 result";}
$conn->close();
             
?>


</table>
     </div>
     <!--For Show Lavel From Database  go to the page adminpout End--->
 </h6>

 </div>

 <!--For Show Lavel From Database end--->


  

  <!--Save to Database Data-->
    <?php 
    
    $server ="localhost";
    $user ="root";
    $pass ="";
    $dbname ="php";

    //Creating Connection for mysqli
     $conn = new mysqli($server, $user, $pass, $dbname);
    
    if($conn->connect_error){
        die ("Connection failed:".$conn->connect_error);
    }
   
    //Checking connetion
    $id=''; 
    $name=''; 
    $type=''; 
    $details=''; 
    $syntax=''; 
    $output=''; 
    $image=''; 
 if (isset($_POST ["id"]) or isset($_POST ["name"]) or isset($_POST ["type"])or isset($_POST ["details"])or isset($_POST ["syntax"])or isset($_POST ["output"])or isset($_POST ["image"])) {
 
$id = mysqli_real_escape_string ($conn, $_POST['id']);
    
$name = mysqli_real_escape_string ($conn, $_POST['name']);
    
$type = mysqli_real_escape_string ($conn, $_POST['type']);

$details = mysqli_real_escape_string ($conn, $_POST['details']);

$syntax = mysqli_real_escape_string ($conn, $_POST['syntax']);

$output = mysqli_real_escape_string ($conn, $_POST['output']);

$image = mysqli_real_escape_string ($conn, $_POST['image']);
  
}
  
    
$sql = "INSERT INTO phpfunction (id, name, type, details, syntax, output, image) VALUES('$id','$name','$type','$details','$syntax','$output','$image')";
    
if($conn -> query($sql)=== TRUE){
        echo "Added Sucesfully<br><br><br>";}
    else{
        echo "Your Entry Errore<br><br><br>";
    }

$image = "image";
if(is_uploaded_file($image)) {
  echo ("$image is uploaded via HTTP POST<br><br><br>");
} else {
  echo ("$image is not uploaded via HTTP POST<br><br><br>");
}
 
    $conn -> close();
    ?>
    

    <!--Save to Database Data End-->
   
    

  
</body>

</html>
