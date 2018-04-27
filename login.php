<?php
session_start();
if(isset($_SESSION["usuario"])) {
    Header("location:index.php");
} 

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta name="robots" content="noindex, nofollow">
        <!--<meta charset="ISO-8859-1"/>-->
        <title>....:: SGA : Sistema de Gestão de Academias :::....</title>
        <link rel="stylesheet" type="text/css" href="estilos/estilo.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Bootstrap core CSS -->
        <link href="estilos/css/bootstrap.min.css" rel="stylesheet">
        
        <style type="text/css">
            html,
            body {
              height: 100%;
            }

            body {
              display: -ms-flexbox;
              display: -webkit-box;
              display: flex;
              -ms-flex-align: center;
              -ms-flex-pack: center;
              -webkit-box-align: center;
              align-items: center;
              -webkit-box-pack: center;
              justify-content: center;
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #f5f5f5;
            }

            .form-signin {
              width: 100%;
              max-width: 330px;
              padding: 15px;
              margin: 0 auto;
            }
            .form-signin .checkbox {
              font-weight: 400;
            }
            .form-signin .form-control {
              position: relative;
              box-sizing: border-box;
              height: auto;
              padding: 10px;
              font-size: 16px;
            }
            .form-signin .form-control:focus {
              z-index: 2;
            }
            .form-signin input[type="email"] {
              margin-bottom: -1px;
              border-bottom-right-radius: 0;
              border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }
            span {
                color: red;
                font-family: "Times New Roman";
                font-size: smaller;
            }
        </style>
    </head>

    <body class="text-center">
        <form class="form-signin" action="controler/processaLogin.php" method="post">
            <img class="mb-4" src="imagens/logo2.png" alt=""><br><br>
            <?php
                if(isset($_GET["erro"])){
                    if($_GET["erro"]==1){
                        echo '<span class="error">Login/Senha incorretos</span><br><br>';
                    }
                }
            ?>            
            <label class="sr-only">Login:</label>
            <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
            <label class="sr-only">Senha:</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
            <p class="mt-5 mb-3 text-muted">&copy; Luiz Santos 2018</p>
        </form>
    </body>
</html>
