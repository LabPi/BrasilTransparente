<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

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


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Jesus Cristo_O Caminho, A Verdade e A Vida
        // São José Valei-me!
        
        include 'conexao.php';
        
        #Inserir os valores dos formulários nas variáveis
        
        $FormNome = $_REQUEST["FormNome"];
        $FormLogin = $_REQUEST["FormLogin"];
        $FormSenha = $_REQUEST["FormSenha"];
        
        
        if(empty ($FormNome)){
            
            echo "<script>alert('Campo nome')</script>";
        }
        
        
        if (!empty($FormNome)) {

    #Cria a expressão SQL de inserção
    $sql = "INSERT INTO usuario (nome, login, senha) VALUES
            ('$FormNome', '$FormLogin', '$FormSenha')";

    #Executa a expressão SQL no servidor e armazena o resultado
    $result = mysql_query($sql);

    #Verifica o sucesso da Operação
    if ($result) {
        echo 'A operação foi realizada com sucesso';
        echo "<br><a href='InserirLogin.php>ENTRAR</a>'";
    } else {
        echo 'Login Já existe';
        echo "<br><a href='Cadastro.php'>Voltar</a>";
        die(mysql_error());
    }
}
?>
    </body>
</html>
