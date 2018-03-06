<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="icon" href="/images/Logo.PNG" type="favicon">
        
        <style>
    
        body {
            background-image: url("/images/Ebus1.jpg");
            background-size: cover;
            background-position: center;
            height: 120vh;
            font-family: verdana;
            font-size: 15px;
            }
        
        div {
            background-color: white;
            width: 300px;
            padding: 25px;
            }
            
        label {
            display: inline-block; 
            width:10em;
            }
            
        .next {
            text-decoration: none;
            padding: 10px 20px;
            font-family: verdana;
            font-size: 15px;
            color: #4CAF50;
            background-color: white;
            border-radius: 8px;
            border: 2px solid #4CAF50;
            }
        .next:hover {background-color: #3e8e41}
        
        .next:active {
              background-color: #66ff99;
              box-shadow: 0 5px #666;
              transform: translateY(4px);
            }
        
    </style>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <body>
        
        <center>
            <div>
            <h3>Please enter the following details:</h3>
            <form method="POST" action="Ebus2.php" name="customer details" onSubmit="return validateCustomer()">
                
                <label for="user_name">
                    Name:
                    <input type="text" id="user_name" name="user_name" placeholder="Customer Name" minlength="1">
                </label>
                
                <br>
                
                <label for="user_email">
                    Email:
                    <input type="email" id="user_email" name="user_email" placeholder="Customer Email">
                </label>
            </div>
            
                <br/> 
               
            <div>  
                <h4>Select a product:</h4>
    
                <label for="salesforce">
                    SalesForce @ €100
                </label>
                    <input type="radio" id="salesforce" name="product" style="float:left" checked onClick="disablebtnProceed()"/>
                    
                <label for="cloud9">
                    Cloud 9 @ €200
                </label>
                    <input type="radio" id="cloud9" name="product" style="float:left" onclick="disablebtnProceed()"/>
                    
                <label for="aws">
                    Amazon Web Services @ €300
                </label>
                    <input type="radio" id="aws" name="product" style="float:left" onclick="disablebtnProceed()"/>
                    
                <label for="gmail">
                    Gmail @ €400
                </label>
                <input type="radio" id="gmail" name="product" style="float:left" onclick="disablebtnProceed()"/>
                
            </div>
                
                <br/>
                
            <div>
                <label for="subtotal">
                    Sub Total:
                    <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
                </label>
                
                <label for="discount">
                    Discount @ 5%:
                    <input type="text" id="discount" name="discount" value="0.00" readonly/>
                </label>
                
                <label for="vat">
                    Vat @ 10%:
                    <input type="text" id="vat" name="vat" value="0.00" readonly/>
                </label>
                
                <label for="total">
                    Total:
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
            </div>
                
                <br/>
                
                <button type="submit" class="btnProceed" id="btnProceed" disabled>Add to Shopping Cart</button>
                
            </form>
            
            <br/>
            <br/>
            
            <button onClick="calcSub()" class="btn next">Calculate Cost</button>
            <a role="button" href="Ebus1.php" class="btn next">Clear Choice</a>
            <a href="/ebusiness/shop.html" class="btn next">Cancel Purchase</a>
            </br>
            
        </center>
        
    </body>
    
</html>