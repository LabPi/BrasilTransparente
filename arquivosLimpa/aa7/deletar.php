<!--
To change this template, choose Tools | Templates
and open the template in the editor.

//
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Jesus Cristo_O Caminho, A Verdade e A Vida
        
        include("conexao.php");
        $id = $_REQUEST["deleteLivro"];
        
        
        #Cria a expressão SQL de alteração
        $sql = "DELETE FROM livros WHERE ID = $id";
        
        #Executa a expressão SQL no servidor e armazena o resultado
        $result = mysql_query($sql);
        
        
        #Verifica o sucesso da operação
        if($result){
            echo 'Livro DELETADO com sucesso.';
            
        }
        else{
            die('Erro: '.mysql_error());
            
        }
        ?>
        
        <a href="listar.php">Listar</a><br>
        <a href="alterar.php">Voltar</a><br>
    </body>
</html>
