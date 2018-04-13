<?php
    session_start();
    require_once('../includes/conexao.inc');
    require_once('../classes/Funcionario.php');
    
    $c = new Conexao();
    $conexao= $c->getConexao();
    

    if (isset($_REQUEST["login"])){ 
        $usuario = $_REQUEST["login"];
        $senha = $_REQUEST["senha"];
        echo($usuario.'-'.$senha);
        if($usuario!=null || $senha!=null) {        
            $sql = $conexao->prepare("SELECT * FROM funcionario where usuario = :usuario AND senha = :senha");
            $sql->bindValue(':usuario', $usuario);
            $sql->bindValue(':senha', $senha);
            $sql->execute();        

            $funcionario = new Funcionario();
            $funcionario = $sql->fetch(PDO::FETCH_OBJ);
            $_SESSION["usuario"] = $funcionario;
            Header("Location: ../index.php");
        }

        /*/*Retorna toda a tabela usuário
        $consulta = "SELECT * FROM funcionario";
        echo $consulta;

        $resultado = mysqli_query($conecta,$consulta) or die ("Erro na consulta aos dados");

        while ($funcionarios = mysqli_fetch_assoc($resultado)) {
            if ($funcionarios["usuario"] == $usuario){
                if ($funcionarios["senha"] == $senha){
                    $_SESSION["funcionario"]=$funcionarios["nome"];
                    if (isset($url)) {
                        Header("Location: $url");
                    } else {
                        Header("Location: ../index.php");
                    }
                }
            } 
        }*/
    }
