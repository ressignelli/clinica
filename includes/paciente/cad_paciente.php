<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Faça seu cadastro</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo2.css" />
    <script src="/js/gerador_senha.js" type="text/javascript"></script>
    <script src="/js/validacpf.js" type="text/javascript"></script>
    <script src="/js/validar_senha.js" type="text/javascript"></script>
    <script src="/js/man_form.js" type="text/javascript"></script>
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>

<body>
    <div class="titulo">
        <h3>Cadastro de Paciente</h3>
    </div>

<hr>

	 <!-- Início do formulário -->
        <form id="form1" method="POST" action="salva_paciente.php">
            <div class="campo">
		    <br>
                <label for="cpf"><strong>CPF: (somente números): </strong></label>
                <input id="cpfInput" type="text" name="cpf" onblur="checkCPFValidity()" oninput="checkCPFValidity()" size="11">

            <div id="cpfStatus"></div>
                <br>
                <label for="senha"><strong>Senha de Acesso</strong></label>
                <input type="password" name="senha" id="senha" size="8" onblur="validarsenha()" oninput="validarsenha()">
            <div id="senhaStatus"></div>
                <br>
                <label for="senhac"><strong>Confirme a Senha de Acesso</strong></label>
                <input type="password" name="senhac" id="senhac" size="8" onblur="confere()" oninput="confere()">
            <div id="senhaStatus2"></div>
                <label>(Contendo 8 caracteres, com ao menos 1 letra maiúscula, 1 minúscula, 1 numero e 1 caracter especial entre esses "'!@#%¨&_~<>,;:</label>
                <input type="button" onclick="password()" value="Sugestão de senha.">
            </div>
<hr>

            <div class="campo">
                <label for="nome"><strong>Nome: </strong></label>
                <input type="text" name="nomepac" id="nomepac" size="30" required>

                <label for="sobrenome"><strong>Sobrenome: </strong></label>
                <input type="text" name="sobrenomepac" id="sobrenomepac" size="20" required>

                <label for="datanasc"><strong>Data de Nascimento: </strong></label>
                <input type="date" name="datanasc" id="datanasc" required>
            </div>

            <div class="campo">
                <label><strong>Sexo Genético</strong></label>
                <label><input type="radio" name="sexo" value="m" checked>Masculino</label>
                <label><input type="radio" name="sexo" value="f">Feminino</label>
            	<label><strong>| Grupo Étnico</strong></label>
            	<label><input type="radio" name="cor" value="branco" checked>Branco</label>
            	<label><input type="radio" name="cor" value="preto">Preto</label>
                <label><input type="radio" name="cor" value="pardo">Pardo</label>
                <label><input type="radio" name="cor" value="indio">Indígena</label>
        	</div>
<hr>
            <!-- Campo de email com-->
            <div class="campo">
                <label for="email"><strong>E-mail</strong></label>
                <input type="email" name="email" id="email" size="30" value="null@null.com">
                <br><br>

                <label for="telefone"><strong>Telefone/Celular</strong></label>
                <input type="text" name="telefone" id="telefone" size="15" value="null">
            </div>
<hr>
            <div class="campo">
                <label for="log"><strong>Logradouro (Rua/Av./Al.)</strong></label>
                <input type="text" name="logradouro" id="logradouro" size="30" required>

                <label for="numero"><strong>Nº</strong></label>
                <input type="text" name="numero" id="numero" size="6" required>
<br><br>
                <label for="bairro"><strong>Bairro</strong></label>
                <input type="text" name="bairro" id="bairro" size="20" required>

                <label for="cep"><strong>CEP</strong></label>
                <input type="text" name="cep" id="cep" size="10" required>
<br><br>
                <label for="cidade"><strong>Cidade-UF</strong></label>
                <input type="text" name="cidade" id="cidade" size="30" required>
            </div>
                <div id="newEventModal">
                    <h2>Sugestão de Senha</h2>
                    <div id="msgret"></div>
        	        <button id="cancelButton">Fechar</button>
                </div>
<hr><center><div class="campo">
        <?php
            include('termocons.php');
        ?>

        <input type="checkbox" id="termo" name="termo" onclick="validarcheck()">
        <label for="termo">Li e aceito os termo e condições acima.</label><br>

        <button type="submit" id="enviar" disabled>Enviar</button>
        <a href="/index.php"><input type="button" value="Cancelar"></a>
        </div></center>

    </form>
    </body>
    
</html>


