<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="./css/clinica_estilo1.css" />
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>

<body><center>
    <script>
        function printTela() {
            window.print();
        }
    </script>
<?php

include_once('../paciente/area_paciente.php');
require_once('../paciente/conecta.php');

    $consulta_pac = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf'");
    setcookie('cpf', $cpf);
        if($exibe2 = mysqli_fetch_array($consulta_pac)){
          $nome = $exibe2["nomepac"];
          $data_ag_cons = $exibe2["data_cons"];
          $hora_ag_cons = $exibe2["hora_cons"];
          $data_ret = $exibe2["data_ret"];
          $retorno = $exibe2["retorno"];
          $lib_retorno = $exibe2["lib_retorno"];
        }

    if ($data_ag_cons >= date('Y-m-d') and $retorno == 0 and $lib_retorno == 0){
        echo "Horário Agendado na data " . $data_ag_cons . " às " . $hora_ag_cons . " horas";
        ?>
        <form method="GET" action="desmarcar.php"><br>
            <a href="desmarcar.php?cpf=<?=$cpf?>&ret=0&data=<?=$data_ag_cons?>&hora=<?=$hora_ag_cons?>">Desmarcar consulta</a>
            <br><br>
            <input type="button" value="Imprimir" onclick="printTela()">
        </form>
    <?php

    }elseif ($data_ag_cons >= date('Y-m-d') and $lib_retorno == 1) {
        $datamaxima = date('Y-m-d', strtotime($data_ag_cons. ' + 31 days'));
            if (date('Y-m-d')>$datamaxima){
                ?><script>
                    alert("Você perdeu o prazo de retorno gratuito!");
                </script><?php
                    $sql = "UPDATE pacientes SET lib_retorno=0, data_cons=null WHERE cpf='$cpf'";
                    if (($conn->query($sql) === TRUE)) {
                        } else {
                        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . $sql2. "<br>" . $conn->error;
                    }
                ?>
                <script>
                    window.location = 'agenda_pac.php';
                </script>
                <?php
                    exit();
            }
            echo "Você possui um retorno gratuito para agendar, clique abaixo!";
            echo "<br><br>";
            ?>
                <form method="GET" action="../agenda/marcar_ret.php">
                <button type='submit' value="<?=$cpf?>" name="cpf">Agendar Retorno</button>
               </form>
            <?php
    }elseif ($data_ag_cons >= date('Y-m-d') and $retorno == 1){
        echo "Horário de Retorno Agendado na data " . $data_ret . " às " . $hora_ag_cons . " horas";
        echo "<br><br>"
                ?>
                <form><br>
                <a href="../paciente/desmarcar.php?cpf=<?=$cpf?>&ret=1&data=<?=$data_ret?>&hora=<?=$hora_ag_cons?>">Desmarcar consulta de retorno</a>
                <br><br>
                <input type="button" value="Imprimir" onclick="printTela()">
                </form>
    <?php

    }else{

         include_once('../agenda/agendar_consulta.php');
    }
?>
</center></body>

</html>