<?php
session_start();

include 'config.php';

$uname = $_POST['email'];
$pass = $_POST['pass'];



$sql = "SELECT * FROM user where email='$uname' and pass='$pass' and status='Active' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $_SESSION["user"] = array(
    "name" => $row["fname"]." ".$row["lname"],
    "email" => $row["email"],
    "id"=> $row["id"],
  );

  header('Location:/Quizwebsite/home.php');
} else {

 echo '<script> alert("Invalid Details Or blocked by Admin Please try Again!")</script>';
      echo "<script type='text/javascript'> document.location = 'signin.html';</script>";
}
$conn->close();

?>