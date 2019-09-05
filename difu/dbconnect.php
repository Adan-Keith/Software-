<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteli";


$conn =mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "INSERT INTO food (Foods, Picture, Price)
VALUES ('".$_POST["Food"]."','".$_POST["Picture"]."','".$_POST["Price"]."')";

if (mysqli_query($conn, $sql)) 
 {
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>