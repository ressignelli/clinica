<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="/css/login.css" />
</head>

<body>
    
<?php

$cpf = $_POST['cpf'];
global $cpf;

$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

require_once('./conecta.php');

  if (isset($entrar)) {
    $verifica = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf' AND BINARY senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
          ?>
            <script>
              alert("CPF e/ou senha incorretos!");
              window.location = '/index.php';
            </script>
          <?php
      }else{
        #setcookie($cpf);
        session_start();
        $_SESSION['cpf'] = $cpf;

        header("Location:area_paciente.php");
      }
  }
?>

</body>
</html>