<!---Hide and Show---
<script>
$(document).ready(function(){
  $("#display").click(function(){
    $("#dspl").toggle(1000);});});</script>
<button id="display">INPUT DISPLAY</button>


<script>
$(document).ready(function(){
  $("#small2capital").click(function(){
    $("#sm2cp").toggle(1000);});});</script>
<button id="small2capital">SMALL TO CAPITAL</button>
-->




<section class="col-sm-2" style="background-color:lavender;">

<ul style="list-style-type:none; margin-left:0;">

<li><button onclick="calCulator()"> CALCULATORS</button>
<script>
function calCulator() {
  var x = document.getElementById("calculator");
  if (x.style.display === "none")
  {x.style.display = "block";} 
else {x.style.display = "none";}
 }
</script></li>
 
 
<li><button onclick="disPlayer()">DISPLAYERS</button>
<script>
function disPlayer() {
  var x = document.getElementById("displayer");
  if (x.style.display === "none")
  {x.style.display = "block";} 
else {x.style.display = "none";}
 }
</script></li>
   
    
<li><button onclick="arRay()"> ARRAY</button>
<script>
function arRay() {
  var x = document.getElementById("array");
  if (x.style.display === "none")
  {x.style.display = "block";} 
else {x.style.display = "none";}
 }
</script></li>
   
    
<li><button onclick="arrayChangecase()"> ARRAY-CASE</button>
<script>
function arrayChangecase() {
  var x = document.getElementById("arraychangecase");
  if (x.style.display === "none")
  {x.style.display = "block";} 
else {x.style.display = "none";}
 }
</script></li>
   
    
<li><button onclick="mF()"> MFS</button>
<script>
function mF() {
  var x = document.getElementById("mf");
  if (x.style.display === "none")
  {x.style.display = "block";} 
else {x.style.display = "none";}
 }
</script></li>
   
    
          
<!--  
leftbar "mf-4+ middlebar "mf-3+ extention "mf.php-1+ headin " mf-1=Total 9

<li><button onclick="mF()"> MFS</button>
<script>
function mF() {
  var x = document.getElementById("mf");
  if (x.style.display === "none")
  {x.style.display = "block";} 
else {x.style.display = "none";}
 }
</script></li>
 -->   
 
   
</ul>  
</section>

