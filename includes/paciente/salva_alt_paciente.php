<?php
    require_once('conecta.php');

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

    $cpf = $_POST['cpf'];
    $nomepac =  $_POST['Nomepac'];
    $sobrenomepac = $_POST['Sobrenomepac'];

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
    $senha = $_POST['senhac'];


    $sql4 = "UPDATE pacientes SET nomepac='$nomepac',
     sobrenomepac='$sobrenomepac',
     datanasc='$datanasc',
     email='$email',
     telefone='$telefone',
     sexo='$sexo',
     cor='$cor',
     logradouro='$logradouro',
     numero='$numero',
     bairro='$bairro',
     cep='$cep',
     cidade='$cidade',
     senha='$senha' WHERE cpf='$cpf'";

    if ($conn->query($sql4) === TRUE) {
      echo "<center><h1>Registro Alterado com Sucesso</h1>";
      echo "<a href='/index.php'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql4 . "<br>" . $conn->error;
    }
?>

