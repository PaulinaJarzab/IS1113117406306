<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
        <style>
            h4 {
               
                font-size: 40px;
                text-align:center;
            }
            form {
               text-align:center;
                font-size: 25px;
                
            }
          
            
           
        </style>  
    </head>
    <body>
        
        
        
        
        
       
  <div data-role="main" class="ui-content">
 
    <form method="POST" action="Ebus2.php">
        
      <fieldset data-role="controlgroup" data-type="vertical">
          
          <h4>Select a Product</h4>
          
      
        <label for="salesforce"> SalesForce @ $100 </label>
        <input type="radio" name="product" id="salesforce" checked onClick="disablebtnProceed()"/>
        
        <br>
        
        <label for="cloud9"> Cloud 9 @ $200 </label>
        <input type="radio" name="product" id="cloud9" checked onClick="disablebtnProceed()"/>
        
        <br>
        
        <label for="amazonwebservices"> Amazon Web Services @ $300 </label>
        <input type="radio" name="product" id="amazonwebservices" checked onClick="disablebtnProceed()"/>
        
        <br>
        
        <label for="gmail"> Gmail @ $400 </label>
        <input type="radio" name="product" id="gmail" checked onClick="disablebtnProceed()"/>
        
        <br>
        
      </fieldset>
   
           <label for="subtotal">
                    Sub Total:
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br>
                
                <label for="discount">
                    Discount @ 5% <br>
                    (-Discount)
                      <input type="text" id="discount" value="0.00" readonly/>
                </label>
                
                <br>
                
                 <label for="vat">
                    VAT @ 10% 
                      <input type="text" id="vat" value="0.00" readonly/>
                </label>
                
                <br>
                
                <label for="total">
                    Total:
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                
                <br>
                
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                
                <input type="reset" value="Clear Selection">

            
            </form>
            
                <button onClick="calcSub()">Calculate Cost</button>
                <br>
         
               
    </div>
   
         
    </body>
</html>