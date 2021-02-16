<?php
  require'dbconnection.php';
    $con= mysqli_connect('localhost','root');
    mysqli_select_db($con,'venue');
    $query="SELECT * from halls";
    $query1="SELECT * from vendors";
    $query2="SELECT * from reviews";
    $query3="SELECT * from payment";
    $result=mysqli_query($con,$query);
    $result1=mysqli_query($con,$query1);
    $result2=mysqli_query($con,$query2);
    $result3=mysqli_query($con,$query3);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find your venue | Admin</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<header class="header">

<div class="container">
   <nav class="nav">
    <a href="home.html" class="logo">
        <img src="./img/logo.JPG" alt="">
    </a>
    <div class="adminp"><h1 class="admintitle">Admin panel</h1></div>
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
            
            <section class="adminhall">


            <div class="main-heading">
                <h2 class="subtitle">All hall details</h2>
            </div>


            <div class="container">
                <div>
                    <table class="t_hall" bgcolor=" #99bbff
                    " id="table1">
                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Contact info</th>
                        
                        </tr>
                        </thead>
            
                        <tbody>
                    <?php
                        ///$table is a two dimensional array, first loop will return each row of the table
                    while($rows=mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                                <td><?php echo $rows['H_NAME'] ?></td>
                                <td><?php echo $rows['L_NAME'] ?></td>
                                <td><?php echo $rows['CONTACT'] ?></td>
                    
                        </tr>
                    
                    <?php 
                }
                    
                    ?>
                        </tbody>
                    </table>

            
            
            </div>    

        </section>

        <section class="adminvendor">

        <div class="main-heading">
                <h2 class="subtitle">All vendor details</h2>
        </div>

        <div class="container">
                <div>
                    <table class="t_vendor" bgcolor=" #99bbff
                    " id="table1">
                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Contact info</th>
                        
                        </tr>
                        </thead>
            
                        <tbody>
                    <?php
                        ///$table is a two dimensional array, first loop will return each row of the table
                    while($rows=mysqli_fetch_assoc($result1)){
                    ?>
                    
                        <tr>
                                <td><?php echo $rows['v_name'] ?></td>
                                <td><?php echo $rows['v_type'] ?></td>
                                <td><?php echo $rows['v_contact'] ?></td>
                    
                        </tr>
                    
                    <?php 
                }
                    
                    ?>
                        </tbody>
                    </table>

            
            
            </div> 

        </section>

        </div>
    </div>
    

    <section class="adminpayment">

    <div class="main-heading">
                <h2 class="subtitle">Subscription details</h2>
    </div>

        <div class="container">
                <div>
                    <table class="t_pay" bgcolor=" #99bbff
                    " id="table1">
                <thead>
                        <tr>
                            <th>Name</th>
                            <th>contact info</th>
                            <th>Duration</th>
                            <th>Action</th>
                        
                        </tr>
                        </thead>
            
                        <tbody>
                    <?php
                        ///$table is a two dimensional array, first loop will return each row of the table
                    while($rows=mysqli_fetch_assoc($result3)){
                    ?>

                    <form action="adminedit.php" class="form">
                       <tr>
                                <td><input type="hidden" name="td1" value="<?php echo $rows['p_hall'] ?>"><?php echo $rows['p_hall'] ?></td>
                                <td><?php echo $rows['p_contact'] ?></td>
                                <td><?php echo $rows['duration'] ?></td>
                                <td><button type="submit" name="delhall" >Delete</button></td>
                               
                    
                        </tr>

                    </form>
                    
                        
                    
                    <?php 
                }
                    
                    ?>
                        </tbody>
                    </table>

            
            
            </div> 

        </section>

        <section class="adminreview">

        <div class="main-heading">
                <h2 class="subtitle">All reviews</h2>
        </div>

        <div class="container">
                <div>
                    <table class="t_review" bgcolor="#99bbff" id="table1">
                <thead>
                        <tr>
                            <th>Email</th>
                            <th>Feedback</th>
                        
                        </tr>
                        </thead>
            
                        <tbody>
                    <?php
                        ///$table is a two dimensional array, first loop will return each row of the table
                    while($rows=mysqli_fetch_assoc($result2)){
                    ?>
                    
                        <tr>
                                <td><?php echo $rows['r_mail'] ?></td>
                                <td><?php echo $rows['feedback'] ?></td>
                    
                        </tr>
                    
                    <?php 
                }
                    
                    ?>
                        </tbody>
                    </table>

            
            
            </div> 

        </section>
</main>

<script src="main.js"></script>
</body>
</html>