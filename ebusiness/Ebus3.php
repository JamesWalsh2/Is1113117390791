<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Receipt</title>
        <link rel="icon" href="/images/Logo.PNG" type="favicon">
        
        <style>
    
        body {
            background-image: url("/images/HandshakeReceipt.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            font-family: verdana;
            }
        
        div {
            background-color: white;
            width: 300px;
            padding: 25px;
            border: 5px solid green;
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
    
    <script>
        function printPage() {
            window.print();
        }
    </script>
    
    </head>
    
    <body>
        
        <center>
        
        <h1>Receipt</h1>
        
        <br/>
        
        <div>
        <?php
        // Echo session variables that were set on previous page
        echo"Name: " . $_SESSION["user_name"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo"Email: " . $_SESSION["user_email"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo"Total cost is €" . $_SESSION["total"] . ".";
        ?>
        </div>
        
        <br/>
        <br/>
        
        <button onclick="printPage()" class="btn next">Print Receipt</button>
        <a href= "/ebusiness/shop.html" class="btn next">Return</a>
        
        </center>
        
    </body>
</html>