<h3>Displayers</h3>

<?php
if(isset($_POST['name']) && isset($_POST['contact'])){
 echo "The Name of The Person is". $_POST['name']."</a><br>";
echo "And the Address is  ".$_POST['contact'];
}else{
?>
<form action="" method="POST">
    Name: <input type="text" name="name">
    E-mail: <input type="text" name="contact">
    <input type="submit" value="Display">
</form>
<?php } ?>