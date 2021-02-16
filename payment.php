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
            <section class="preview">
       <div class="container">
           <div class="grid">
               <div class="grid-item featured-preview">
                   <img src="./weekly.jpg" alt="" class="center-img">
                   <h5 class="center-name">$10</h5>
                   <h5 class="center-name">weekly</h5>
                   <a href="paymentform.php" class="btn btn-gradient">go
                   </a>
               </div>

               <div class="grid-item featured-preview">
                   <img src="./weekly.jpg" alt="" class="center-img">
                   <h5 class="center-name">$25</h5>
                   <h5 class="center-name">monthly</h5>
                   <a href="paymentform.php" class="btn btn-gradient">go
                   </a>
               </div>

                <div class="grid-item featured-preview">
                   <img src="./weekly.jpg" alt="" class="center-img">
                   <h5 class="center-name">$50</h5>
                   <h5 class="center-name">yearly</h5>
                   <a href="paymentform.php" class="btn btn-gradient">go
                   </a>
                </div>
           </div>
       </div> 
    </section>
            </div>
        </div>
    </div>
</main>

<script src="main.js"></script>
</body>
</html>