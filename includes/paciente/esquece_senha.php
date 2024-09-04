<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo2.css" />
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>

<body><center>
    <div class="titulo">
        <h3>Recuperação de Senha:</h3>
    </div>

<hr>
        <form id="form1" method="POST" action="../geral/email.php">
            <div class="campo">
		    <br>
                <label for="cpf"><strong>Digite seu CPF: </strong></label>
                <input id="cpfInput" type="text" name="cpf">
                <br><br>
                <label for="email"><strong>Digite o E-mail: </strong></label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div></center>
        </form>
</body>

</html>