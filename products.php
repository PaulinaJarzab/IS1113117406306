<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="utf-8"/>
     
        <title>Products Available</title>
        
        <!--links to relating pages and fonts-->
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
        <link rel="stylesheet" href="int_pages.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--styling page-->
        <style>
    
    
        .products li {
            width: 320px;
            display: inline-block;
            vertical-align: top;
            text-align:center;
        }
        
        body {
            background: url(http://www.micronice.com/wp-content/uploads/sites/53/2015/02/Background.jpg)no-repeat center fixed;
            background-size: cover;
        }
        
        h1 {
            text-align: center;
            font-size: 60px;
        }
    
    </style>
    
    </head>
    
    <body>
        
        <h1>Products Available for Purchase</h1>
        
        <br>
        <br>
        
        <!--displaying products available-->
        <ul class="products">
            
            <li>
                <img alt="salesforce icon" width="220" height="220" src="http://2wyzqu1t50vr2esar426fpzd.wpengine.netdna-cdn.com/wp-content/uploads/2015/12/Logo-Salesforce-1.png">
                <h4> Salesforce </h4>
                <p>$100.00</p>
                
            </li>
            
            <li>
                <img alt="c9 icon" width="220" height="220" src="https://svg2raster.fileformat.info/vlz.jsp?svg=%2Flogos%2Fc9%2Fc9-ar21.svg&amp;width=220&amp;height=220">
                <br>
                <h4> Cloud 9 </h4>
                <p>$200.00</p>
           
            </li>
            
            <li>
                <img alt="aws icon" width="220" height="220" src="https://www.klipfolio.com/sites/default/files/integrations/aws.png">
                <h4> Amazon Web Services </h4>
                <p>$300.00</p>
                
             </li>
             
             <li>
                <img alt="gmail icon" width="220" height="220" src="https://www.techczargroup.com/wp-content/uploads/2015/07/gmail_icon-220x220.png">
                <h4> Gmail </h4>
                <p>$400.00</p>
                
            </li>
            
        </ul>
        
        <br>
        <br>
        <br>
        
        <div style= "text-align: center;" >
    	<a href="../ebusiness/Ebus1.php" class="btn btn-success"> Proceed to select a product </a>
        </div>
     
    </body>
    
</html>