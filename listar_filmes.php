<?php 
session_start();
include "conexao.php"; 
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de filmes</title>
    <link rel="stylesheet" href="listagem_filmes.css">
</head>
<body>
    <table id="lista_filme">
        <caption>Listagem de filmes</caption>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Resumo</th>
                <th>Complementos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query_filmes = 'SELECT codigo,nome,ano,resumo,complementos FROM filmes';
                $result_filmes = $conn->prepare($query_filmes);
                $result_filmes->execute();

                    while ($row_filme = $result_filmes->fetch(PDO::FETCH_ASSOC)){
                        extract($row_filme);
                        echo 
                        "<tr>
                            <td>
                                $codigo
                            </td>
                            <td>
                                $nome
                            </td>
                            <td>
                                $ano
                            </td>
                            <td>
                                $resumo
                            </td>
                            <td>
                                $complementos
                            </td>
                        </tr>";
                    }
            ?>
        </tbody>
    </table>

    
</body>
</html>