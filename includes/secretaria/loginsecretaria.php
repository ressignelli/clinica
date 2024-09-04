<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica de Psiquiatria</title>
    <link rel="stylesheet" type="text/css"  href="/psiquiatria/css/clinica_estilo1.css" />
</head>

<body>
    <div>
        <h2>Acesso Secretária</h2>
    </div>
<hr><center>

    <form method="POST" action="includes/secretaria/loginsec.php">
        <label>CPF:</label><input type="text" name="cpf" id="cpf"><br><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
        <input type="submit" value="Entrar" id="entrar" name="entrar"><br>
    </form></center>
</body>
</html>