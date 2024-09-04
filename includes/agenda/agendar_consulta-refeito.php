<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>
    <h2>Agendamento de Consulta</h2>
        <br><hr><br>
        <label>Escolha a data e horário:</label>
        <br><br>
            <form id="form3" method="POST">
                <label>Data de Consulta: </label><br>

                <input type="date" name="datacons" id="datacons" min="<?= date('Y-m-d') ?>">
                <input type="submit" value="Pesquisar Horários">
                <br><br>

                        <table border="4">
                        <?php
                        $cont = 0;
                        if(isset($_POST['datacons'])){

                            $data_Consult = $_POST['datacons'];

                            $filtro_data  = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data_Consult' ");
                            $filtro_data2 = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data_Consult' ");

                            $link = mysqli_query($conn, "SELECT linkpag FROM medico");
                            $link = mysqli_fetch_array($link);

                            $row = mysqli_fetch_array($filtro_data);

                            if(empty($row)){
                                echo "Não há horários disponíveis para esta data";
                                exit();
                            }

                            ?>
                            <form id="tipoconsulta" method="POST">
                                <div class="campo">
            	                    <label><strong>Escolha o Tipo de Consulta:</strong></label>
            	                    <label><input type="radio" name="tipo_cons" value="presencial" checked>Presencial no consultório <?=$row[31]?></label>
            	                    <label><input type="radio" name="tipo_cons" value="virtual">Virtual por Telemedicina <?=$row[32]?></label>
                                    <label><input type="radio" name="tipo_cons" value="domiciliar">Visita Domiciliar(somente em SJ Rio Preto-SP no endereço cadastrado) <?=$row[33]?></label>
        	                    </div>
                                <input type="hidden" name="datacons" value="<?php echo $data_Consult; ?>">
                                <input type="submit" value="Prosseguir">
                            </form>
                            <br><hr><br>
                            <?php

                            if (isset($_POST["tipo_cons"])){
                                $tipo_cons = $_POST["tipo_cons"];

                                echo "Selecione o horário desejado: ";

                                while($dado = mysqli_fetch_array($filtro_data2)) {

                                echo '<tr>';
                                for ($i = 3; $i <= 30; $i++) {

                                    if ($dado[$i] == "1") {
                                        if ($i == 3) {
                                            ?><td>&nbsp;<a href="agendar.php?id=7&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">7:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 4) {
                                            ?><td>&nbsp;<a href="agendar.php?id=73&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">7:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 5) {
                                            ?><td>&nbsp;<a href="agendar.php?id=8&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">8:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 6) {
                                            ?><td>&nbsp;<a href="agendar.php?id=83&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">8:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 7) {
                                            ?><td>&nbsp;<a href="agendar.php?id=9&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">9:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 8) {
                                            ?><td>&nbsp;<a href="agendar.php?id=93&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">9:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 9) {
                                            ?><td>&nbsp;<a href="agendar.php?id=10&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">10:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 10) {
                                            ?><td>&nbsp;<a href="agendar.php?id=103&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">10:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 11) {
                                            ?><td>&nbsp;<a href="agendar.php?id=11&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">11:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 12) {
                                            ?><td>&nbsp;<a href="agendar.php?id=113&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">11:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 13) {
                                            ?><td>&nbsp;<a href="agendar.php?id=12&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">12:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 14) {
                                            ?><td>&nbsp;<a href="agendar.php?id=123&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">12:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 15) {
                                            ?><td>&nbsp;<a href="agendar.php?id=13&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">13:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 16) {
                                            ?><td>&nbsp;<a href="agendar.php?id=133&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">13:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 17) {
                                            ?><td>&nbsp;<a href="agendar.php?id=14&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">14:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 18) {
                                            ?><td>&nbsp;<a href="agendar.php?id=143&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">14:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 19) {
                                            ?><td>&nbsp;<a href="agendar.php?id=15&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">15:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 20) {
                                            ?><td>&nbsp;<a href="agendar.php?id=153&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">15:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 21) {
                                            ?><td>&nbsp;<a href="agendar.php?id=16&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">16:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 22) {
                                            ?><td>&nbsp;<a href="agendar.php?id=163&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">16:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 23) {
                                            ?><td>&nbsp;<a href="agendar.php?id=17&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">17:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 24) {
                                            ?><td>&nbsp;<a href="agendar.php?id=173&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">17:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 25) {
                                            ?><td>&nbsp;<a href="agendar.php?id=18&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">18:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 26) {
                                            ?><td>&nbsp;<a href="agendar.php?id=183&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">18:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 27) {
                                            ?><td>&nbsp;<a href="agendar.php?id=19&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">19:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 28) {
                                            ?><td>&nbsp;<a href="agendar.php?id=193&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">19:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 29) {
                                            ?><td>&nbsp;<a href="agendar.php?id=20&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">20:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 30) {
                                            ?><td>&nbsp;<a href="agendar.php?id=203&ret=0&data=<?=$data_Consult?>&cpf=<?=$cpf?>&tc=<?=$tipo_cons?>">20:30</a>&nbsp;</td>
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
                        }
                        ?></table>
            </form>
</body>
</html>