<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


include("conexao.php");

#inserir os valores do formulário nas variáveis

$FormNomeLivro = $_REQUEST["FormNomeLivro"];
$FormNomeAutor = $_REQUEST["FormNomeAutor"];
$FormNomeEditora = $_REQUEST["FormNomeEditora"];


#Cria Expressão  SQL de inserção

                // A tabela no banco de dados MySQL aqui é caSE sensitive

$sql = "INSERT INTO livros (LIVRO, AUTOR, EDITORA) VALUES
    ('$FormNomeLivro', '$FormNomeAutor', '$FormNomeEditora')";


#Executa a expressão SQL no servidor, e armazena o resultado

$result = mysql_query($sql);

#verifica o sucesso da operação

if($result)
    {
    #se a operação foi realizada com sucesso, informa na tela
    echo 'A operação foi realizada com sucesso!';
    
}

else
{
    #erro na transação
    die('Erro:'.mysql_error());
}

?>
