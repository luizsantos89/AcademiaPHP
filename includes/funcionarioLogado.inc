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
                        <a href="">Pagamentos</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="logout.php">Sair</a>
                    </li>
                
            </div>     

            <!-- Conteudo da Página -->
            <div id="conteudo">
                <h1>Bem-vindo <?php echo $_SESSION["usuario"]->nome; ?></h1>
                <br><br>
                <p>Nesse sistema é possível: </p>
                <ul>
                    <li>Cadastrar novos alunos;</li>
                    <li>Consultar alunos cadastrados;</li>
                    <li>Cadastrar novos equipamentos;</li>
                    <li>Consultar equipamentos cadastrados;</li>
                    <li>Cadastrar novas atividades;</li>
                    <li>Consultar as atividades da academia;</li>
                    <li>Emitir diversos relatórios;</li>
                    <li>Registrar os pagamentos.</li>
                    
                </ul>
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