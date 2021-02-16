<?php
  require'dbconnection.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find your venue</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<header class="header">

<div class="container">
   <nav class="nav">
    <a href="home.html" class="logo">
        <img src="./img/logo.JPG" alt="">
    </a>
    <div class="hamburger-menu">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </div>
    <ul class="nav-list">
        <li class="nav-iteam">
            <a href="welcome.html" class="nav-link">LogOut</a>
        </li>
    </ul>
   </nav>
</div>
</header>

<main>
    <div class="hero">
        <div class="container">
            <div class="main-heading">


                <section class="addvenue">
                    <div class="container">
                        <form action="./venuereg_action.php" class="form">
                            <div class="inpur-group">
                                <label for="Email" class="input-group">hall name</label>
                                <input type="text" class="input" id="Email" name="hall_name">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">hall type</label>
                                <input type="text" class="input" id="Email" name="hall_type">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">capacity</label>
                                <input type="text" class="input" id="Email" name="hall_capacity">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">Price </label>
                                <input type="text" class="input" id="Email" name="hall_price">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">location </label>
                                <input type="text" class="input" id="Email" name="hall_location">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">contact no. </label>
                                <input type="text" class="input" id="Email" name="hall_contact">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">Location Map</label>
                                <input type="text" class="input" id="Email" name="hall_map">
                            </div>
                            <button type="submit" name="submitvenue" class="btn form-btn btn-purple">Submit</button>
                            <a href="vendorreg.php" class="nav-link">Are you a vendor? </a>
                        </form>
                    </div>
                </section>


                
            </div>
        </div>
    </div>
    

    
</main>

<script src="main.js"></script>
</body>
</html>