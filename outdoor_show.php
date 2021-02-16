<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'venue');


$eventtype = $_GET["evnt"];
$location = $_GET["loc"];


if (isset($_GET['search'])) {
   
    
    $q = "SELECT * from picnic where S_type='$eventtype' && s_location = '$location'";
   
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
                       
                       <td><?php echo "<a href='./outdoor_details.php' >".$rows['spot_name']."</a>";
                        echo "<br>";
                        echo "<br>";
                        $_SESSION['selected'] = $rows['spot_name'];
                        $_SESSION['hid'] = $rows['picnic_id'];
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