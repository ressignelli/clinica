<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>
<?php

    require_once('../paciente/conecta.php');
    include_once('../paciente/area_paciente.php');
    
    $cpf = $_GET['cpf'];

    $infpaciente = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf='$cpf'");
    $infpaciente = mysqli_fetch_array($infpaciente);

    $data_Consult = $infpaciente[15];

?>
        <h2>Agendamento de Retorno</h2>
        <br><hr>
            <?php echo "Consulta Realizada em: " . $infpaciente[15] . " de forma: " .$infpaciente[21];
                echo "<br><br>";
                $dataminima = $infpaciente[15];
                $dataminima = date('Y-m-d', strtotime($dataminima. ' + 1 days'));

                $datamaxima = date('Y-m-d', strtotime($dataminima. ' + 30 days'));

                $filtro_data  = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data_Consult' ");
                $row = mysqli_fetch_array($filtro_data);

                if (($infpaciente[21] == "domiciliar") and (!isset($_GET['tc']))){
                    ?>
                    <form id="tipoconsulta" method="GET">
                        <div class="campo">
                        <label><strong>Escolha o Tipo de Consulta:</strong></label>
                        <label><input type="radio" name="tc" value="presencial">Presencial no consultório</label>
                        <label><input type="radio" name="tc" value="virtual">Virtual por Telemedicina</label>
                        <label><input type="radio" name="tc" value="domiciliar">Visita Domiciliar(somente em SJ Rio Preto-SP no endereço cadastrado)</label>
                        </div>
                        <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                        <input type="submit" value="Prosseguir">
                    </form>
                    <?php
                }elseif (!isset($_GET['tc'])) {
                    ?>
                    <form id="tipoconsulta" method="GET">
                        <div class="campo">
                        <label><strong>Escolha o Tipo de Consulta:</strong></label>
                        <label><input type="radio" name="tc" value="presencial">Presencial no consultório</label>
                        <label><input type="radio" name="tc" value="virtual">Virtual por Telemedicina</label>
                        </div>
                        <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                        <input type="submit" value="Prosseguir">
                    </form>
                    <?php
                }

    if (isset($_GET["tc"])){
        $tc = $_GET["tc"];
        ?>
        <form id="form3" method="GET">
            <br><hr>
            <label>Consulta de Retorno:
            <input type="text" name="tc" value="<?= $tc ?>" readonly></label>
            <br><hr>
            <label>Escolha a data:</label>
            <br><br>

                <label>Data do Retorno </label><br>

                <input type="date" name="data" id="data" min="<?= $dataminima; ?>" max="<?= $datamaxima; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="submit" value="Pesquisar Horários">
                <br><br>

                        <table border="4">
                        <?php
                        $cont = 0;
                        if(isset($_GET['data'])){

                            $data = $_GET['data'];

                            $filtro_data  = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data' ");
                            $filtro_data2 = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data' ");

                            $row = mysqli_fetch_array($filtro_data);

                            if(empty($row)){
                                echo "Não há horários disponíveis para esta data";
                                exit();
                            }
                            echo "Retorno para data: " .$data;
                            echo "<br><br>";
                            $tc = $_GET['tc'];
                            echo "VALOR DA CONSULTA: OS RETORNOS SÃO GRATUITOS!";
                            echo '<br><br><hr>';
                            echo "Selecione o horário desejado: ";

                            while($dado = mysqli_fetch_array($filtro_data2)) {

                                echo '<tr>';
                                for ($i = 3; $i <= 30; $i++) {

                                    if ($dado[$i] == "1") {
                                        if ($i == 3) {
                                            ?><td>&nbsp;<a href="agendar.php?id=7&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">7:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 4) {
                                            ?><td>&nbsp;<a href="agendar.php?id=73&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">7:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 5) {
                                            ?><td>&nbsp;<a href="agendar.php?id=8&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">8:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 6) {
                                            ?><td>&nbsp;<a href="agendar.php?id=83&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">8:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 7) {
                                            ?><td>&nbsp;<a href="agendar.php?id=9&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">9:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 8) {
                                            ?><td>&nbsp;<a href="agendar.php?id=93&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">9:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 9) {
                                            ?><td>&nbsp;<a href="agendar.php?id=10&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">10:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 10) {
                                            ?><td>&nbsp;<a href="agendar.php?id=103&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">10:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 11) {
                                            ?><td>&nbsp;<a href="agendar.php?id=11&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">11:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 12) {
                                            ?><td>&nbsp;<a href="agendar.php?id=113&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">11:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 13) {
                                            ?><td>&nbsp;<a href="agendar.php?id=12&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">12:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 14) {
                                            ?><td>&nbsp;<a href="agendar.php?id=123&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">12:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 15) {
                                            ?><td>&nbsp;<a href="agendar.php?id=13&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">13:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 16) {
                                            ?><td>&nbsp;<a href="agendar.php?id=133&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">13:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 17) {
                                            ?><td>&nbsp;<a href="agendar.php?id=14&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">14:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 18) {
                                            ?><td>&nbsp;<a href="agendar.php?id=143&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">14:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 19) {
                                            ?><td>&nbsp;<a href="agendar.php?id=15&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">15:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 20) {
                                            ?><td>&nbsp;<a href="agendar.php?id=153&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">15:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 21) {
                                            ?><td>&nbsp;<a href="agendar.php?id=16&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">16:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 22) {
                                            ?><td>&nbsp;<a href="agendar.php?id=163&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">16:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 23) {
                                            ?><td>&nbsp;<a href="agendar.php?id=17&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">17:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 24) {
                                            ?><td>&nbsp;<a href="agendar.php?id=173&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">17:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 25) {
                                            ?><td>&nbsp;<a href="agendar.php?id=18&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">18:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 26) {
                                            ?><td>&nbsp;<a href="agendar.php?id=183&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">18:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 27) {
                                            ?><td>&nbsp;<a href="agendar.php?id=19&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">19:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 28) {
                                            ?><td>&nbsp;<a href="agendar.php?id=193&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">19:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 29) {
                                            ?><td>&nbsp;<a href="agendar.php?id=20&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">20:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 30) {
                                            ?><td>&nbsp;<a href="agendar.php?id=203&ret=1&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">20:30</a>&nbsp;</td>
                                            <?php
                                        }
                                    }elseif ($dado[$i] == 0) {
                                      $cont = $cont + 1;
                                    }
                                }
                                echo '</tr>';
                            }
                        if ($cont == 28) {
                            echo "<br><br>";
                            echo "Não há horários disponíveis para esta data";
                        }
                        }
                        ?></table>
            </form>
<?php } ?>
</html>
