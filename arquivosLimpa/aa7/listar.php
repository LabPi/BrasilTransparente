<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-family: "Raleway", sans-serif;}
</style>


<meta charset="ISO-8859-1">
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<div class="w3-container w3-section">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
          <h5>Regions</h5>
          <img src="img_region.jpg" style="width:100%" alt="Google Regional Map">
        </div>
        <div class="w3-twothird">
        <table class="w3-table w3-striped w3-white">
            <tr>
                <td>Cód</td>
                <td>Livro</td>
                <td>Autor</td>
                <td>Editora</td>
            </tr>
            <?php
            include("conexao.php");
            $sql = "SELECT * FROM 15programasUFHabilitadas";
            $result = mysql_query($sql);
            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while ($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["NM_PROGRAMA"];
                $Livro = $tbl["TX_DESCRICAO_PROGRAMA"];
                $Autor = $tbl["TX_REGIAO_GEOGRAFICA"];
                $Editora = $tbl["UF_HABILITADA"];
                
                echo "<TR>";
                echo "<TD>$Codigo</TD>";
                echo "<TD>$Livro</TD>";
                echo "<TD>$Autor</TD>";
                echo "<TD>$Editora</TD>";
                echo "<TR>";
                
            }
            ?>
        </table>
        </div>
</div>
</div>
        <br>
        <a href="inserir.php"> Clique aqui para inserir um novo registro.</a>
        
        <br><a href="alterar.php">Clique para editar um : : REGISTRO</a>
        
        <br><a href="formdelete.php">Clique para deletar um : : REGISTRO</a>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
