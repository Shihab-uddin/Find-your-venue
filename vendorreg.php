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
                        <form action="./vendorreg_action.php" class="form">
                            <div class="inpur-group">
                                <label for="Email" class="input-group">name</label>
                                <input type="text" class="input" id="Email" name="vname">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">your vendor type</label>
                                <input type="text" class="input" id="Email" name="vtype">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">Price</label>
                                <input type="text" class="input" id="Email" name="vprice">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">covered location</label>
                                <input type="text" class="input" id="Email" name="vlocation">
                            </div>
                            <div class="inpur-group">
                                <label for="Email" class="input-group">contact info</label>
                                <input type="text" class="input" id="Email" name="vcontact">
                            </div>
    
                            <button type="submit" name="submitvendor" class="btn form-btn btn-purple">Submit</button>
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