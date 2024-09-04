<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="/css/login.css" />
</head>

<body><center>
    <div class=areapaciente>
        <h2>Área do Paciente - Acesso</h2>
        <br><hr><br><br><br>

        <form method="POST" action="includes/paciente/login.php">
            <label>CPF: (somente números): </label><input type="text" name="cpf" id="cpf"><br><br>
            <label>Senha: </label><input type="password" name="senha" id="senha"><br><br>
            <input type="submit" value="Entrar" id="entrar" name="entrar" class=botao><br><br>
        <a href="includes/paciente/cad_paciente.php" target="_blank">Cadastre-se aqui!</a><br>
        <a href="includes/paciente/esquece_senha.php" target="_blank">Esqueceu sua senha?</a>
        </form>
    </div></center>
</body>
</html>
