<?php
    session_start();
    $atividade = $_SESSION['atividade'];
    $equipamentos = $_SESSION['equipamentos'];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Editar atividade</title>

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
        <a class="btn btn-outline-primary" href="../Acesso/logout.php">Logout</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Atividades</h1>
        <p class="lead">
            Editar atividade <?=$atividade->nome?>:
        </p>
        <p>
            <a class="btn btn-outline-primary" href="CadastraEquipamento.php">Cadastrar</a>
        </p>
    </div>

    <div class="container">
      <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Dados da atividade:</h4>
            <form class="needs-validation" action="../../Controler/controlerAtividade.php?opcao=3" method="post" novalidate>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Nome:</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $atividade->nome?>" required>
                        <div class="invalid-feedback">
                            Forneça um nome válido.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="email">Equipamento:</label>
                        
                        <select name="idEquipamento" class="form-control">
                            <?php
                                foreach($equipamentos as $equipamento) {
                            ?>
                            <option value="<?=$equipamento->idEquipamento;?>"><?=$equipamento->nome;?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
                <input type="hidden" value="<?=$atividade->idAtividade?>" name="idAtividade" />
                <hr class="mb-6">
                <button class="btn btn-outline-primary" type="submit">Alterar dados</button>
                <a  class="btn btn-outline-primary" href="../../Controler/controlerEquipamento.php?opcao=1">Cancelar</a>
            </form>
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
