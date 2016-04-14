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
  <div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
   
<span class="w3-left"><a href="javascript:history.back(1)"><i class="fa fa-arrow-left"></i></a></span>
    <span class="w3-right"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-home"></i></a></span>
  </div>

  
<div class="w3-container">
      <h5>Recentes</h5>
<form method="POST" action="listar.php">


<p>Argumento de Pesquisa</p>
<input name="FormldLivro2" required>

<br>
<br>
<select name="FormldLivro3" required>
    <option value="">selecionar UF...</option>
    <option value="AC">Acre (AC)</option>
    <option value="AL">Alagoas (AL)</option>
    <option value="AP">Amapá (AP)</option>
    <option value="AM">Amazonas (AM)</option>
    <option value="BA">Bahia (BA)</option>
    <option value="CE">Ceará (CE)</option>
    <option value="DF">Distrito Federal (DF)</option>
    <option value="ES">Espírito Santo (ES)</option>
    <option value="GO">Goiás (GO)</option>
    <option value="MA">Maranhão (MA)</option>
    <option value="MT">Mato Grosso (MT)</option>]
    <option value="MS">Mato Grosso do Sul (MS)</option>
    <option value="MG">Minas Gerais (MG)</option>
    <option value="PA">Pará (PA)</option>
    <option value="PB">Paraíba (PB)</option>
    <option value="PR">Paraná (PR)</option>
    <option value="PE">Pernambuco (PE)</option>
    <option value="PI">Piauí (PI)</option>
    <option value="RJ">Rio de Janeiro (RJ)</option>
    <option value="RN">Rio Grande do Norte (RN)</option>
    <option value="RS">Rio Grande do Sul (RS)</option>
    <option value="RO">Rondônia (RO)</option>
    <option value="RR">Roraima (RR)</option>
    <option value="SC">Santa Catarina (SC)</option>
    <option value="SP">São Paulo (SP)</option>
    <option value="SE">Sergipe (SE)</option>
    <option value="TO">Tocantins (TO)</option>

  </select>

<br>
<br>
<select name="FormldLivro" required>
    <option value="NM_MUNICIPIO_PROPONENTE">Tipo de Pesquisa...</option>
    <option value="NM_MUNICIPIO_PROPONENTE">Município</option>
    <option value="NR_PROPOSTA">Número do Convênio</option>
    <option value="NM_PROGRAMA">Assunto</option>
  </select>

<br><br>
            <input type="submit" value="pesquisar">
        </form>





<br>

    

<br>

    
    <div class="w3-container w3-dark-grey w3-padding-16">

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