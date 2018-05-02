
<font face="Tahoma">
<table border="0" cellspacing="2" cellspadding="1" width="50%">
    
<?php

session_start();

$funcionarios = $_SESSION['funcionarios'];
foreach ($livros as $livro) {
    
}
?>
    <tr>
        <td>
            <table border="0">
                <tr>
                    <td> 
                       ID: <?=$funcionario->idFuncionario; ?>  
                    </td>

                </tr>
                <tr>
                    <td>
                        Nome: <?=$funcionario->nome; ?>    
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail:  <?=$funcionario->email; ?>  
                    </td>
                </tr>
                <tr>
                    <td>
                        Usuário: <?=$funcionario->usuario; ?>  
                    </td>
                </tr>
                <tr>
                    <td>
                        CPF: <?=$funcionario->cpf; ?>  
                    </td>
                </tr>
                <tr>
                    <td>
                        Data de Admissão: <?=$funcionario->dataAdmissao; ?>  
                    </td>
                </tr>
                <tr>
                    <td>
                        Data de Demissão: <?=$funcionario->dataDemissao; ?>  
                    </td>
                </tr>
            </table>
        </td>
    </tr>
	</font>
	</table>
	</center>