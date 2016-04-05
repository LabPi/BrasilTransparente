<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script language="javascript">
            function teste_submit()
            {
                var nome = document.getElementById("a");
                if(nome.value == ""){
                    alert("campo NOME vazio");
                }
                
                else{
                    window.location = "f1";
                }	    
            }
        </script>

        
    </head>
    <body>
        
        
        <form method="POST" action="cadastroefetuado.php" name="f1">
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
                    <input type = "button" value="Cadastrar" onclick="teste_submit()">
                </td>
            </tr>
        </table>
        </form>
        
        
        <?php
        // Jesus Cristo_O Caminho, A Verdade e A Vida
        ?>
    </body>
</html>
