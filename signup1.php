<?php

session_start();
// if (!$_SESSION["LoginAdmin"])
// {
//     header('location:../login/login.php');
// }
    require_once "connection.php";

// $server="localhost";
// $username="root";
// $password="";
// $database="erp_project";
//  $conn=mysqli_connect("localhost","root","","erp_project");

//  if ($conn) 
// {  
//    echo "Connection successfully";  
// }
//  else{  
//        echo "Error";  
//         }  
if (isset($_POST['submit']))
{
$fname = $_POST['name'];
$email = $_POST['eemail'];
$password = $_POST['ppassword'];



$sql = "INSERT INTO `login_details` (`name`, `email`, `password`) VALUES ('$fname', '$email', '$password');";


$run=mysqli_query($conn,$sql);
if ($run) 
{
                echo "Results Has Been Submitted Successfully";
            }
            else{
                echo  "Results Has Not Been Submitted Successfully";
            }
 }//comment 1
?>
