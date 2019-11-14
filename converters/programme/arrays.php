<h3>Array Change Case</h3>
<!--
<form action="index.php" method="post">
    Data1: <input type="text" name="data1">
    Data2: <input type="text" name="data2">
    Data3: <input type="text" name="data3">
    
    <input type="submit" value="Display">
</form>
    <?php echo $_POST["data1"]; ?>
    -->

<p style="display:block;">
   
    <a style="color:blue;">Welcome</a>
    <?php 
    $_POST = array("data1","data2","data3");
    
    echo "Hello Mr. ".$_POST[0] . " " .$_POST[1] . " " .$_POST[2] . "." ;
    
    
    ?>
</p>
   <p>  
    <a style="color:blue;">Welcome</a>
    <?php 
    $_POST = array("Volvo","BMW","Toyota");
    $arrlength = count($_POST);
    
    for($x=0; $x<$arrlength; $x++)
    {
    echo "Hello Mr. ".$_POST[$x] . " " .$_POST[$x] . " " .$_POST[$x] . "." ;
    }
    
    ?>
</p>
   <p>
       <a style="color:blue;">Welcome</a>
    <?php 
    $_POST = array("Data1"=>"data1","Data2"=>"data2","Data3"=>"data3");
    
    echo "Hello Mr. ".$_POST['Data1'] . " then  " .$_POST["Data2"] . " then " .$_POST["Data3"] . "." ;
    
    
    ?>
</p>
   
    <br>
    
    <a style="color:blue;">Your Contact</a>
    

<p> An array() is a function</p>
<p> In PHP, There are 3 types of array() function</p>
<ul>
    <li><b>Index Array</b> is for numaric index .[syntax: array(value1,value2,value3)]</li>
    <li><b>Associative Array</b> is for named keys.[syntax: array(key=>value,key=>value)]  </li>
    <li><b>Multimedia Array</b> is for containing one or more arrays </li>
    
</ul>
    

