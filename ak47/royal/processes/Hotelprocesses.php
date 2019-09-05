<?php

require "dbHotelConnect.php";

$firstname =  $_POST["firstname"];
$lastname =  $_POST["lastname"];
$mobilenumber =  $_POST["mobilenumber"];
$email = $_POST["email"];
$username = $_POST["username"];
$password =  $_POST["password"];
$ConfPass = $_POST["ConfPass"];


$user_insert = "INSERT INTO users(firstname,lastname,mobilenumber,email, username, password) VALUES('$firstname','$lastname','$mobilenumber','$email','$username','$password')";

if($conn->query($user_insert) === TRUE){
   print"A new user was registered successfully";
}else{
	print $conn->error;
}





?>