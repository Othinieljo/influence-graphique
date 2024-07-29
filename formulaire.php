<?php
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $date=gmdate("Y-m-d");

  include("bdd.php");

  $sql="INSERT INTO t_message (`nom`,`prenom`,`email`,`message`,`date`) VALUES ('$nom','$prenom','$email','$message','$date') ";
  $conn->exec($sql);
  if($conn){
    echo" <script text='javascript'>alert('Message envoyé')</script> "; 
    header("Location:contact.html");
  }
 else{
 echo" <script text='javascript'>alert('Message non envoyé! Veuillez ressayer ')</script> ";
 header("Location:contact.html");
 }
  ?>