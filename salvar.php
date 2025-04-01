<?php
// converte o json para um array em php
$dados = json_decode(file_get_contents("dados.json"),
true);

// verificaçao da conversão de json para php
if(!is_array($dados)){
    $dados = [];
}

$novoDado = [
    // pega as informaçoes do formulario
    "nome" => $_POST["nome"],
    "idade" => $_POST["idade"]
];

//recebe e guarda as informaçoes do formulario
$dados [] = $novoDado;

//converte o php em json
file_put_contents("dados.json" ,json_encode($dados, JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso ! <a href=index.php>Voltar</a>"


?>

<?php
// converte o json para um array em php
$dados = json_decode(file_get_contents("carros.json"),
true);

// verificaçao da conversão de json para php
if(!is_array($dados)){
    $dados = [];
}

$novoDado = [
    // pega as informaçoes do formulario
    "nome" => $_POST["nome"],
    "valor" => $_POST["valor"],
    "ano" => $_POST["ano"]
];


//recebe e guarda as informaçoes do formulario
$dados [] = $novoDado;

//converte o php em json
file_put_contents("carros.json" ,json_encode($dados, JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso !";
header("refresh:1;url=index.php");
exit();
?>