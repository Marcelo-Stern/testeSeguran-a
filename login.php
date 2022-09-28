<?php
session_start();
include('conexao.php');
 
if(empty($_POST['rm']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
 
$rm = mysqli_real_escape_string($conexao, $_POST['rm']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "SELECT rm FROM auth WHERE rm = '{$rm}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['rm'] = $rm;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}