<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



# DAdos para a conexâo com o banco de dados

$servidor = 'localhost:3306'; #nome DNS ou IP do seu servidor HTTP
$usuario = 'companh1_aquino'; #nome do usuário para acesso no MySQL
$senha = 'fend721'; #senha de acesso
$banco = 'companh1_app001'; #nome do banco de dados


#executa a conexão com o MySQL

mysql_connect($servidor, $usuario, $senha)
        or die("Não conseguimos a abdução requisitada:".  mysql_error());

#seleciona o banco de dados que deseja utilizar
mysql_select_db($banco);
?>
