<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'venue');


$eventtype = $_GET["evnt"];
$location = $_GET["loc"];


if (isset($_GET['search'])) {
   
    
    $q = "SELECT * from vendors where v_type='$eventtype' && v_location = '$location'";
   
    $result=mysqli_query($con,$q);
}

?>

<html>
    <body>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style2.css">

<main>
    <div class="hero">
                <div class="container">
                    <section class="show">
                        <div class="container">
                    <?php

                             while($rows=mysqli_fetch_assoc($result)){
                    ?>
                       
                       <td><?php echo "<a href='./vendor_details.php' >".$rows['v_name']."</a>";
                        echo "<br>";
                        echo "<br>";
                        $_SESSION['selected'] = $rows['v_name'];
                        $_SESSION['hid'] = $rows['v_id'];
                        ?></td>
                        
                    <?php
                        }  
                    ?> 

                        </div>
                    </section> 
                </div>
            </div>

            <style>
                .show{
                    color:#fff;
                    font-size: 2rem;
                    
                }
            </style>



</main>


<script src="main.js"></script>
    </body>
</html>