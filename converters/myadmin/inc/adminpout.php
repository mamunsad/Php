        <form action=" " method="post" enctype="multipart/form-data">
<!--
            <label for="">Id</label>
            <input type="text" name="id" id="id">
            -->

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
     <h6>
<div style="font-size:8px;" class="table-responsive table-hover">
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
 