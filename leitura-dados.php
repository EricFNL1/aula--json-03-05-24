<?php
$url = "dados.json";
//define a url do arquivo JSON

$json = file_get_contents($url);
// obtém o conteúdo dod arquivo JSON como uma string

$data = json_decode($json, true);
//Decodifica a string JSON em um array associativo
// do PHP e o resultado armazenado na variável $data

foreach ($data as $aluno) {
    echo "<h4> - - - - - - - - - - - -</h4>";
    echo "Nome: {$aluno['nome']} <br>";
    echo "Tura: {$aluno['turma']} <br>";
    echo "<h4>Disciplinas:</h4>";
        foreach ($aluno['disciplinas'] as $disciplina){
            echo "{$disciplina['nome']} - ";
            echo "{$disciplina['professor']} <br>";
        }
}
?>