<?php
$server="localhost";
$username="root";
$password="";
$database="erp_project";
 $conn=mysqli_connect("localhost","root","","erp_project");

 if ($conn) 
{  
   echo "Connection successfully";  
}
 else{  
       echo "Error";  
      }  
?> 