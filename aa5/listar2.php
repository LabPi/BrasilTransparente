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

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <table border="1">
            <tr>
                <td>Cód</td>
                <td>Livro</td>
                <td>Autor</td>
                <td>Editora</td>
            </tr>
            <?php
            include("conexao.php");
            $sql = "SELECT * FROM TABLE 3";
            $result = mysql_query($sql);
            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while ($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["ID"];
                $Livro = $tbl["COL 1"];
                $Autor = $tbl["COL 1_2"];
                $Editora = $tbl["EDITORA"];
                
                echo "<TR>";
                echo "<TD>$Codigo</TD>";
                echo "<TD>$Livro</TD>";
                echo "<TD>$Autor</TD>";
                echo "<TD>$Editora</TD>";
                echo "<TR>";
                
            }
            ?>
        </table>
        
        <br>
        <a href="inserir.php"> Clique aqui para inserir um novo registro.</a>
        
        <br><a href="alterar.php">Clique para editar um : : REGISTRO</a>
        
        <br><a href="formdelete.php">Clique para deletar um : : REGISTRO</a>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
