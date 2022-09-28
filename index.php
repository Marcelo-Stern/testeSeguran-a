<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Autenticação</title>
</head>

<body>
    <h3>Sistema de Login</h3>
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
    <script> alert("Usuário ou senha inválidos"); </script>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>
    <form action="login.php" method="POST">
        <label for="lblRM">RM: </label>
        <input name="rm" name="text" placeholder="Seu RM">
        <br><br>
        <label for="lblSenha">Senha: </label>
        <input name="senha" type="password" placeholder="Sua senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>