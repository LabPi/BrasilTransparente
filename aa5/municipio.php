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
    along with Foobar.  If not, see <http://www.gnu.org/licenses/-->

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
<style type="text/css">
  a text {
    fill: red;
    text-decoration: underline;
  }
  a:hover text {
    fill: blue;
  }

#ac{
    fill: orange;
    zoom: 2;
  }
  #ac:hover {
    fill: blue;
  }

</style>

</head>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
   
<span class="w3-left"><a href="javascript:history.back(1)"><i class="fa fa-arrow-left"></i></a></span>
    <span class="w3-right"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-home"></i></a></span>
  </div>

  
   


<br><br><br>


<!--div class="w3-container"><img src="map/ac.png" alt="Smiley face" width="100%"></div-->



<br>

<div class="w3-container">

<?php
            include("conexao.php");



$id2 = $_REQUEST["FormldLivro2"];


$id2 = strtoupper($id2);
          
                echo "<h5>Convênios de $id2</h5>";
              

?>

      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
          <td>Número da Proposta</td>
          <td>Objeto</td>
          <td>Valor Global</td>
        </tr>

            <?php
            include("conexao.php");





$id = $_REQUEST["FormldLivro"];

$id2 = $_REQUEST["FormldLivro2"];

$id3 = $_REQUEST["FormldLivro3"];

$id2 = strtoupper($id2);

$sql = "SELECT * FROM 05_PropostasPrograma
WHERE NM_MUNICIPIO_PROPONENTE LIKE '$id2' order by NR_PROPOSTA
";





            $result = mysql_query($sql);
$i = 1;

            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["NR_PROPOSTA"];
                $valor = $tbl["VL_GLOBAL"];
                $objeto = $tbl["TX_OBJETO_CONVENIO"];

                $UF = $tbl["UF_PROPONENTE"];
                $municipio = $tbl["NM_MUNICIPIO_PROPONENTE"];
                
                echo "<TR>";
                echo "<TD><form method='POST' action='convenio.php'>
                <input name='FormldLivro2' type='submit' value='$Codigo'>
                <input name='FormldLivro3' style='display:none' value='$municipio'>
                </form></TD>";


                echo "<TD>$objeto</TD>";                
                echo "<TD>$valor</TD>";

                echo "</TR>";


               

}
?>





        </table>

</div>





<br>

    
    <div class="w3-container w3-dark-grey w3-padding-32">
      <div class="w3-row">
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-green">Demographic</h5>
          <p>Language</p>
          <p>Country</p>
          <p>City</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-red">System</h5>
          <p>Browser</p>
          <p>OS</p>
          <p>More</p>
        </div>
        <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-orange">Target</h5>
          <p>Users</p>
          <p>Active</p>
          <p>Geo</p>
          <p>Interests</p>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="w3-container w3-padding-16 w3-light-grey">
      <h4>FOOTER</h4>
      <p>Template by <a href="/w3css">Brasil Transparência</a></p>
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