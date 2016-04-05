<?php

/*
 * Jesus Cristo_O Caminho, A Verdade e A Vida
 */

include 'conexao.php';

#Inserir os valores do formulário nas variáveis
$FormLogin = (string)$_REQUEST["FormLogin"];
$FormSenha = $_REQUEST["FormSenha"];

#Cria a expressão SQL de consulta aos registros
$sql = "SELECT * FROM usuario where login = '$FormLogin'";

#Exibe os resultados
$result = mysql_query($sql);



#Se o valor da consulta for verdadeiro que dizer se ele for encontrado
if($result){
    $tbl = mysql_fetch_array($result);
    
    #Verifica se o login do banco é igual ao digitado pelo usuário
    if($FormLogin == $tbl["login"]){
        
        #Verifica se a senha do banco é igual à digitada pelo usuário
        if($FormSenha == $tbl["senha"]){
            
         #REdireciona o site para a página encontrada
         $redirecionar = "TESTE.php";
         header("Location: $redirecionar");
        }
        
        else{
           
            echo "Senha ERRADA<br><a href='inserirLogin.php'>voltar</a>";
        }
    }
    else{
        
        echo "Login nao existe <br> <a href = 'cadastro.php'>Cadastrar Login</a>";
    }
}
    else{
        die(mysql_error());
        
        }
?>

