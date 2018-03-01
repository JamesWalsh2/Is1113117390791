<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <style>
    
        body {
            background-color: lightblue;
            font-family: verdana;
            }
        
        div {
            background-color: white;
            width: 300px;
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


    </style>
    
    <body>
        
        <center>
        
        <h4>Please enter your payment details.</h4>
        
            <br/>
            
            <form method="POST" action="Ebus3.php" name="card details" onSubmit="return validateDetails()">
                
                
                <br/>
                
            <div>
                
                <label for="user_number">
                     Card Number 
                </label>
                
                <input type="integer" id="user_number" name="user_number" placeholder="Card Number" maxlength="16">
            
            <br/>
            
            <label for="user_cvv">
                     CVV 
                </label>
                
                <input type="password" id="user_cvv" name="user_cvv" placeholder="CVV" maxlength="3">
            
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
            
            <br />
            
            <button onClick="validateDetails()" class="btn next"> Validate </button>
        
             <?php
            // Set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            </center>
            
    </body>
    
</html>