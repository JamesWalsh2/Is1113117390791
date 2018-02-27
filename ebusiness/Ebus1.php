<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <style>
        
        div {
            background-color: white;
            width: 400px;
            padding: 25px;
            }
        
        .next {
            text-decoration: none;
            padding: 10px 20px;
            font-family: inherit;
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
            
        .btnProceed {
            text-decoration: none;
            padding: 10px 20px;
            font-family: inherit;
            font-size: 15px;
            color: #4CAF50;
            background-color: white;
            border-radius: 8px;
            border: 2px solid #4CAF50;
            }
        .btnProceed:hover {background-color: #3e8e41}
        
        .btnProceed:active {
              background-color: #66ff99;
              box-shadow: 0 5px #666;
              transform: translateY(4px);
            }
        
    </style>
    
    <body>
        
        <center>
        
        <div>
        <h2>Please enter the following details:</h2>
        
        <form method="POST" action="Ebus2.php" name="customer details" onSubmit="return validateCustomer()">
            
            <label for="user_name">
                Name:
            </label>
                
            <input type="text" id="user_name" name="user_name" placeholder="Customer Name" minlength="1">
                
            <br/>
                
            <label for="user_address">
                Address:
            </label>
                
            <input type="text" id="user_address" name="user_naddress" placeholder="Customer Address" minlength="1">
                
            <br/>
                
            <label for="user_email">
                Email:
            </label>
                
            <input type="email" id="user_email" name="user_email" placeholder="Customer Email">
               
            </div>
            
                <br/>
               
            <div>  
            <h4>Select a product:</h4>

            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ €100
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                Cloud 9 @ €200
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                Amazon Web Services @ €300
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ €400
            </label>
            </div>
            
            <br/>
            <br/>
            
            <div>
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="vat">
                Vat @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            </div>
            
            <br/>
            
            <button type="submit" class="btnProceed" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()" class="btn next">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="btn next">Clear Choice</a>
        
        </center>
        
    </body>
    
</html>