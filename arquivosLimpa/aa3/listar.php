<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tabelas</title>
<style>
body{
background: #ffd700;}
</style>
    </head>
    <body>
        
        <table border="1">
            <tr>
                <td>ID</td>
                <td>usuario.nome</td>
                <td>livros.LIVRO</td>
                <td>livros.EDITORA</td>
            </tr>
            <?php
            include("conexao.php");




            $sql = "SELECT livros.ID, usuario.nome, livros.LIVRO, livros.EDITORA
FROM livros
INNER JOIN usuario
ON livros.ID=usuario.ID";

            $result = mysql_query($sql);
            
            #Copia os registros para a variável $tbl e faz um
            #laço de repetição que percorre o array até o final
            
            while ($tbl = mysql_fetch_array($result))
            {
                $Codigo = $tbl["ID"];
                $Autor = $tbl["nome"];
                $Livro = $tbl["LIVRO"];
                $Editora = $tbl["EDITORA"];
                
                echo "<TR>";
                echo "<TD>$Codigo</TD>";
                echo "<TD>$Autor</TD>";
                echo "<TD>$Livro</TD>";
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
