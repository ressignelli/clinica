<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>Clínica Psiquiátrica JARL</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body><center>
    <form name="mensagem" method="POST" action="includes/geral/envia_contato.php">
        <div class="campo">
                <h1>Preencha o Formulário abaixo</h1><br>

                <label for="nome"><strong>Nome: </strong></label>
                <input type="text" name="nome" id="nome" size="30" required><br>

                <label for="email"><strong>E-mail</strong></label>
                <input type="email" name="email" id="email" size="20" required><br>

                <label for="telefone"><strong>Telefone/Celular</strong></label>
                <input type="text" name="telefone" id="telefone" size="15" required><br>

                <br><p>Digite suas dúvidas abaixo:</p>
                <textarea name="msg" id="msg" style="width:50%;height:100px;" maxlength="400" required></textarea>
                <br><br>
                <button type="input">Enviar</button>
        </div></center>
    </form>
</body>

</html>