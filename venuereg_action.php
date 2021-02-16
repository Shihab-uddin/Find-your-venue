<?php
require'dbconnection.php';
session_start();
if (isset($_GET["submitvenue"])) {

    $hname = $_GET["hall_name"];
    $htype = $_GET["hall_type"];
    $hcapacity = $_GET["hall_capacity"];
    $hprice = $_GET["hall_price"];
    $hlocation = $_GET["hall_location"];
    $hcontact = $_GET["hall_contact"];
    $hmap = $_GET["hall_map"];

    $abc=" INSERT INTO halls (H_NAME,H_TYPE,CAPACITY,PRICE,L_NAME,CONTACT,MAP) values('$hname','$htype','$hcapacity','$hprice','$hlocation','$hcontact','$hmap')";
    $conn->query($abc);


    $pay=" INSERT INTO payment (p_hall,p_contact,duration) values('$hname','$hcontact','30')";
    $conn->query($pay);
}
  $_SESSION["loggedIn"] = true;
  $_SESSION['userName'] = $username;
  header('location:home.php');
  ?>