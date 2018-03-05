<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
       
        
        </head>
    <body>
        <div data-role="main" class="ui-content">
        
        <form method="POST" action="Ebus3.php" >
        
            
        <h1> Contact Information </h1>
       
         <label for="email">
                </label>
                <input id="email" name="email" placeholder= "E-mail">
 
                <br>

                
        <h2> Shipping Address </h2>
         <label for="firstname">
                </label>
                <input type="text" id="firstname" placeholder= "First Name">
                
         <label for="lastname">
                </label>
                <input type="text" id="lastname" placeholder= "Last Name">
  
         <label for="address">
                </label>
                <input type="text" name="address" id="address" name="address" placeholder= "Address" >
                
         <label for="city">
                </label>
                <input type="text" name="city" id="city" placeholder= "City" >
            
             
             <select id = "myList" name="myList" >
               <option value = "1">Ireland</option>
               <option value = "2">United Kindom</option>
               <option value = "3">Germany</option>
               <option value = "4">France</option>
             </select>
       
         <label for="postalcode">
                </label>
                <input type="text" name="postalcode" id="postalcode" placeholder= "Postal Code" >
                
    
                <label for="number">
                </label>
                <input type="number" name="number" id="number" placeholder= "Telephone Number" maxlength="10">
                
                <br>
                <br>
                
                <h3>Payment Method</h3>
                
                <label for="cardnumber">
                </label>
                <input type="number" id="cardnumber" placeholder="Card Number" maxlength="16">
                
   
                <label for="name">
                </label>
                <input type="text" id="name" name="name" placeholder= "Cardholder Name">
    
    
                <label for="mmyy">
                </label>
                <input type="text" id="mmyy" placeholder= "MM/YY" maxlength= "7" >
                
                
                 
                <label for="user_pin">
                </label>
                <input type="password" id="user_pin" placeholder= "Card PIN" maxlength= "4" >
                
     
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br>
            
            <button onClick="validateDetails()"> Validate </button>
            </div>
            
        <script type="text/javascript" src="Ebus2_validator.js"></script>
    
        <?php

            // Set session variables

            $_SESSION["total"] = $_POST["total"];

            ?>
    </body>
</html>