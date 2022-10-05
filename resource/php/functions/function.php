<?php
require $_SERVER['DOCUMENT_ROOT'].'/caveportal/php/class/config.php';
function register($firstname, $lastname, $email, $companyid, $contact){
    $conn = conn();
  
    $sql = "INSERT INTO `register` (`firstname`, `lastname`, `email`, `companyid`, `contact`) VALUES ('$firstname','$lastname','$email', '$companyid', '$contact')";

    if (mysqli_query($conn, $sql)) {
      $message = "Credentials Registered Sucessfully";
    } else {
      $message = "Credentials Registered Unsucessfully";
    }
    echo "<script>alert('$message');</script>";
    mysqli_close($conn);
}
?>