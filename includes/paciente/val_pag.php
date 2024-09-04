<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo2.css" />
    <script src="validar_pix.js" type="text/javascript"></script>
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>

<body><center>
    <?php
    if (isset($_GET['cancelada'])){
        ?>
        <script>
            alert("Consulta cancelada com sucesso, aguarde a devolução do valor!");
        </script>

        <?php
    }

include_once('../paciente/area_paciente.php');
require_once('../geral/conecta.php');

$cpf = $_GET["cpf"];

    $consulta_pac = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf'");
        $exibe = mysqli_fetch_array($consulta_pac);

        if ($exibe["data_cons"]=="" or $exibe["data_cons"]==null){
            echo "<br>"."Não há consulta agendada para pagamento ou reembolso";
            exit();
        }

        $data = $exibe["data_cons"];
        $hora = $exibe["hora_cons"];
        $retorno = $exibe["retorno"];
        $lib_retorno = $exibe["lib_retorno"];
        $pagamento = $exibe["pagamento"];
        $cpf = $exibe["cpf"];


    if ($data >= date('Y-m-d') and $retorno == 0){
        echo "<br><br>";
        echo "Horário Agendado na data " . $data . " às " . $hora . " horas";
        pag($pagamento);
    }
    if ($pagamento==0 and $retorno==1){
        echo "<br><br>";
        echo "Não há pagamentos realizados para reembolso ou consulta para pagamento antecipado!";
        exit();
    }
    echo "<br>";


    function pag($pagamento){
    if (($pagamento==1) and (!isset($_GET['canc']))){
        $cpf = $_GET["cpf"];
        ?>
        <br>
        <div class="tipg">
            <h4>---- Pagamento já realizado! ----</h4>
            <hr>
            <p>Solicitar o cancelamento da consulta e a restituição de valor pago antecipadamente, clique no botão abaixo.</p>
        </div>

        <form method="GET">
            <input type="hidden" name="cpf" id="cpf" value="<?php echo $cpf; ?>">
            <br>
            <button type="submit" name="canc" value="1">Solicitar Cancelamento</button>

        </form>
        <br><hr><br>

        <?php

    }elseif (isset($_GET["canc"]) and $_GET["canc"]==1){
            $cpf = $_GET['cpf'];
            ?>

            <form method="GET">
                <div class="tipg">
                    <br><hr>
                    <label><strong>Confirma o cancelamento da consulta e a restituição do valor?</strong></label>
                </div>
                <div>
                    <p>PIX (prazo de até 1 dia útil)</p>
                    <p>Cartão de Crédito (prazo depende da operadora)</p>

                    <label>Digite a Chave Pix (somente para pagamentos por PIX)</label>
                    <input type="text" name="pix" id="pix" size="30">
                    <label>Confirme a Chave PIX</label>
                    <input type="text" size="30" onblur="confere()" oninput="confere()">
                    <div id="pixstatus"></div>
                    <input type="hidden" name="cpf" id="cpf" value="<?php echo $cpf; ?>">
                    <input type="hidden" name="canc" id="canc" value="2">
                    <br>
                </div>
                <button type="submit" name="confirme" value="1">Confirmar Cancelamento</button>
            </form>
            <?php

    }elseif (isset($_GET["confirme"])){
    require_once('../geral/conecta2.php');
            $cpf = $_GET["cpf"];
            $consulta_pac = mysqli_query($conn2, "SELECT * FROM pacientes WHERE cpf = '$cpf'");
            $exibe = mysqli_fetch_array($consulta_pac);
            $data = $exibe["data_cons"];
            $hora = $exibe["hora_cons"];
            $retorno = $exibe["retorno"];
            $lib_retorno = $exibe["lib_retorno"];
            $pagamento = $exibe["pagamento"];

            $sql = "UPDATE pacientes SET pagamento=0, data_cons=NULL WHERE cpf='$cpf'";

            if ($conn2->query($sql) === TRUE) {
            } else {
                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql ."<br>" . $conn2->error;
            }

                            if ($hora=="7:00"){
                                $sql = "UPDATE ag_consulta SET hora700=1 WHERE datainicial='$data'";
                            }elseif ($hora=="7:30"){
                                $sql = "UPDATE ag_consulta SET hora730=1 WHERE datainicial='$data'";
                            }elseif ($hora=="8:00"){
                                $sql = "UPDATE ag_consulta SET hora800=1 WHERE datainicial='$data'";
                            }elseif ($hora=="8:30"){
                                $sql = "UPDATE ag_consulta SET hora830=1 WHERE datainicial='$data'";
                            }elseif ($hora=="9:00"){
                                $sql = "UPDATE ag_consulta SET hora900=1 WHERE datainicial='$data'";
                            }elseif ($hora=="9:30"){
                                $sql = "UPDATE ag_consulta SET hora930=1 WHERE datainicial='$data'";
                            }elseif ($hora=="10:00"){
                                $sql = "UPDATE ag_consulta SET hora1000=1 WHERE datainicial='$data'";
                            }elseif ($hora=="10:30"){
                                $sql = "UPDATE ag_consulta SET hora1030=1 WHERE datainicial='$data'";
                            }elseif ($hora=="11:00"){
                                $sql = "UPDATE ag_consulta SET hora1100=1 WHERE datainicial='$data'";
                            }elseif ($hora=="11:30"){
                                $sql = "UPDATE ag_consulta SET hora1130=1 WHERE datainicial='$data'";
                            }elseif ($hora=="12:00"){
                                $sql = "UPDATE ag_consulta SET hora1200=1 WHERE datainicial='$data'";
                            }elseif ($hora=="12:30"){
                                $sql = "UPDATE ag_consulta SET hora1230=1 WHERE datainicial='$data'";
                            }elseif ($hora=="13:00"){
                                $sql = "UPDATE ag_consulta SET hora1300=1 WHERE datainicial='$data'";
                            }elseif ($hora=="13:30"){
                                $sql = "UPDATE ag_consulta SET hora1330=1 WHERE datainicial='$data'";
                            }elseif ($hora=="14:00"){
                                $sql = "UPDATE ag_consulta SET hora1400=1 WHERE datainicial='$data'";
                            }elseif ($hora=="14:30"){
                                $sql = "UPDATE ag_consulta SET hora1430=1 WHERE datainicial='$data'";
                            }elseif ($hora=="15:00"){
                                $sql = "UPDATE ag_consulta SET hora1500=1 WHERE datainicial='$data'";
                            }elseif ($hora=="15:30"){
                                $sql = "UPDATE ag_consulta SET hora1530=1 WHERE datainicial='$data'";
                            }elseif ($hora=="16:00"){
                                $sql = "UPDATE ag_consulta SET hora1600=1 WHERE datainicial='$data'";
                            }elseif ($hora=="16:30"){
                                $sql = "UPDATE ag_consulta SET hora1630=1 WHERE datainicial='$data'";
                            }elseif ($hora=="17:00"){
                                $sql = "UPDATE ag_consulta SET hora1700=1 WHERE datainicial='$data'";
                            }elseif ($hora=="17:30"){
                                $sql = "UPDATE ag_consulta SET hora1730=1 WHERE datainicial='$data'";
                            }elseif ($hora=="18:00"){
                                $sql = "UPDATE ag_consulta SET hora1800=1 WHERE datainicial='$data'";
                            }elseif ($hora=="18:30"){
                                $sql = "UPDATE ag_consulta SET hora1830=1 WHERE datainicial='$data'";
                            }elseif ($hora=="19:00"){
                                $sql = "UPDATE ag_consulta SET hora1900=1 WHERE datainicial='$data'";
                            }elseif ($hora=="19:30"){
                                $sql = "UPDATE ag_consulta SET hora1930=1 WHERE datainicial='$data'";
                            }elseif ($hora=="20:00"){
                                $sql = "UPDATE ag_consulta SET hora2000=1 WHERE datainicial='$data'";
                            }elseif ($hora=="20:30"){
                                $sql = "UPDATE ag_consulta SET hora2030=1 WHERE datainicial='$data'";
                            }
                            if ($conn2->query($sql) === TRUE) {
                            } else {
                            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql ."<br>" . $conn2->error;
                            }

                        if (isset($_GET["pix"])){
                            $pix = $_GET["pix"];
                        }else{
                            $pix = "0";
                        }

                        $sql = "UPDATE financeiro SET devolucao=1, data_sol_dev=NOW(), chave_pix='$pix' WHERE cpf='$cpf' and data_cons='$data'";
                        if ($conn2->query($sql) === TRUE) {
                            header('Location:val_pag.php?cancelada=1');
                        } else {
                        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql ."<br>" . $conn2->error;
                        }
    }elseif ($pagamento==0){
        $cpf = $_GET['cpf'];
        ?>
        <form method="POST" action="../financeiro/area_pag_paciente.php">
            <div class="campo">
                <br><br><hr>
                <input type="hidden" name="enviacpf" id="enviacpf" value="<?php echo $cpf; ?>">
                <button type="submit">Gostaria de Realizar o Pagamento Antecipado?</button>
            </div>
        </form>
        <?php
    }
    }#esse fecha a função
?>
</center></body>
</html>