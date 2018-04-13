<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta name="robots" content="noindex, nofollow">
        <meta charset="ISO-8859-1"/>
        <title>....:: SGA : Sistema de Gestão de Academias :::....</title>
        <link rel="stylesheet" type="text/css" href="estilos/login.css" />
    </head>
    <body>
        <div id="container" class="container">
            <form class="container-login" method="get" action="controler/processaLogin.php">
                <img src="imagens/logo2.png">
                
                <br><br>
                
                <label>
                    <input type="text" name="login" placeholder="Entre com seu login" size="35px">
                </label>

                <label>
                    <input type="password" name="senha" placeholder="Entre com sua senha" size="35px">
                </label>
                
                <button type="submit">Acessar o sistema</button>
                
                <br><br>

                <p>
                    <small><a href="">Esqueci a senha</a></small>
                </p>
            </form>
        </div>
    </body>
</html>
