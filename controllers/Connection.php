<?php

// Conecta ao banco de dados
$dsn = 'mysql:dbname=carrinho;host=localhost;charset=utf8';
$user = 'root';
$password = '';

$conexao = null;

try {
	$conexao  = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Erro de conexão: ' . $e->getMessage();
}


?>