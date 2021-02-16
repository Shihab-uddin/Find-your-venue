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
                        <a href="home.html" class="nav-link">Home</a>
                    </li>
            
                </ul>
               </nav>
            </div>
            </header>


        <main>

            <div class="hero">
                <div class="container">
                    <section class="searching">
                        <div class="container">
                            <form action="./outdoor_show.php" class="form">
                                <div class="search-group">
                                    <label for="event-type" class="input-label">Event type</label>
                                    <input type="text" class="input" id="evnt" name='evnt'>  
                                </div>
            
                                <div class="search-group">
                                    <label for="location" class="input-label">Location</label>
                                    <input type="text" class="input" id="loc" name='loc'>  
                                </div>
                                <button type="submit" name='search' class="btn form-btn btn-purple">search</button>
                            </form>
                        </div>
                    </section> 
                </div>
            </div>
        
        </main>


        <script src="main.js"></script>
    </body>