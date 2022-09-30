<?php

function register($firstname, $lastname, $email, $companyid, $contact){
  if($_SERVER['REQUEST_METHOD']=='POST') {
    $conn = conn();
  
 
    $firstname = $_POST ['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $companyid = $_POST['companyid'];
    $contact = $_POST['contact'];


    $sql = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `companyid`, `contact`) VALUES ('$firstname','$lastname','$email', '$companyid', '$contact')";

    if (mysqli_query($conn, $sql)) {
       $message = "Credentials Registered Sucessfully";
    } else {
      $message = "Credentials Registered Unsucessfully";
    }
    echo "<script>alert('$message');</script>";
    mysqli_close($conn);
  }
       
}
?>