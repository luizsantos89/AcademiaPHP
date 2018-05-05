
<font face="Tahoma">
<table border="0" cellspacing="2" cellspadding="1" width="50%">
    
<?php
require 'classes/Funcionario.php';
session_start();

$funcionarios = $_SESSION['funcionarios'];
?>
    <tr>
        <td>
            <table border="1">
                <tr>
                    <th>ID Funcionário</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Usuario</th>
                    <th>CPF</th>
                    <th>Data de Admissão</th>
                    <th>Data de Demissão</th>
                </tr>
                <?php
                    foreach ($funcionarios as $funcionario) {
                ?>
                    <tr>
                        <td> 
                            <a href="controler/controlerFuncionario.php?opcao=2&id=<?=$funcionario->idFuncionario; ?>"><?=$funcionario->idFuncionario; ?></a>  
                        </td>
                        <td>
                            <?=$funcionario->nome; ?>    
                        </td>
                        <td>
                            <?=$funcionario->email; ?>  
                        </td>
                        <td>
                            <?=$funcionario->usuario; ?>  
                        </td>
                        <td>
                            <?=$funcionario->cpf; ?>  
                        </td>
                        <td>
                            <?=$funcionario->dataAdmissao; ?>  
                        </td>
                        <td>
                            <?=$funcionario->dataDemissao; ?>  
                        </td>
                    </tr>
                    <?php } ?>
            </table>
    </font>
    </center>