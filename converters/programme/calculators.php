 <h3>Calculators</h3>
    <?php  
    if(isset($_POST['submit']))  
    {   $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2; 
        echo "The Result is   ".$sum;}
else{
    ?>
    <form method="post">
        Enter 1st No<input type="number" name="number1" />
        Enter 2nd No<input type="number" name="number2" />
        <input type="submit" name="submit" value="Summation">
    </form>

<?php } ?>