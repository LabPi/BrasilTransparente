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
        <!--?php
        
        CRIAR NO MYSQL UMa tabela 'td_funcionarios' e 'td_cargos' 
        
        
        SELECT * FROM 'tb_funcionarios' ORDER BY NOME DESC
        // 
        // 
        // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        // 
        SELECT NOME,DEPARTAMENTO FROM TB_FUNCIONARIOS
        JOIN TB_CARGOS ON TB_FUNCIONARIOS.CARGO = TB_CARGOS.CARGO
        //
        //
        //
        // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        //
        //##dar um outro nome ao campo (somente para visualização)

        select nome as funcionarios, departamento as area
        from tb_funcionarios join tb_cargos
        on tb_funcionarios.cargo = tb_cargos.cargo
        
//
        //
        //
        
                ## deletar
                
                DELETE FROM TB_FUNCIONARIOS WHERE ID = 2
                
                ## DELETAR
                
                DELETE FROM TB_FUNCIONARIOS WHERE NOME = 'THAIS'
                
                
                
                
                
 _______________________________
                
                ##
                
 ## DESDO-INÍCIO
                (criar uma tabela e interagir com um banco de dados pelo PHP)
                
 1> 
                CREATE DATABASE BABELOTECA
                
2> 
                CREATE TABLE LIVROS
                (
                ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                LIVRO VARCHAR(64) NOT NULL,
                AUTOR VARCHAR(32) NOT NULL,
                EDITORA VARCHAR(16) NOT NULL
                );
                
        
        ?-->
    </body>
</html>
