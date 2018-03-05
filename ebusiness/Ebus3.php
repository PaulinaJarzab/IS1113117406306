<?php
session_start();

// Set session variables
$_SESSION["name"] = $_POST["name"];
$_SESSION["address"] = $_POST["address"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["myList"] = $_POST["myList"];
$_SESSION["postalcode"] = $_POST["postalcode"];
$_SESSION["number"] = $_POST["number"];
$_SESSION["email"] = $_POST["email"];
       
?>

<!DOCTYPE html>
<html>
    <head>
          
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <title>Receipt</title>
        
       
       <style>
            h4 {
               
                font-size: 50px;
                text-align:center;
            }
            .main {
                text-align:left;
                font-size: 35px;
                
            }
           
       </style>

    </head>
    <body>
        <h4>Purchase Receipt</h4>
        <div style="width:200px; margin:0 auto;">
        <div id="main" data-role="main" class="ui-content">

       
         <?php 
        // Echo session variables that were set on previous page
        echo "Total: $ " . $_SESSION["total"] . ". <br />";
        echo "Customer name: " . $_SESSION["name"] . ". <br />";
        echo "Email: " . $_SESSION["email"] . ". <br />";
        echo "Address: <br /> " . $_SESSION["address"] . ". <br />";
        echo " " . $_SESSION["city"] . ". <br />";
        echo " " . $_SESSION["myList"] . ". <br />";
        echo " " . $_SESSION["postalcode"] . ". <br />";
        echo "Telephone number: " . $_SESSION["number"] . ". <br />";
        ?>
        </div>
        </div>
        
        
        
      
    </body>
</html>
