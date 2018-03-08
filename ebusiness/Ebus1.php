<?php
// start the session
session_start();
?>

<!DOCTYPE html>

<html>
    
    <head>
      
      <title>Order</title>
      
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link title="oEmbed Form" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F21072246732346" rel="alternate" type="application/json+oembed"><link title="oEmbed Form" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F21072246732346" rel="alternate" type="text/xml+oembed">
      <meta content="JotForm" property="og:title">
      <meta content="http://www.jotformeu.com/form/21072246732346" property="og:url">
      <meta content="Please click the link to complete this form." property="og:description">
      <link href="https://cdn.jotfor.ms/favicon.ico" rel="shortcut icon">
     
      <meta name="HandheldFriendly" content="true">

      <link href="https://www.jotform.com/form-templates/paypal-pro-payment-form" rel="canonical">
      <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.5070" rel="stylesheet" type="text/css">
      <link href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.5070" rel="stylesheet" type="text/css">
      <link href="https://cdn.jotfor.ms/css/printForm.css?3.3.5070" rel="stylesheet" type="text/css" media="print">




      
      <!--jQuery-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="cost_calc.js"></script>
        
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
      <style>

      .form-label-left{
        width:150px;
      }
      
      .form-line{
        padding-top:12px;
        padding-bottom:12px;
      }
      
      .form-label-right{
        width:150px;
      }
      
      body, html{
        margin:0;
        padding:0;
        
      }

      .form-all{
        margin:0px auto;
        padding-top:0px;
        width:590px;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
      }
      
      .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        
      }
      
      h1 {
            font-size: 50px;
            text-align:center;
      }
        
      form {
            text-align:center;
            font-size: 25px;
      }
      
      button {
        position:absolute;
        
      }
      
</style>

        
        
        
        
    </head>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<body>
     
 <form method="POST" action="Ebus2.php">
  
            
            <h1 class="form-header" id="header_1" data-component="header">
              
              Select Product(s)
           
            </h1>
            
           <h5> Would you like to buy one of our items?</h5>
              
             <h2> My Products </h2>
             
            <div class="form-input" id="cid_3">
            <fieldset data-role="controlgroup" data-type="vertical"> 

              
                    <label for="salesforce"> SalesForce @ $100 </label>
                    <input type="radio" name="product" id="salesforce" checked onClick="disablebtnProceed()"/>
                    
                    
                    
                    
        
                    <label for="cloud9"> Cloud 9 @ $200 </label>
                    <input type="radio" name="product" id="cloud9" checked onClick="disablebtnProceed()"/>
                    
                    
                    
                    
                    

                    <label for="amazonwebservices"> Amazon Web Services @ $300 </label>
                    <input type="radio" name="product" id="amazonwebservices" checked onClick="disablebtnProceed()"/>
                    
                    
                    
                    
                    
                    
   
                    <label for="gmail"> Gmail @ $400 </label>
                    <input type="radio" name="product" id="gmail" checked onClick="disablebtnProceed()"/>
                    
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
          
          
        
               
        </div>
        
        
        <button class="button" onClick="calcSub()">Calculate Cost</button>
        
    </body>
    
</html>