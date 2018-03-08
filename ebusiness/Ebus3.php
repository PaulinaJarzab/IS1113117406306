<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <meta charset="utf-8"/>
        <!--Internal Style sheet-->
        <style>
        
            .buttonhome {
                background-color: white;
                border: none;
                color: red;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                    }
                    
                .buttonprint {
                background-color: white;
                border: none;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                    }
                    
                .content {
                  width: 350px ;
                  margin-left: auto ;
                  margin-right: auto ;
                  text-align: left;
                  font-size:20px;
                  
                    }    
                    
                .row {
                  display: -ms-flexbox; /* IE10 */
                  display: flex;
                  -ms-flex-wrap: wrap; /* IE10 */
                  flex-wrap: wrap;
                  margin: 0 -16px;
                }
                
                .container {
                  background-color: black;
                  padding: 10px 20px 15px 20px;
                  border: 1px solid lightgrey;
                  border-radius: 3px;
                  color:white;
                 
                }
                h4 {
                    font-size:50px;
                }
        </style>
    </head>
    
    <body>
        <!--Adding the content part of the page which is then wrapped using the row and container divs-->
        <div class="content">
        <div class="row">
        <div class="container">
        <h4 style="text-align:center;">Receipt</h4>
                
        <!--Transferring the variables taken from Ebus1 and Ebus2-->
        <?php
        echo "Customer Name: " . $_POST["name"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail: " . $_POST["email"] . ".";
        ?>
        <br/>
        <?php
        echo "Subtotal: $" . $_SESSION["subtotal"] . ".";
        ?>
        <br/>
        <?php
        echo "VAT: $" . $_SESSION["vat"] . ".";
        ?>
        <br/>
        <?php
        echo "Discount: $" . $_SESSION["discount"] . ".";
        ?>
        <br/>
        <?php
        echo "Total: $" . $_SESSION["total"] . ".";
        ?>
       
        <br/> <br/>
        <a href="../homepage.html" class="buttonhome">Return Home</a>
        <button onclick="myPrint()" class="buttonprint">Print Receipt</button>
        </div>
        </div>
        </div>
        
        <!--Adding a function to allow a print option-->
        <script>
        function myPrint() {
            window.print();
                }
        </script>

        
    </body>
</html>