<?php
include "../conexao.php";

$conexao = conectar();

$produto = json_decode(file_get_contents("php://input"));

$sql = "UPDATE produto SET nome='$produto->nome', quantidade=$produto->quantidade, descricao='$produto->descricao' WHERE id_produto=$produto->id_produto ";

executarSQL($conexao, $sql);
echo json_encode($usuario);
