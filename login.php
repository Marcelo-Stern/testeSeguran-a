<?php
// Conexão com o banco de dados
require "conexao.php";

// Inicia sessões
session_start();

// Recupera o login
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
// recupera a senha
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!login || !senha){
    echo "Você deve digitar sua senha e login!";
    exit;
}

/*
Executa a consulta no banco de dados.
Caso o número de linhas retornadas seja 1, o login é válido,
caso seja 0, é inválido.
*/
$SQL = "SELECT login, senha
FROM usuario
WHERE login = "" . $login = """;
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);