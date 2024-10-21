<?php

require_once "conexao.php";
$conexao = conectar();

$id = $_GET['id_produto'];

$sql = "DELETE FROM produto WHERE id_produto = $id";
$retorno = executarSql($conexao,$sql);
echo json_encode($retorno);