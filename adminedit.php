<?php
  require'dbconnection.php';
  session_start();
    if (isset($_GET["delhall"])){
    $atc=$_GET["td1"];
    
    $aqc="DELETE from halls where H_NAME='$atc'";
    $conn->query($aqc);

    $aqc1="DELETE from payment where p_hall='$atc'";
    $conn->query($aqc1);
    }



  $_SESSION["loggedIn"] = true;
  $_SESSION['userName'] = $username;
  header('location:admin.php');
?>















<?php
/*?>
    <script>src="jquery.min.js"</script>
    <script>
    $('.table tbody').on('click','btn',function(){
        var currow = $(this).closest('tr');

        var name=currow.find("td:eq(0)").text();
        alert(name);
    })
    </script>
    <?php*/
?>