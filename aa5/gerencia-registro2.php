<!--Jesus Cristo_O Caminho, A Verdade e A Vida-->

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
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


include("conexao.php");

#inserir os valores do formulário nas variáveis

$FormNomeLivro = $_REQUEST["FormldLivro2"];
$FormNomeAutor = $_REQUEST["FormldLivro3"];
$FormNomeEditora = $_REQUEST["FormldLivro4"];


#Cria Expressão  SQL de inserção

                // A tabela no banco de dados MySQL aqui é caSE sensitive

$sql = "INSERT INTO minhasFicalizacoes2 (codigo, municipio, estado) VALUES
    ('$FormNomeLivro', '$FormNomeAutor', '$FormNomeEditora')";


#Executa a expressão SQL no servidor, e armazena o resultado

$result = mysql_query($sql);

#verifica o sucesso da operação

if($result)
    {
    #se a operação foi realizada com sucesso, informa na tela
header("location:minhas.php");


    
}

else
{
    #erro na transação
    die('Erro:'.mysql_error());
}

?>
