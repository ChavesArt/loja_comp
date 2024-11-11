<?php
include "../conexao.php";

$conexao = conectar();

$produto = json_decode(file_get_contents("php://input"));

$sql = "UPDATE produto SET produto='$produto->produto', quantidade=$produto->Quantidade, preco='$produto->preco' WHERE id_produto=$produto->id_produto ";

executarSQL($conexao, $sql);
echo json_encode($produto);
