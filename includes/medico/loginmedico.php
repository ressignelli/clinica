<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Psiquiatria</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>

    <div>
        <h2 id="titulo">Acesso Médico</h2>
    </div>
    <hr>
    <center>
    <form method="POST" action="./includes/medico/loginmed.php">
        <br>
        <label>CPF:</label><input type="text" name="cpf" id="cpf"><br><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
        <input type="submit" value="Entrar" id="entrar" name="entrar">
    </form>
</center>
</body>
</html>