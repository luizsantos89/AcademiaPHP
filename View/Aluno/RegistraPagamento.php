<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Efetuar Pagamento</title>
    
    <script type="text/javascript" src="../../estilos/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="../../estilos/js/jquery.maskedinput-1.1.4.pack.js"/></script>

    <script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
    </script>
  

    <!-- Bootstrap core CSS -->
    <link href="../../estilos/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../estilos/css/pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <img class="my-0 mr-md-auto font-weight-normal" src="../../imagens/logo2.png" />
        <nav class="my-2 my-md-0 mr-md-3">
            <?php include '../../includes/Menu.php'; ?>
        </nav>
      <a class="btn btn-outline-primary" href="logout.php">Logout</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pagamentos</h1>
        <p class="lead">
            Registrar Pagamento:
        </p>
        
        <h3> </h3>
    </div>

    <div class="container">
        <div >
            <?php
                if(isset($_SESSION['alunos'])){
                    $alunos = $_SESSION['alunos'];
                ?>
                <form action="../../Controler/controlerPagamento.php?opcao=4&" method="post">
                    <table>
                        <tr>
                            <td>Aluno: </td>
                            <td>
                                <select name="idAluno">                        
                                    <?php
                                        foreach ($alunos as $aluno) {
                                    ?>
                                        <option value="<?=$aluno->idAluno?>"><?=$aluno->nome?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>Valor: R$</td>
                            <td><input type="text" class="form-control" id="valorPagamento" name="valorPagamento"></td>
                        </tr>

                        <tr>
                            <td colspan="2"><button type="submit" class="btn btn-primary">Registrar</button></td>
                        </tr>
                    </table>
                </form>
            <?php
                } else {
                    echo("<h3>Não há alunos cadastrados</h3><p><a href='CadastraAluno.php'>Cadastrar?</a></p><br>");
                }
                
            ?>
        </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            
            <small class="d-block mb-3 text-muted">Desenvolvimento por <a href="mailto:luiz.santos89@yahoo.com.br">Luiz Santos</a> - Seminário III - Bacharelado em Sistemas de Informação - Centro de Ensino Superior de Juiz de Fora - CES/JF </small>          
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
          bg: '#55595c',
          fg: '#eceeef',
          text: 'Thumbnail'
        });
    </script>
    </body>
</html>
