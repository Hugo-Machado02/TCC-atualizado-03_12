<?php
session_start();
include('conexao_BD.php');

$sql = mysqli_query($conexao, "SELECT log.id, log.usuario, log.senha FROM login as log INNER JOIN funcionario as fun ON (log.cpf_funcionario = fun.cpf)
WHERE fun.cpf = '{$_SESSION['cpf']}'");

$result = mysqli_fetch_assoc($sql);

$_SESSION['id_usuario'] = $result['id'];
$_SESSION['valor_usuario'] = $result['usuario'];
$_SESSION['validar_senha'] = $result['senha'];


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="../imagens/logo_tittle.png">
</head>
<body>
<h1>Alterar Senha - usuários</h1>
    <form id="alterar_senha" action="V_alterar-senha-usuarios.php" method="POST">
        <div>
            <h1>Usuario:</h1>
            <h2><?php echo $_SESSION['valor_usuario']; ?></h2>
        </div>
        <div>
            <strong><label>Digite sua nova Senha:</label></strong>
            <input type="password" name="alterarSenha" required placeholder="Insira a Nova Senha!!">
        </div>
        <div>
            <strong><label>Confirme sua nova Senha:</label></strong>
            <input type="password" name="confirmarSenha" required placeholder="Confirmar a Senha!!">
        </div>
        <div>
            <button class="btn btn-primary">Salve</button>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>