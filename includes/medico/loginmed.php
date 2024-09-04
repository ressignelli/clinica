<?php
$cpf = $_POST["cpf"];
$entrar = $_POST["entrar"];
$senha = $_POST["senha"];
require_once('../geral/conecta.php');

  if (isset($entrar)) {
    $verifica = mysqli_query($conn, "SELECT * FROM medico WHERE cpf = '$cpf' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
          ?>
            <script>
              alert("CPF e/ou senha incorretos!");
              window.location = '/index.php';
            </script>
          <?php
      }else{
        setcookie("login",$cpf);
        header("Location:../medico/exloginmed.php");
      }
  }
?>