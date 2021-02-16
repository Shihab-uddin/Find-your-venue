<?php
require'dbconnection.php';
session_start();
if (isset($_GET["submitvendor"])) {

    $vname = $_GET["vname"];
    $vtype = $_GET["vtype"];
    $vprice = $_GET["vprice"];
    $vlocation = $_GET["vlocation"];
    $vcontact = $_GET["vcontact"];

    $adc=" INSERT INTO vendors (v_name,v_type,v_price,v_location,v_contact) values('$vname','$vtype','$vprice','$vlocation','$vcontact')";
    $conn->query($adc);
}
  $_SESSION["loggedIn"] = true;
  $_SESSION['userName'] = $username;
  header('location:home.php');
  ?>