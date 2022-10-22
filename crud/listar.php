<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class= "container">

    <a href="formincluir.php"><button> Adicionar aluno</button></a>
        
    <?php 
    if(isset ($gravou) ){

        if(!$gravou){
             
            echo ' <div class= "alert alert-danger" role= "alert">
                    ERRO ao tentar gravar o aluno!
                </div';

        }else{

            echo ' <<div class= "alert alert-danger" role= "alert">
            Aluno gravado com sucesso
        </div';
    }
    }
    
    ?>
    
    
    
    <table border= "1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Turno</td>
            <td>Inicio</td>
            <td>Ações</td>
        </tr>

        <?php
        foreach($alunos as $aluno){
        echo   "<tr>
            <td>{$aluno['id']}</td>
            <td>{$aluno['nome']}</td>  
            <td>{$aluno['turno']}</td>
            <td>{$aluno['inicio']}</td>  
                </tr>";

        }
        ?>
</body>

</html>