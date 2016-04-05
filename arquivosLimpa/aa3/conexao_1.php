<?php

/*
 * Jesus Cristo_O Caminho, A Verdade e A Vida
 */



# DAdos para a conexão com o banco de dados

$servidor = 'localhost'; #nome DNS ou IP do seu servidor HTTP
$usuario = 'root'; #nome do usuário para acesso no MySQL
$senha = ''; #senha de acesso
$banco = 'babeloteca'; #nome do banco de dados


#executa a conexão com o MySQL

mysql_connect($servidor, $usuario, $senha)
        or die("Não conseguimos a abdução requisitada:".  mysql_error());

#seleciona o banco de dados que deseja utilizar
mysql_select_db($banco);
?>
