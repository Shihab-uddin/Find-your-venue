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

        <li class="nav-iteam">
            <a href="payment.php" class="nav-link">Own a venue?</a>
        </li>

    </ul>
   </nav>
</div>
</header>

<main>
    <div class="hero">
        <div class="container">
            <div class="main-heading">
                <h1 class="title">welcome</h1>
                <h2 class="subtitle">Lets find something good for you occasion</h2>
            </div>
        </div>
    </div>
    <section class="preview">
       <div class="container">
           <div class="grid">
               <div class="grid-item featured-preview">
                   <img src="./img/party.jpg" alt="" class="center-img">
                   <h5 class="center-name">Convesion centers</h5>
                   <a href="search.php" class="btn btn-gradient">Search
                   </a>
               </div>

               <div class="grid-item featured-preview">
                   <img src="./img/picnic.jpg" alt="" class="center-img">
                   <h5 class="center-name">Outdoor spots</h5>
                   <a href="outdoor_search.php" class="btn btn-gradient">Search
                   </a>
               </div>

                <div class="grid-item featured-preview">
                   <img src="./img/vendors.jpg" alt="" class="center-img">
                   <h5 class="center-name">Vendors</h5>
                   <a href="vendor_search.php" class="btn btn-gradient">Search
                   </a>
                </div>
           </div>
       </div> 
    </section>

    <section class="review">
        <h1 class="review-header">Leave us your reviews!</h1>
            <h1 class="review-header1">any queries or faq's </h1>
        <div class="container">
            <form action="./review_action.php" class="form">
                <div class="inpur-group">
                    <label for="Email" class="input-group">Email</label>
                    <input type="text" class="input" id="Email" name="review_email">
                </div>
                <div class="inpur-group">
                    <label for="review" class="input-group">review</label>
                    <textarea class="rev" id="w3review" name="reviews" rows="4" cols="50"></textarea>
                </div>
                <button type="submit" name="submitreview" class="btn form-btn btn-purple">Submit</button>
            </form>
        </div>
    </section>
</main>

<script src="main.js"></script>
</body>
</html>