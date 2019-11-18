   </section>
      <!--Navigation Bar End-->

   <!--For Input Lavel--->
    <div class="jumbotron text-center">
        <h1>My File and image</h1>
        <form action=" " method="post" enctype="multipart/form-data">

            <label for="">Id</label>
            <input type="text" name="id" id="id">

            <label for="">Name</label>
            <input type="text" name="name" id="name">
            
            <label for="">Type</label>
            <input type="text" name="type" id="type">

            <label for="">Details</label>
            <input type="text" name="details" id="details">

            <label for="">Syntax</label>
            <input type="text" name="syntax" id="syntax">

            <label for="">Output</label>
            <input type="text" name="output" id="output">

            <label for="file">Image</label>
            <input type="file" name="image" id="image">

            <input type="submit" value="UPLOAD">
        </form>
    </div>

    <!--For Input Lavel End--->




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

 <!--For Show Lavel From Database--->


  

  <!--Save to Database Data-->
    <?php 
    
    $server ="localhost";
    $user ="root";
    $pass ="";
    $dbname ="info";

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
  
    
$sql = "INSERT INTO myphpfile (id, name, type, details, syntax, output, image) VALUES('$id','$name','$type','$details','$syntax','$output','$image')";
    
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
   
    

 