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
        <?php
        // Jesus Cristo_O Caminho, A Verdade e A Vida
        // São José Valei-me!
        
        include 'conexao.php';
        
        #Inserir os valores dos formulários nas variáveis
        
        $FormNome = $_REQUEST["FormNome"];
        $FormLogin = $_REQUEST["FormLogin"];
        $FormSenha = $_REQUEST["FormSenha"];
        
        
        if(empty ($FormNome)){
            
            echo "<script>alert('Campo nome')</script>";
        }
        
        
        if (!empty($FormNome)) {

    #Cria a expressão SQL de inserção
    $sql = "INSERT INTO usuario (nome, login, senha) VALUES
            ('$FormNome', '$FormLogin', '$FormSenha')";

    #Executa a expressão SQL no servidor e armazena o resultado
    $result = mysql_query($sql);

    #Verifica o sucesso da Operação
    if ($result) {
        echo 'A operação foi realizada com sucesso';
        echo "<br><a href='InserirLogin.php>ENTRAR</a>'";
    } else {
        echo 'Login Já existe';
        echo "<br><a href='Cadastro.php'>Voltar</a>";
        die(mysql_error());
    }
}
?>
    </body>
</html>
