<?php
$conn = new mysqli("locationhost","root","","final");

if($conn->connect_error){
    die("connection failed !".$conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
 $sql = "SELECT * FROM login WHERE username = '$username' AND password ='$password' ";
 
  if($result->num_rows > 0 ){
  header("location:success.html");
  } 
   else 
   {
   echo "Invalid username or password ." ;
} 

$conn->close();

?>