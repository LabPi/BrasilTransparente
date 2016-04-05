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
        
        <form method="POST" action="gerencia-registro.php">
        <table>
            <tr>
                <td>Nome do Livro</td>
                <td>
                    <input name="FormNomeLivro" maxlength="64" value=""/>
                </td>
            </tr>
            <tr>
                <td>Nome do Autor</td>
                <td>
                    <input name="FormNomeAutor" maxlength="32" value=""/>
                </td>
            </tr>
            <tr>
                <td>Nome da Editora</td>
                <td>
                    <input name ="FormNomeEditora" maxlength="16" value=""/>
                </td>
            </tr>
            <tr>
                <td coldspan=2 align=right>
                    <input type="reset" value="Limpex"/>
                    <input type="submit" value="CAdastreX"/>
                           
                </td>
            </tr>
            
            
        </table>
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
