<?php
session_start();
include('conexao.php');

if(empty($_POST['Email']) || empty($_POST['Senha'])) {
	header('Location: index.php');
	exit();
}

$Email = mysqli_real_escape_string($conexao, $_POST['Email']);
$Senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

$query = "select nome from clientes where Email = '{$Email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['Nome'] = $usuario_bd['Nome'];
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}