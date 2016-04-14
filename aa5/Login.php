<!--Copyright 2016 Companhia Marcial-->

<!--This file is part of Brasil Transparente.

    Foobar is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.

Tradução não-oficial:

    Este arquivo é parte do programa Brasil Transparente

    Brasil Transparente é um software livre; você pode redistribuí-lo e/ou 
    modificá-lo dentro dos termos da Licença Pública Geral GNU como 
    publicada pela Fundação do Software Livre (FSF); na versão 2 da 
    Licença.

    Este programa é distribuído na esperança de que possa ser  útil, 
    mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO
    a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
    Licença Pública Geral GNU para maiores detalhes.

    Você deve ter recebido uma cópia da Licença Pública Geral GNU junto
    com este programa, Se não, veja <http://www.gnu.org/licenses/>.

Este documento deve ir no começo de cada arquivo fonte, perto dos avisos de copyright. Para usar a GPL Menor, coloque a palavra “Menor” depois de “Geral” em todos lugares.-->
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

