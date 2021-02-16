<?php
session_start();

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'venue');
$c = $_SESSION['selected'];

$q = "SELECT * from halls where H_NAME = '$c'";
   
$result=mysqli_query($con,$q);
    
    

?>

<html>
    <head>
    <link rel="stylesheet" href="details.css" type="text/css">
    <style>

    
  #table1{
    width: 100%;
    margin-bottom: 20px;
    margin-top: 20px;
  }
  
  #table1 th, #table1, #table1 td{
    border: 2px solid blue;
    border-collapse: collapse;
    padding: 2rem,0;
  }
  
  td img{
    width:80px;
    height:80px;
  }
  td{
    text-align: center;
  }
  .container{
    width: 100%;
    max-width: 120rem;
}

</style>
</head>
<body>


<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style2.css">

<main>
    <div class="hero">
      <div class="container">
        <section class="show">
          <div class="container">
            <div>
                <table bgcolor=" #99bbff
                " id="table1">
              <thead>
				      <tr>
					       <th>Name</th>
					       <th>Capacity</th>
					       <th>Price</th>
                 <th>Contact info</th>
                 <th>Google map</th>	
				      </tr>
			        </thead>
		
			        <tbody>
			    <?php
			          ///$table is a two dimensional array, first loop will return each row of the table
                while($rows=mysqli_fetch_assoc($result)){
				  ?>
				
				      <tr>
					        <td><?php echo $rows['H_NAME'] ?></td>
					        <td><?php echo $rows['CAPACITY'] ?></td>
					        <td><?php echo $rows['PRICE'] ?></td>
                  <td><?php echo $rows['CONTACT'] ?></td>
                  <td><?php echo $rows['MAP'] ?></td>
				      </tr>
				
				  <?php 
			  }
				
			    ?>
			        </tbody>
		          </table>

        
        
        </div> 
        <button type="button">Send Booking Request </button>
                    </section> 
                </div>
            </div>

            

</main>

        
    </div>
</body>
<script>
  function req(){
    location.assign('booking.php');
  }

</script>

</html>