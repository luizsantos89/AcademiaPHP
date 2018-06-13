<?php
    require_once('../Model/PagamentoDAO.php');    
    session_start();
    
    if(!isset($_REQUEST['opcao'])) {
        Header("location:../View/Aluno/ManterPagamentos.php");
    }
    
    $opcao = (int)$_REQUEST['opcao'];

    //Lista todos os pagamentos
    if($opcao == 1){
        $pagamentoDAO = new PagamentoDAO();

        $listaPagamentos = $pagamentoDAO->getPagamentos();

        if(isset($_SESSION['pagamentos'])) {
            unset($_SESSION['pagamentos']);
        }
        
        $_SESSION['pagamentos'] = $listaPagamentos;

        header("Location:../View/Aluno/ConsultaPagamentos.php");
    }  
    
    //Registra pagamento
    if ($opcao == 4){
        $pagamento = new Pagamento();           
        $pagamento->idAluno = $_REQUEST["idAluno"];
        $pagamento->valorPagamento = $_REQUEST["valorPagamento"];
        date_default_timezone_set('America/Sao_Paulo');
        $pagamento->dataPagamento = date('Y-m-d H:i:s');
                
        $pagamentoDAO = new PagamentoDAO();
        $pagamentoDAO->incluirPagamento($pagamento);
        
        header("Location:controlerPagamento.php?opcao=1");
    }
    