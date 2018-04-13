<?php
    session_start(); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_SESSION["usuario"])){
                include("includes/funcionarioLogado.inc");
            } else {
                Header("Location:login.php");
            }
            
        ?>
    </body>
</html>
