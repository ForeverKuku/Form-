<?php
//nclude db connection 
$conn = mysqli_connect('localhost', 'root', '', 'Exam');

if(isset($_POST['submit'])){
   $firstName=$_POST['firstName'];
   $lastName=$_POST['lastName'];
   $email=$_POST['email'];
   $password=$_POST['password'];
 
   

  // insert data
 $success= mysqli_query($conn,"INSERT INTO `register`(`firstName`, `lastName`, `email`,
   `password`) VALUES ('$firstName',  
   '$lastName','$email','$password')");

  header("location:index.php");
  if($success==1)  
  {  
     echo'<script>alert("Inserted Successfully")</script>';  
  }  
else  
  {  
     echo'<script>alert("Failed To Insert")</script>';  
  }
}


?>