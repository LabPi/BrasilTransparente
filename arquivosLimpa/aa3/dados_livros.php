<!--
To change this template, choose Tools | Templates
and open the template in the editor.

HADOOP + PHP
http://www.godlikemouse.com/2010/12/10/using-hadoop-and-php/

http://www.slideshare.net/Wombert/largescale-data-processing-with-hadoop-and-php-phpbnl2012-20120127

-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Jesus Cristo
        
        include("conexao.php");
        $id = $_REQUEST["FormldLivro"];
        
        $sql = "SELECT * FROM livros WHERE ID = $id";
        
        
        #Executa a expressão SQL no servidor e armazena o resultado
        $result = mysql_query($sql);
        
        #Copia o resultado da pesquisa dentro de um vetor
        $tbl = mysql_fetch_array($result);
        
        #Verifica o sucesso da operação
        if($tbl)
        {
            echo "Livro encontrado com sucesso.<br>";
            $Codigo = $tbl["ID"];
            $Livro = $tbl["LIVRO"];
            $Autor = $tbl["AUTOR"];
            $Editora = $tbl["EDITORA"];
            
            echo "<form method='POST' action='atualizacao.php'>";
            echo "<input type='hidden' name='codigo' value='$Codigo'/>";
            echo "Livro <input type='text' name='livro' value='$Livro'/>";
            echo "<br> Autor:<input type='text' name='autor' value='$Autor'/>";
            echo "<br> Editora:<input type='text' name='editora' value='$Editora'/>";
            echo "<br><input type='submit' value='atualiZAR'>";
            echo "</form>";
            
        }
        
        else
        {
            die('Erro:'.mysql_error());
        }
        ?>
    </body>
</html>
