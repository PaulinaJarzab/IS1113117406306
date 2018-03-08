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
         <Title>Receipt</Title>
         <meta charset="utf-8"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
       
       <style>
             body {

                text-align: center;

            }

            .container {

                background-color: #f2f2f2;

                padding: 5px 20px 15px 20px;

                border: 1px solid lightgrey;

                border-radius: 3px;

}





            .row {

                display: -ms-flexbox; /* IE10 */

                display: flex;

                -ms-flex-wrap: wrap; /* IE10 */

                flex-wrap: wrap;

                margin: 0 -16px;

}



            h4 {

            border-bottom: 6px;

            background-color: lightgrey;

            }

            

            h3 {

            border-style: groove;

            }

            .print {

             background-color: #e7e7e7; color: black;;

             display: inline-block;

             color: black;

             border-radius: 8px;

                

            }

            .print:hover {

             background-color: black;

             cursor: pointer;

                color: white;

             

            }

            .button {

             background-color: #e7e7e7; color: black;;

             display: inline-block;

             color: black;

             border-radius: 8px;

                

            }

            .home:hover {

             background-color: green;

             cursor: pointer;

                color: white;

             

            }
            </style>

    </head>
    
    <body>
        <div style="margin-right:auto;margin-left:auto;width:350px;">

        <div class="row">

        <div class="container">
            
        <h4>Purchase Receipt</h4>
        
        
        
    
       
         <?php 
        // Echo session variables that were set on previous page
        echo "Total: $ " . $_SESSION["total"] . ". <br />";
        echo "Customer name: " . $_SESSION["name"] . ". <br />";
        echo "Email: " . $_SESSION["email"] . ". <br />";
        echo "Address: <br /> " . $_SESSION["address"] . " <br />";
        echo " " . $_SESSION["city"] . " <br />";
        echo " " . $_SESSION["country"] . "<br />";
        echo " " . $_SESSION["postalcode"] . ". <br />";
        echo "Telephone number: " . $_SESSION["number"] . ". <br />";
        ?>
        <?php

        // Echo session variables that were on previous page

            echo "Payment Method: VISA Card."

        ?>
       
         
       <h4>Thank you for your purchase.</h4>

        

        <button onclick="myPrint()" class="print">Print Receipt</button>

        
          <a class="button" href="../homepage.html">Home</a>
            

        </div>

        </div>

        </div>

        

        <script>

        function myPrint(){

        window.print();

        }
        </script>
        
      
    </body>
</html>
