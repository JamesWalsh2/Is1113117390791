<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        
        <center>
        
        <h1>Receipt</h1>
        
        <br/>
        
        <?php
        // Echo session variables that were set on previous page
        echo"Name: " . $_SESSION["user_name"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo"Email: " . $_SESSION["user_email"] . ".";
        echo "<br/>";
        echo "<br/>";
        echo"Total is " . $_SESSION["total"] . ".";
        ?>
        
        <a href="homepage.html" class="btn next">Home</a>
        
        </center>
        
    </body>
</html>