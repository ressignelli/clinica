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
</head>

<body>

<?php

require_once('conecta.php');

    $cpf = $_POST['cpf'];

    # verificar se já possui cadastro
    $sql = mysqli_query($conn, "SELECT cpf FROM pacientes WHERE cpf = '$cpf'");
    $total = mysqli_num_rows($sql);
    
    if ($total>0){
        ?>
        <script>
            alert("Este cpf já possui cadastro!");
        </script>
        <?php

        echo "Este cpf já possui cadastro!";
        echo "<br><br>";
        echo "Para solicitar nova senha entre em contato!";
        exit();
    }
    if (!isset($_POST['senhac']) and !isset($_POST['senha'])){
        ?>
        <script>
            alert("É necessário cadastrar senha!");
        </script>
        <body onload='window.history.back();'>
        <?php
        exit();
    }else{
        $senhac = $_POST['senhac'];
        $senha = $_POST['senha'];
        if ($senhac==""){
        ?>
        <script>
            alert("É necessário cadastrar senha!");
        </script>
        <body onload='window.history.back();'>
        <?php
        exit();
        }elseif (!preg_match('/[a-z]/', $senhac)){
            ?>
              <script>
                alert("Senha deve conter ao menos uma letra minúscula!");
              </script>
              <body onload='window.history.back();'>
            <?php
            exit();
        }elseif (!preg_match('/[A-Z]/', $senhac)){
            ?>
                <script>
                    alert("Senha deve conter ao menos uma letra maiúscula!");
                </script>
                <body onload='window.history.back();'>
            <?php
            exit();
        } elseif (!preg_match('/[0-9]/', $senhac)){
            ?>
                <script>
                    alert("Senha deve conter ao menos um número!");
                </script>
                <body onload='window.history.back();'>
            <?php
            exit();
        } elseif (!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $senhac)){
            ?>
                <script>
                    alert("Senha deve conter ao menos um caracter especial!");
                </script>
                <body onload='window.history.back();'>
            <?php
            exit();
        } elseif (strlen($senhac) !==8){
            ?>
                <script>
                    alert("Senha deve conter 8 caracteres!");
                </script>
                <body onload='window.history.back();'>
            <?php
            exit();
        } elseif ($senhac !== $senha ){
            ?>
                <script>
                    alert("Senhas não conferem!");
                </script>
                <body onload='window.history.back();'>
            <?php
            exit();
        }
    }

    $nomepac =  $_POST['nomepac'];
    $sobrenomepac = $_POST['sobrenomepac'];
    $datanasc = $_POST['datanasc'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sexo = $_POST['sexo'];
    $cor = $_POST['cor'];

    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $senhac = $_POST['senhac'];
    
    $sql = "INSERT INTO pacientes (cpf, nomepac, sobrenomepac, datanasc, email, telefone, sexo, cor, logradouro, numero, bairro, cep, cidade, senha) VALUES ('$cpf', '$nomepac', '$sobrenomepac', '$datanasc', '$email', '$telefone', '$sexo', '$cor', '$logradouro', '$numero', '$bairro', '$cep', '$cidade', '$senhac')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<center><h3>Cadastro Realizado com Sucesso!</h3>";
        echo "<a href='../secretaria/exloginsec.php'><input type='button' value='Entrar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>

</body>
</html>