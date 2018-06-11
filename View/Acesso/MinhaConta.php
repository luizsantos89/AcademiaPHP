<?php
session_start();

echo 'Página do '.$_SESSION["usuario"]->nome;