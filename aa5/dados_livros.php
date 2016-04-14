<!Jesus Cristo_O Caminho, A Verdade e A Vida-->

<!--
To change this template, choose Tools | Templates
and open the template in the editor.

HADOOP + PHP
http://www.godlikemouse.com/2010/12/10/using-hadoop-and-php/

http://www.slideshare.net/Wombert/largescale-data-processing-with-hadoop-and-php-phpbnl2012-20120127

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
        // Jesus Cristo
        
        include("conexao.php");
        $id = $_REQUEST["FormldLivro"];
        
        $sql = "SELECT * FROM livros WHERE ID = $id";
        
        
        #Executa a expressão SQL no servidor e armazena o resultado
        $result = mysql_query($sql);
        
        #Copia o resultado da pesquisa dentro de um vetor
        $tbl = mysql_fetch_array($result);
        
        #Verifica o sucesso da operação
        if($tbl)
        {
            echo "Livro encontrado com sucesso.<br>";
            $Codigo = $tbl["ID"];
            $Livro = $tbl["LIVRO"];
            $Autor = $tbl["AUTOR"];
            $Editora = $tbl["EDITORA"];
            
            echo "<form method='POST' action='atualizacao.php'>";
            echo "<input type='hidden' name='codigo' value='$Codigo'/>";
            echo "Livro <input type='text' name='livro' value='$Livro'/>";
            echo "<br> Autor:<input type='text' name='autor' value='$Autor'/>";
            echo "<br> Editora:<input type='text' name='editora' value='$Editora'/>";
            echo "<br><input type='submit' value='atualiZAR'>";
            echo "</form>";
            
        }
        
        else
        {
            die('Erro:'.mysql_error());
        }
        ?>
    </body>
</html>
