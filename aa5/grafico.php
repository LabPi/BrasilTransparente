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
</style>



</head>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-container w3-top w3-blue w3-large w3-padding" style="z-index:4">
   
<span class="w3-left"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-arrow-left"></i></a></span>
    <span class="w3-right"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-home"></i></a></span>
  </div>

<div class="w3-row-padding w3-white">

<div class="w3-third">
<br><br>
  <h4><i class="fa fa-cube" aria-hidden="true"></i> Estatísticas Nacionais</h4>

<br>
<button class="button"  onclick="

todo(-170,150);"><span>recuar</span></button>

<button class="button" onclick="

todo2(-170,150);"><span>avançar</span></button>
<br>
<br>
<canvas class="w3-half" id="rocha" width="1000px" height="1200px"><canvas><script src="grafico.js"></script>
</div>  



<div class="w3-third">

<div class="w3-half">

  <h4><i class="fa fa-cube" aria-hidden="true"></i> Apresentação dos Dados</h4>
  <p>Aqui os dados devem ser apresentados.</p>

<br>
<canvas class="w3-third" id="barras" width="1000px" height="1000px"><canvas>
</div>


<br><br>
<p>_</p>
<div class="w3-third">


  <h4><i class="fa fa-cube" aria-hidden="true"></i> Consolidação das Informações</h4>
  <p>Análise dos dados e transformação em Informações relevantes para o público.</p>


<canvas class="w3-third w3-white" id="barras2" width="1000px" height="1000px"><canvas><script src="graficoBarra.js"></script>
</div>



<div class="w3-row-padding w3-white">
<p>_</p>
<h5><i class="fa fa-cube" aria-hidden="true"></i> Informações sobre Regiões do país.</h5>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
          <td>Norte</td>
          <td>11.252 convênios</td>
        </tr>
        <tr>
          <td>Nordeste</td>
          <td>41.205 convênios</td>
        </tr>
        <tr>
          <td>Centro-oeste</td>
          <td>20.252 convênios</td>
        </tr>
        <tr>
          <td>Sudeste</td>
          <td>38.205 convênios</td>
        </tr>
        <tr>
          <td>Sul</td>
          <td>39.079 convênios</td>
        </tr>
      </table>
<br>

</div>
<div class="w3-third w3-white">
<h5><i class="fa fa-cube" aria-hidden="true"></i> Estatísticas Gerais de Convênios</h5>


    <p>Em Avaliação</p>
    <div class="w3-progress-container w3-grey">
      <div id="myBar" class="w3-progressbar w3-green" style="width:20%">
        <div class="w3-center w3-text-white">20%</div>
      </div>
    </div>

    <p>Em Andamento</p>
    <div class="w3-progress-container w3-grey">
      <div id="myBar" class="w3-progressbar w3-orange" style="width:45%">
        <div class="w3-center w3-text-white">45%</div>
      </div>
    </div>

    <p>Finalizados</p>
    <div class="w3-progress-container w3-grey">
      <div id="myBar" class="w3-progressbar w3-red" style="width:35%">
        <div class="w3-center w3-text-white">35%</div>

      </div>
    </div>
  </div>
  </div>
    </div>
<br>

    </div><br><br><br>
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
    <!--footer class="w3-container w3-padding-10 w3-light-grey">
      <!--h4>COMPANHIA MARCIAL</h4-->
      <!--p>Copyleft by <a href="http://www.companhiamarcial.com.br">Companhia Marcial</a></p-->
    </footer-->

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