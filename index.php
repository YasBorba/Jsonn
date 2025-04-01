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
        Idade: <input type="number" name="idade" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>