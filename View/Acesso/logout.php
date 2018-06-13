<?php
session_start();
unset($_SESSION['usuario']);
Header("Location: ../../index.php");

?>