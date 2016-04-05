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
        <!--?php
        
        CRIAR NO MYSQL UMa tabela 'td_funcionarios' e 'td_cargos' 
        
        
        SELECT * FROM 'tb_funcionarios' ORDER BY NOME DESC
        // 
        // 
        // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        // 
        SELECT NOME,DEPARTAMENTO FROM TB_FUNCIONARIOS
        JOIN TB_CARGOS ON TB_FUNCIONARIOS.CARGO = TB_CARGOS.CARGO
        //
        //
        //
        // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        //
        //##dar um outro nome ao campo (somente para visualização)

        select nome as funcionarios, departamento as area
        from tb_funcionarios join tb_cargos
        on tb_funcionarios.cargo = tb_cargos.cargo
        
//
        //
        //
        
                ## deletar
                
                DELETE FROM TB_FUNCIONARIOS WHERE ID = 2
                
                ## DELETAR
                
                DELETE FROM TB_FUNCIONARIOS WHERE NOME = 'THAIS'
                
                
                
                
                
 _______________________________
                
                ##
                
 ## DESDO-INÍCIO
                (criar uma tabela e interagir com um banco de dados pelo PHP)
                
 1> 
                CREATE DATABASE BABELOTECA
                
2> 
                CREATE TABLE LIVROS
                (
                ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                LIVRO VARCHAR(64) NOT NULL,
                AUTOR VARCHAR(32) NOT NULL,
                EDITORA VARCHAR(16) NOT NULL
                );
                
        
        ?-->
    </body>
</html>
