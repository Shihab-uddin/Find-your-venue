<?php
require'dbconnection.php';
session_start();
if (isset($_GET["submitreview"])) {
    $username = $_GET["review_email"];
    $useremail = $_GET["reviews"];
    $qy=" INSERT INTO reviews (r_mail,feedback) values('$username','$useremail')";
    $conn->query($qy);
}
  $_SESSION["loggedIn"] = true;
  $_SESSION['userName'] = $username;
  header('location:home.php');
  ?>