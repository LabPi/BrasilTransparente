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
