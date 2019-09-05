<?php
// connection constants
   $hostname ="localhost";
   $hostuser ="root";
   $hostpass ="";
   $dbname ="dbHotel";

 // Creating  the connection 
 
  $conn = new mysqli($hostname, $hostuser, $hostpass, $dbname);  

 // verify the connection
 
  if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
  }else{
  	print"Connection Successfull";
  } 




?>