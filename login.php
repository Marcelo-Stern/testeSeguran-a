<?php
$usuario = $_POST["rm"];
$senha = $_POST["nome"];

$query = "SELECT * FROM usuario WHERE rm = '$usuario' AND nome ='$senha'";

$conexao = new PDO ('mysql:host = 127.0.0.1; autenticacao = testeSeguran-a', 'root', '');
$resultado = $conexao->query($query);
$logado = $resultado->fetch();
$id_logado = $logado['id'];

if($logado == null){
    // Usuário ou senha inválidos
    header('Location: usuario-erro.php');
}
else{
    session_start();
    $_SESSION['usuario_logado'] = $id_logado;
    // Direciona o usuário para o painel administrativo do sistema
    header('Location: logado.php');
}
die();
?>