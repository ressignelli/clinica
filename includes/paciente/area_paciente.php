<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Área do Paciente</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>
    <body><center>
        <div class="cabecou">
           <img src="/lib/logos/novo.bmp"  alt="JARL" />
        </div>


<?php
    session_start();

    $cpf = $_SESSION['cpf'];

    require_once('../geral/conecta.php');

    $consulta_pac = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf'");
        $exibe = mysqli_fetch_array($consulta_pac);

        $nome = $exibe["nomepac"];

?>

<hr>
            <br>
            <div class="cabec">
                <label>Bem vindo: <?php echo " ". $nome; ?></label>
                <br>
                <label>CPF: <?php echo " ". $cpf; ?></label>
                <br>
            </div>
            <nav>
                <ul class="menu">
                   <li><a href="../paciente/exlogin.php">Alterar Cadastro</a></li>
                   <li><a href="../paciente/agenda_pac.php">Agenda de Consulta</a></li>
                   <li><a href="../paciente/sol_doc.php">Solicitação de Documentos</a></li>
                   <li><a href="https://wa.me/5517991737941" target="_blank">Converse com seu Médico</a></li>
                   <li><a href="../paciente/val_pag.php?cpf=<?=$cpf?>">Valores e Pagamento</a></li>
                   <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Testes e Escalas</a>
                        <div class="dropdown-content">
                            <a href="../instrumentos/asrs18.php" target="_blank">ASRS-18(para TDHA)</a>
                            <a href="../instrumentos/dep_alcool.php" target="_blank">Dependência de Álcool</a>
                            <a href="../instrumentos/dep_nicotina.php" target="_blank">Dependência de Nicotina</a>
                        </div>
                   </li>
                </ul>
            </nav>

</center>
    </body>
</html>