<?php 


  $con = mysqli_connect("localhost","root","password","unbee");
  $db=mysqli_select_db($con,"unbee"); 
  if ($db)
   { 
     echo ""; 
   } 
  else 
   {
     echo mysqli_error($con,$db); 
   } 

   
?>
