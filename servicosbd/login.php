<?php
session_start();
include("../conexao/bd.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../index.php');
	exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "SELECT nomeUsuario FROM usuarios WHERE nomeUsuario = '{$usuario}' AND senha = md5('{$senha}')";
$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);



if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../painel.php');
	echo "foi";
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	exit();
}