<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Enter Details</title>
        <link rel="icon" href="/images/Logo.PNG" type="favicon">
        
        <style>
    
        body {
            background-image: url("/images/CreditCard.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-family: verdana;
            }
        
        div {
            background-color: white;
            width: 300px;
            padding: 25px;
            border: 5px solid gold;
            border-radius: 5px;
            margin: 0;
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
    </style>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        <center>
            <h4>Please enter your payment details.</h4>
            <br/>
            
            <!--onSubmit calls the validation function-->
            <form method="POST" action="Ebus3.php" name="card details" onSubmit="return validateDetails()">
                
            <br/>
                
            <div>
                <label for="user_number">
                     Card Number 
                </label>
                <input type="text" id="user_number" name="user_number" placeholder="Card Number" maxlength="16">
            
            <br/>
            
                <label for="user_cvv">
                     CVV 
                </label>
                <input type="text" id="user_cvv" name="user_cvv" placeholder="CVV" maxlength="3">
            
            <br/>
                
                <label for="user_pin">
                     PIN 
                </label>
                <input type="password" id="user_pin" name="user_pin" placeholder="Pin" maxlength="4">
                    
            </div>
                    
            <br/>
                <button type="Submit" id="btnPurchase" class="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br/>
            
            <a href="/ebusiness/Ebus1.php" class="btn next">Previous</a>
            <button onClick="validateDetails()" class="btn next">Validate</button>
            <a href="/ebusiness/shop.html" class="btn next">Cancel Purchase</a>
        
             <?php
            // Set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            </center>
            
    </body>
    
</html>