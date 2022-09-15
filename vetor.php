<?php

///Vetores

$diaSemana = [ 0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça', 3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 6 => 'Sabado'];

echo "<pre>";

$hoje = date ("w");

//var_dump ($diaSemana);

echo "Hoje é {$diaSemana [$hoje]}";


$aluno = [ 0 => [ 'matricula' => 490702 , 'nome' => 'Luiz', 'semestre' => 1],

          1 => ['matricula' => 854712 , 'nome' => 'Thiago', 'semestre' => 3],
          
          2 => ['matricula' => 983245, 'nome' => 'Ana', 'semestre' => 2]];
    
echo '<table border = "1">
        <tr>
        <td>Matricula</td>
        <td>Nome</td>
        <td>Semestre</td> 
    </tr>';
                
for ($i = 0 ; $i < count($aluno) ; $i++ ){

    echo " <tr>
                <td>  {$aluno[$i]['matricula']} </td>
                <td> {$aluno[$i]['nome']} </td>
                <td> {$aluno[$i]['semestre']} </td>
           </tr>";
}

foreach($aluno as $indice => $valor ){

        echo "   <tr>
                        <td>{$valor["matricula"]}</td>
                        <td>{$valor  ["nome"]}</td>
                        <td>{$valor["semestre"]}</td>
                </tr>";


}
 
echo '</table>'; 
