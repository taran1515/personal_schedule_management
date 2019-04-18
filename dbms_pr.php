

<html>
   <head>
      <style type="text/css">
         select{
         font-size:20px;
         text-align:center;
         }
         .show-onclick{
         display: none;
		 
         }
         .block {
         display: block;
		 
         }
		 .smanagement{
margin:60px;
font-family: 'Roboto', sans-serif;
font-size:1	20px;
}
		 body{
	margin:0;
	padding:0;
	background:#008080;
	
	font-size:14pt;
	font-family:"Raleway", sans-serif;
}
         fieldset{
			 margin-left:20%;
			 width:60%;
		 }
		 button{
			 margin-left: 48%;
		 }
         
         
      </style>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



     
   </head>
   <body>
   <div class="smanagement">
   <h1><strong><center>Personal Schedule Management</center></strong></h1>
 </div>
   
   	<div>
      <fieldset>
         <legend style="color:white; font-size:40px;">Date</legend>
         <form method="post" action="mainpage.php">
            <label for="tdate">Select Date</label> <input type="Date" name="tdate" value="2018-11-27" required><br><br>
         </form>
      </fieldset><br><br>
      <button class="button" type="button" value="add-task" id="add-task" onclick="myFunction()">Add Task</button>
       <button class="button" type="button" value="submit" onclick="submitForms()" >Submit</button> <br>
      </div>
      
      <div class="task-form" id="Container">
         <fieldset style="width:60%">
            <legend style="color:white; font-size:40px;">#Task</legend>
            <form method="post" action="mainpage.php" id="f1">
             <label for="task-time">Choose Task time: FROM </label><input id="task-time" type="time" name="task-time1a[]" required >
			 To </label><input id="task-time" type="time" name="task-time1b[]" required >
               <input id="task" name="task1[]" type="text" size="50"  style="font-size: 20px" required >
               <select name="label1[]" style="font-size: 20px" >
                  <option value="Chores">Chores</option>
                  <option value="Eat">Eat</option>
                  <option value="Sleep">Sleep</option>
                  <option value="Academic">Academic</option>
                  <option value="Miscellaneous">Miscellaneous</option>
               </select><br>
               
               <br><br>
            </form>
         </fieldset>
         
            </div>
      

      
      




      

   

   </body>
<script>
    $(document).ready(function () {
        $('#add-task').on('click', function () {
            $('#Container')
                .clone().attr("id", 'f1')
    //append clone on the end
                .appendTo("body");
        });
    });
</script>

<script type="text/javascript">
	submitForms = function(){
    document.getElementById("f1").submit();
}
</script>

<!--
<script>
$( '#remove' ).click(function() {
  $(this).parent().remove();  
});
</script>-->


</html>
