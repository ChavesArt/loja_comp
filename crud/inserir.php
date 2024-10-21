<?php
include "conexao.php";
$conexao = conectar();

$produto = json_decode(file_get_contents("php://input"));

$sql = "INSERT INTO produto(nome,quantidade,descricao) values( '$produto->nome', '$produto->quantidade','$produto->descricao')";

executarSQL($conexao,$sql);
$produto->id_produto = mysqli_insert_id($conexao);
echo json_encode($produto);
?>