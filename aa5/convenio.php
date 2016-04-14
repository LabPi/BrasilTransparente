<!DOCTYPE html>
<!--Jesus Cristo_O Caminho, a Verdade e A Vida-->


<!--Copyright 2016 Companhia Marcial-->

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

.button {
    background-color: #009688;
/*  border: 1px solid #ffd700;*/
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 1px 1px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;


}
.button:hover {
    background-color: #ff0000; 
    color: white;
font-size: 10px;
}

.button2 {
    background-color: #ff0000;
/*  border: 1px solid #ffd700;*/
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 1px 1px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;


}
.button2:hover {
    background-color: #009688; 
    color: white;
font-size: 10px;
}


.fundoadde {
    width: 100%;
    height: 120px;
    position: fixed;
    bottom: 0px;
    left: 0px;
    background-color: #c0c0c0;

}


.ad {
    width: 100px;
    height: 40px;
    position: absolute;
    left: 20px;

}

.de {
    width: 100px;
    height: 40px;
    position: absolute;
    left: 120px;

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
	color: teal
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
  <div class="w3-container w3-top w3-teal w3-large w3-padding" style="z-index:4">
   
<span class="w3-left"><a href="javascript:history.back(1)"><i class="fa fa-arrow-left"></i></a></span>
    <span class="w3-right"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-home"></i></a></span>
  </div>

  
   
<a href='javascript:history.back(1)'>Voltar</a>

<br><br><br>


<!--div class="w3-container"><img src="map/ac.png" alt="Smiley face" width="100%"></div-->




<div class="w3-container">

<h3>C O N V Ê N I O</h3>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        

            <?php
            include("conexao.php");





$id = $_REQUEST["FormldLivro"];

$id2 = $_REQUEST["FormldLivro2"];

$id3 = $_REQUEST["FormldLivro3"];

$id2 = strtoupper($id2);

$sql = "SELECT * FROM 05_PropostasPrograma
WHERE NM_MUNICIPIO_PROPONENTE LIKE '$id3'
AND 05_PropostasPrograma.NR_PROPOSTA = '$id2'
";





            $result = mysql_query($sql);
$i = 1;

            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["NR_PROPOSTA"];
                $anoProposta = $tbl["ANO_PROPOSTA"];
                $nrProposta = $tbl["NR_PROPOSTA"];
                $txModalidade = $tbl["TX_MODALIDADE"];
                $txSituacao = $tbl["TX_SITUACAO"];
                $nmPrograma = $tbl["NM_PROGRAMA"];
                $orgaoSuperior = $tbl["NM_ORGAO_SUPERIOR"];
                $nmProponente = $tbl["NM_PROPONENTE"];
                $esferaProponente = $tbl["TX_ESFERA_ADM_PROPONENTE"];
                $regiaoProponente = $tbl["TX_REGIAO_PROPONENTE"];
                $UF = $tbl["UF_PROPONENTE"];
                $municipio = $tbl["NM_MUNICIPIO_PROPONENTE"];
                $dataProposta = $tbl["DT_PROPOSTA"];
                $inicioVigencia = $tbl["DT_INICIO_VIGENCIA"];
                $fimVigencia = $tbl["DT_FIM_VIGENCIA"];
                $valorGlobal = $tbl["VL_GLOBAL"];
                $valorRepasse = $tbl["VL_REPASSE"];
                $valorRepasseExercicioAtual = $tbl["VL_REPASSE_EXERC_ATUAL"];
                $valorContrapartida = $tbl["VL_CONTRAPARTIDA"];
                $valorContrapartidaFinanceira = $tbl["VL_CONTRAPARTIDA_FINANC"];
                $valorContrapartidaBensEServicos = $tbl["VL_CONTRAPARTIDA_BENS_SERV"];
                $nomeResponsavelProponente = $tbl["NM_RESPONS_PROPONENTE"];
                $nomeBanco = $tbl["NM_BANCO"];
                $objeto = $tbl["TX_OBJETO_CONVENIO"];
                $justificativa = $tbl["TX_JUSTIFICATIVA"];


                echo "<TR><p><b>Código do Convênio:</b> $Codigo</p><TR>";                
                echo "<TR><p><b>Município: </b>$municipio</b></p><TR>";
                echo "<TR><p><b>Estado: </b>$UF</b></p><TR>";
                echo "<TR><p><b>Região: </b>$regiaoProponente</b></p><TR>";

                echo "<TR><p><b>Objeto: </b>$objeto</b></p><TR>";

                echo "<TR><p><b>Valor Global: </b>$valorGlobal</b></p><TR>";
                echo "<TR><p><b>Justificativa: </b>$justificativa</b></p></TR>";

                echo "<TR><p><b>Ano da Proposta: </b>$anoProposta</p><TR>";
                echo "<TR><p><b>Número da Proposta: </b>$nrProposta</p><TR>";
                echo "<TR><p><b>Modalidade do Convênio: </b>$txModalidade</p><TR>";
                echo "<TR><p><b>Situação do Convênio: </b>$txSituacao</b></p><TR>";
                echo "<TR><p><b>Nome do Programa: </b>$nmPrograma</b></p><TR>";
                echo "<TR><p><b>Orgão Superior: </b>$orgaoSuperior</b></p><TR>";
                echo "<TR><p><b>Nome do Proponente: </b>$nmProponente</b></p><TR>";
                echo "<TR><p><b>Esfera Proponente: </b>$esferaProponente</b></p><TR>";




                echo "<TR><p><b>Data da Proposta: </b>$dataProposta</b></p><TR>";
                echo "<TR><p><b>Início da Vigência: </b>$inicioVigencia</b></p><TR>";
                echo "<TR><p><b>Fim da Vigência: </b>$fimVigencia</b></p><TR>";

                echo "<TR><p><b>Repasse: </b>$valorRepasse</b></p><TR>";
                echo "<TR><p><b>Repasse atual: </b>$valorRepasseExercicioAtual</b></p><TR>";
                echo "<TR><p><b>Contrapartida: </b>$valorContrapartida</b></p><TR>";

                echo "<TR><p><b>Valor da Contrapartida Financeira: </b>$valorContrapartidaFinanceira</b></p><TR>";
                echo "<TR><p><b>Valor da Contrapartida de Bens e Serviços: </b>$valorContrapartidaBensEServicos</b></p><TR>";
                echo "<TR><p><b>Responsável: </b>$nomeResponsavelProponente</b></p><TR>";
                echo "<TR><p><b>Banco: </b>$nomeBanco</b></p><TR>";





                               

}
?>





        </table>

</div>



<br>

    <!-- Footer -->
    <footer class="w3-container w3-padding-16 w3-light-grey">
      <!--h4>FOOTER</h4-->
      <h5>Ir para <a href="minhas.php">"Minhas Fiscalizações"</a></h5>
<br>
<div>
<?php
            include("conexao.php");





$id = $_REQUEST["FormldLivro"];

$id2 = $_REQUEST["FormldLivro2"];

$id3 = $_REQUEST["FormldLivro3"];

$id2 = strtoupper($id2);

$sql = "SELECT * FROM 05_PropostasPrograma
WHERE NM_MUNICIPIO_PROPONENTE LIKE '$id3'
AND 05_PropostasPrograma.NR_PROPOSTA = '$id2'
";





            $result = mysql_query($sql);
$i = 1;

            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["NR_PROPOSTA"];
                $municipio = $tbl["NM_MUNICIPIO_PROPONENTE"];
                $estado = $tbl["UF_PROPONENTE"];
                

                         

echo "<form method='POST' action='gerencia-registro.php'>
                    <input class='button ad' name='FormldLivre' type='submit' value='Acompanhar'>
                    <input name='FormldLivro2' style='display:none' value='$Codigo'/>
                    <input name='FormldLivro3' style='display:none' value='$municipio'/>
                    <input name='FormldLivro4' style='display:none' value='$estado'/>
                </form>";

echo "<form method='POST' action='gerencia-registro2.php'>
                    <input class='button2 de' name='FormldLivre' type='submit' value='&nbsp;&nbsp;&nbsp;Denunciar&nbsp;&nbsp;&nbsp;'>
                    <input name='FormldLivro2' style='display:none' value='$Codigo'/>
                    <input name='FormldLivro3' style='display:none' value='$municipio'/>
                    <input name='FormldLivro4' style='display:none' value='$estado'/>

                </form>";




}
?>
</div>

<br>
<br>    
<br>
<br>
<br>
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