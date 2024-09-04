<!DOCTYPE HTML>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Área do Paciente-Cadastro</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo2.css" />
    <script src="/js/validar_senha.js" type="text/javascript"></script>
    <script src="/js/gerador_senha.js" type="text/javascript"></script>
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>
<body>
       <?php
       include("./area_paciente.php");
       ?><h2>Altera dados do cadastro</h2><br><hr><br><?php

                        $sql = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf'");
 
                        // Verifica se recebeu ao menos um resultado (o que se espera)
                        if($exibe = mysqli_fetch_array($sql))
                        {
                            // Se recebeu, faz a leitura dos dados
                            $cpf = $exibe["cpf"];
                            $Nomepac = $exibe["nomepac"];
                            $Sobrenomepac = $exibe["sobrenomepac"];
                            $Datanasc = $exibe["datanasc"];
                            $Sexo = $exibe["sexo"];
                            $Cor = $exibe["cor"];
                            $Email = $exibe["email"];
                            $Telefone = $exibe["telefone"];
                            $Senha = $exibe["senha"];
                            $Senhac = $exibe["senha"];
                            $Logradouro = $exibe["logradouro"];
                            $Numero = $exibe["numero"];
                            $CEP = $exibe["cep"];
                            $Bairro = $exibe["bairro"];
                            $Cidade = $exibe["cidade"];

                            
                            // Imprime formulário pré carregado
                            ?>
                            <form action="salva_alt_paciente.php" method="POST">
                                <div class="campo">
                                <label><strong>
                                CPF: <?php echo $cpf; ?></label>
                                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                                <br><br>
                                <label>Nome: <input type="text" name="Nomepac" value="<?php echo $Nomepac; ?>" required></label>
                                <label>Sobrenome: <input type="text" name="Sobrenomepac" value="<?php echo $Sobrenomepac; ?>" required></label>

                            <br><br>
                                <label> Data Nascimento: <input type="date" name="datanasc" value="<?php echo $Datanasc; ?>" required>
                                </label></div>
                            <br><br>
                                <div class="campo">
                                    <label><strong>Sexo Genético: </strong></label>
                                    <?php
                                     if ($Sexo == "m") {
                                        ?>
                                        <label><input type="radio" name="sexo" value="m" checked>Masculino</label>
                                        <label><input type="radio" name="sexo" value="f">Feminino</label>
                                        <?php
                                     } else {
                                        ?>
                                        <label><input type="radio" name="sexo" value="m">Masculino</label>
                                        <label><input type="radio" name="sexo" value="f" checked>Feminino</label>
                                        <?php
                                     }
                                     ?>
                                </div>

                                <div class="campo">
                                    <label><strong>Etnia/Cor: </strong></label>
                                    <?php
                                     if ($Cor == "branco") {
                                        ?>
                                        <label><input type="radio" name="cor" value="branco" checked>Branco</label>
            	                        <label><input type="radio" name="cor" value="preto">Preto</label>
                                        <label><input type="radio" name="cor" value="pardo">Pardo</label>
                                        <label><input type="radio" name="cor" value="indio">Indígena</label>
                                        <?php
                                     } elseif ($Cor == "preto") {
                                        ?>
                                        <label><input type="radio" name="cor" value="branco">Branco</label>
            	                        <label><input type="radio" name="cor" value="preto" checked>Preto</label>
                                        <label><input type="radio" name="cor" value="pardo">Pardo</label>
                                        <label><input type="radio" name="cor" value="indio">Indígena</label>
                                        <?php
                                     } elseif ($Cor == "pardo") {
                                        ?>
                                        <label><input type="radio" name="cor" value="branco">Branco</label>
            	                        <label><input type="radio" name="cor" value="preto">Preto</label>
                                        <label><input type="radio" name="cor" value="pardo" checked>Pardo</label>
                                        <label><input type="radio" name="cor" value="indio">Indígena</label>
                                        <?php
                                     } elseif ($Cor == "indio") {
                                        ?>
                                        <label><input type="radio" name="cor" value="branco">Branco</label>
            	                        <label><input type="radio" name="cor" value="preto">Preto</label>
                                        <label><input type="radio" name="cor" value="pardo">Pardo</label>
                                        <label><input type="radio" name="cor" value="indio checked">Indígena</label>
                                        <?php
                                     }
                                     ?>
                                </div>
                               <hr><br>

                               <div class="campo">
                                    <label for="email"><strong>E-mail</strong></label>
                                    <input type="email" name="email" id="email" size="30" value="<?php echo $Email; ?>">
                                <br><br>

                                <label for="senha"><strong>Senha de Acesso</strong></label>
                                <input type="password" name="senha" id="senha" size="8" onblur="validarsenha()" oninput="validarsenha()">
                                <div id="senhaStatus"></div>
                                <br>
                                <label for="senhac"><strong>Confirme a Senha de Acesso</strong></label>
                                <input type="password" name="senhac" id="senhac" size="8" onblur="confere()" oninput="confere()">
                                <div id="senhaStatus2"></div>
                                <p>No mínimo 8 caracteres, contendo letras maiúscula e minúscula e 1 caracter especial.</p>
                                <input type="button" onclick="password()" value="Sugestão de senha.">
                                </div>
                                <div class="campo">
                                <hr><br>
                                    <label for="telefone"><strong>Telefone/Celular</strong></label>
                                    <input type="text" name="telefone" id="telefone" size="15" value="<?php echo $Telefone; ?>">
                                </div>

                               <hr>
                               <div class="campo">
                                    <label for="log"><strong>Logradouro (Rua/Av./Al.)</strong></label>
                                    <input type="text" name="logradouro" id="logradouro" size="30" value="<?php echo $Logradouro; ?>"required>

                                    <label for="numero"><strong>Nº/Complemento</strong></label>
                                    <input type="text" name="numero" id="numero" size="6" value="<?php echo $Numero; ?>" required>
<br><br>
                                    <label for="bairro"><strong>Bairro</strong></label>
                                    <input type="text" name="bairro" id="bairro" size="20" value="<?php echo $Bairro; ?>" required>

                                    <label for="cep"><strong>CEP</strong></label>
                                    <input type="text" name="cep" id="cep" size="10" value="<?php echo $CEP; ?>" required>
<br><br>
                                    <label for="cidade"><strong>Cidade-UF</strong></label>
                                    <input type="text" name="cidade" id="cidade" size="30" value="<?php echo $Cidade; ?>" required>
                                </div>

                                <div>
                                    <input type="submit" value="Salvar Alteração">
                                    <a href="area_paciente.php"><input type="button" value="Cancelar"></a>
                                </div>
                            </form>
                            <script>
                                let el = document.getElementById("senhac");
                                el.onblur = function(){
                                    const s = document.getElementById("senhac").value;
                                    if (s===""){
                                    alert("É necessário cadastrar a senha!");
                                    }
                                }
                            </script>
                            <?php
                        }
                        else // CPF inválido
                        {
                            // Imprime alerta em javascript e faz o redirecionamento para alguma página
                            ?>
                            <script>
                                alert("CPF Inválido!");
                                window.location = '/index.php';
                            </script>
                            <?php
                        }
                    
                            ?>
      </body>
      </html>