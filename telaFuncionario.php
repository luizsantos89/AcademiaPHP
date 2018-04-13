
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta name="robots" content="noindex, nofollow">
        <!--<meta charset="ISO-8859-1"/>-->
        <title>....:: SGA : Sistema de Gestão de Academias :::....</title>
        <link rel="stylesheet" type="text/css" href="estilos/estilo.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <center>
        <div id="pagina">
            <div id="banner">
                <!-- Implementação do Logotipo -->
                <div id="logotipo">
                        <a href="index.php"><img src="imagens/logo2.png"/></a>
                </div>

                <!-- Implementação do algoritmo de busca -->
                <div id="busca">
                        <form action="index.php" method="get">
                                <input type="text" size="30" name="busca" />
                                <input type="submit" value="Buscar" />
                        </form>
                </div>
            </div>

            <!--Barra de Menus-->
            <div id="menus">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                </ul>
                <ul>
                    <li><a href="">Alunos</a>
                        <ul>
                            <li><a href="">Consultar</a></li>
                            <li><a href="">Cadastrar</a></li>
                            <li><a href="">Relatórios</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li><a href="">Equipamentos</a>
                        <ul>
                            <li><a href="">Consultar</a></li>
                            <li><a href="">Cadastrar</a></li>
                            <li><a href="">Relatórios</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li><a href="">Atividades</a>
                        <ul>
                            <li><a href="">Consultar</a></li>
                            <li><a href="">Cadastrar</a></li>
                            <li><a href="">Relatórios</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="">Sair</a>
                    </li>
                
            </div>     

            <!-- Conteudo da Página -->
            <div id="conteudo">
                Bem-vindo @fulano
            </div>

            <!-- Rodapé da Página -->
            <div id="rodape">
                    <b>Desenvolvido por: <a href="mailto:luiz.santos89@yahoo.com.br">Luiz Santos</a> <br>
                        Seminário III - Bacharelado em Sistemas de Informação - CES/JF
            </div>
        </div>
        </center>
    </body>
</html>