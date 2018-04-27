<?php
    session_start();

    if(isset($_SESSION["usuario"])){
        include("includes/funcionarioLogado.inc");
    } else {
        Header("Location:login.php");
    }

?>