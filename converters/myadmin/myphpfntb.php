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
 