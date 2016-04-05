<!DOCTYPE html>
<!--Jesus Cristo_O Caminho, a Verdade e A Vida-->

<html lang="pt-br">

<html>
<head>
<title>Brasil Transparente</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="ISO-8859-1">
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
   
<span class="w3-left"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-arrow-left"></i></a></span>
    <span class="w3-right"><a href="http://www.desenhoscriptivo.com.br"><i class="fa fa-bell-o"></i></a></span>
  </div>

<div class="w3-container" width="50%">
      <h5>Countries</h5>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">

            <tr>
                <td>Municipio</td>
                <td>UF</td>
                <td>Objetivo</td>
                <td>Justificativa</td>
                <td>Valor Global</td>
                <td>Responsavel</td>
                <td>Proposta</td>
                <td>Programa</td>
            </tr>
            <?php
            include("conexao.php");





$id = $_REQUEST["FormldLivro"];

$id2 = $_REQUEST["FormldLivro2"];

$id3 = $_REQUEST["FormldLivro3"];

$id2 = strtoupper($id2);

$sql = "SELECT * FROM 05_PropostasPrograma
WHERE $id LIKE '%$id2%'
AND 05_PropostasPrograma.UF_PROPONENTE = '$id3'
";





            $result = mysql_query($sql);
$i = 1;

            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["NM_MUNICIPIO_PROPONENTE"];
                $UF = $tbl["UF_PROPONENTE"];
                $Objetivo = $tbl["TX_OBJETO_CONVENIO"];
                $Justificativa = $tbl["TX_JUSTIFICATIVA"];
                $Valor = $tbl["VL_GLOBAL"];
                $Responsavel = $tbl["NM_RESPONS_PROPONENTE"];
                $nrProposta = $tbl["NR_PROPOSTA"];
                $nmPrograma = $tbl["NM_PROGRAMA"];
                
                echo "<TR>";
                echo "<TD>$Codigo</TD>";
                echo "<TD>$UF</TD>";
                echo "<TD>$Objetivo</TD>";
                echo "<TD>$Justificativa</TD>";
                echo "<TD>$Valor</TD>";
                echo "<TD>$Responsavel</TD>";
                echo "<TD>$nrProposta</TD>";
                echo "<TD>$nmPrograma</TD>";
                echo "<TR>";
               

}
?>
        </table>

</div>


  
<div class="w3-container">
      <h5>Recentes</h5>
      <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
          <td>United States</td>
          <td>65%</td>
        </tr>
        <tr>
          <td>UK</td>
          <td>15.7%</td>
        </tr>
        <tr>
          <td>Russia</td>
          <td>5.6%</td>
        </tr>
        <tr>
          <td>Spain</td>
          <td>2.1%</td>
        </tr>
        <tr>
          <td>India</td>
          <td>1.9%</td>
        </tr>
        <tr>
          <td>France</td>
          <td>1.5%</td>
        </tr>
      </table><br>
      <button class="w3-btn">More Countries  <i class="fa fa-arrow-right"></i></button>
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
