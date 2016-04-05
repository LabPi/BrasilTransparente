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
        
        
        <form method="POST" action="cadastroefetuado.php">
        <table>
            <tr>
                <td>Nome: </td>
                <td>
                    <input id="a" name="FormNome" maxlength="64" value="">
                </td>
            </tr>
            <tr>
                <td>Login: </td>
                <td>
                    <input id="b" name="FormLogin" maxlength="32" value="">
                </td>
            </tr>
            <tr>
                <td>Senha: </td>
                <td>
                <input type="password" name="FormSenha" maxlength="10" value="">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type = "reset" value="Limpar">
                    <input type = "submit" value="Cadastrar">
                </td>
            </tr>
        </table>
        </form>
        
        
        <?php
        // Jesus Cristo_O Caminho, A Verdade e A Vida
        ?>
    </body>
</html>
