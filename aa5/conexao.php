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



# DAdos para a conexâo com o banco de dados

$servidor = 'localhost:3306'; #nome DNS ou IP do seu servidor HTTP
$usuario = 'companh1_aquino'; #nome do usuário para acesso no MySQL
$senha = 'fend721'; #senha de acesso
$banco = 'companh1_app001'; #nome do banco de dados


#executa a conexão com o MySQL

mysql_connect($servidor, $usuario, $senha)
        or die("Não conseguimos a abdução requisitada:".  mysql_error());

mysql_set_charset('UTF8');

#seleciona o banco de dados que deseja utilizar
mysql_select_db($banco);
?>
