<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formJson</title>
</head>
<body>
    <h2>Cadastro de usuarios</h2>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Valor: <input type="number" name="valor" required><br><br>
        Ano: <input type="date" name="ano">
        <button type="submit">Salvar</button>
    </form>

    <h2>Carros cadastrados</h2>
    <ul>
    <?php
        $dados = json_decode(file_get_contents("carros.json"), true);

        if(!empty ($dados)){
            foreach($dados as $usuarios){
                echo "<li>{$usuarios['nome']} - {$usuarios['valor']} - {$usuarios['ano']} </li>";
            }
        } else {
            echo "<li>Nenhum carro cadastrado</li>";
        }
    ?>
    </ul>
</body>
</html>