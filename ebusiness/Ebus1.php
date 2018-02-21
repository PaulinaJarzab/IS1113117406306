<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <style>
            h4 {
               
                font-size: 40px;
            }
            form {
               
                font-size: 25px;
                
            }
            p {
                 
                 font-size: 25px;
            }
        </style>  
    </head>
    <body>
            <h4>Select a Product</h4>
            
            <form method="POST" action="Ebus2.php">
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    AWS @ $300
                </label>
                <br>
                 <label for= "c9">
                    <input type="radio" id="c9" name="product" checked onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>
                <br
                <label for= "salesforce">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    SalesForce @ $100
                </label>
                <br>
                <label for= "amazon">
                    <input type="radio" id="amazon" name="product" checked onClick="disablebtnProceed()"/>
                    Amazon Web Services @ $300
                </label>
                <br>
                
                <br>
                <label for="subtotal">
                    Sub Total:
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                <br>
                
      
                
                <label for="total">
                    Total:
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                <br>
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </form>
        
                <br>
                <button onClick="calcSub()">Calculate Cost</button>
                <a role="button" href="Ebus1.php">Clear Choice</a>
             
    </body>
</html>