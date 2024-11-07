<?php
$id = $_GET['id_produto'];
require_once "../conexao.php";

$conexao = conectar();

$sql = "SELECT nome,quantidade,descricao FROM produto WHERE id_produto = $id";
$resultado = executarSql($conexao,$sql);
$produtos = mysqli_fetch_assoc($resultado);

echo json_encode($produtos);