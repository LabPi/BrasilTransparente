<!DOCTYPE html>
<!--Jesus Cristo_O Caminho, a Verdade e A Vida-->
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

<html lang="pt-br">

<html>
<head>
<title>Brasil Transparente</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.desenhoscriptivo.com.br/w3.css">

<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-family: "Raleway", sans-serif;}
a:link, a:visited {
	text-decoration: none
	}
a:hover {
	text-decoration: underline; 
	color: #ffffff
	}
a:active {
	text-decoration: none
	}

p {

     font-size: 12px;
 }
</style>

</head>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-container w3-top w3-teal w3-large w3-padding" style="z-index:4">
   
<span class="w3-left"><a href="javascript:history.back(1)"><i class="fa fa-arrow-left"></i></a></span>
    <span class="w3-right"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-home"></i></a></span>
  </div>

  
<div class="w3-container">
<br>
<br>
      <h2>Minhas Fiscalizações</h2>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        

            <?php
            include("conexao.php");





$id = $_REQUEST["FormldLivro"];

$id2 = $_REQUEST["FormldLivro2"];

$id3 = $_REQUEST["FormldLivro3"];



$id2 = strtoupper($id2);

$sql = "SELECT DISTINCT municipio, codigo, estado
FROM minhasFicalizacoes 

";





            $result = mysql_query($sql);
$i = 1;

            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["codigo"];
                $municipio = $tbl["municipio"];
                $estado = $tbl["estado"];
                

                echo "<TR><TD><p><b>Código:</b> $Codigo</p></TD>";
                echo "<TD><p><b>Município:</b> $municipio - $estado</p></TD>";



                echo "<TD><form method='POST' action='convenio.php'>
                <input name='FormldLivre' type='submit' value='ver mais...'>
                <input name='FormldLivro2' style='display:none' value='$Codigo'>
                <input name='FormldLivro3' style='display:none' value='$municipio'>
                </form></TD>";
                echo "</TR>";                               

}
?>





        </table>
<br>

<h2>DENÚNCIAS SOB AVALIAÇÃO</h2>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        

            <?php
            include("conexao.php");





$id = $_REQUEST["FormldLivro"];

$id2 = $_REQUEST["FormldLivro2"];

$id3 = $_REQUEST["FormldLivro3"];

$id2 = strtoupper($id2);

$sql = "SELECT DISTINCT municipio, codigo
FROM minhasFicalizacoes2 

";





            $result = mysql_query($sql);
$i = 1;

            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["codigo"];
                $municipio = $tbl["municipio"];
                

                echo "<TR><TD><p><b>Código do Convênio:</b> $Codigo</p></TD>";
                echo "<TD><p><b>Município:</b> $municipio</p></TD>";



                echo "<TD><form method='POST' action='convenio.php'>
                <input name='FormldLivre' type='submit' value='ver mais...'>
                <input name='FormldLivro2' style='display:none' value='$Codigo'>
                <input name='FormldLivro3' style='display:none' value='$municipio'>
                </form></TD>";
                echo "</TR>";                               

}
?>





        </table>


    
    <div class="w3-container w3-dark-grey w3-padding-32">
      <div class="w3-row">
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-green">Brasil Transparente</h5>
          <p>Como Funciona?</p>
          <p>Passo-a-passo...</p>
          <p>Denunciar!</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-red">Minhas Fiscalizações</h5>
          <p>Pesquisar</p>
          <p>Minha Cidade!</p>
          <p>Login</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-orange">Sobre</h5>
          <p>Base de Dados</p>
          <p>Referências</p>
          <p>Código Livre</p>
          <p>Quem somos?</p>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="w3-container w3-padding-10 w3-light-grey">
      <!--h4>COMPANHIA MARCIAL</h4-->
      <p>Copyleft by <a href="http://www.companhiamarcial.com.br">Companhia Marcial</a></p>
    </footer>


  <!-- End page content -->
  </div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
 
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

</body>
</html>