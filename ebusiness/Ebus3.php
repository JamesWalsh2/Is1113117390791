<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>Receipt</h4>
        
        <?php
        // Echo session variables that were set on previous page
        echo"Name: " . $_SESSION["user_name"] . ".";
        echo"Email: " . $_SESSION["user_email"] . ".";
        echo"Total is " . $_SESSION["total"] . ".";
        ?>
        
    </body>
</html>