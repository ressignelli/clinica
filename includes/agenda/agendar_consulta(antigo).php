<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body><center>

    <h2>Agendamento de Consulta</h2>
    
        <?php

            if (!isset($_GET['tc'])){

            $valor = mysqli_query($conn, "SELECT valor FROM valor_tipo_cons WHERE nome_tipo='presencial'");
            $valorpres = mysqli_fetch_array($valor);
            $valor = mysqli_query($conn, "SELECT valor FROM valor_tipo_cons WHERE nome_tipo='virtual'");
            $valorvir = mysqli_fetch_array($valor);
            $valor = mysqli_query($conn, "SELECT valor FROM valor_tipo_cons WHERE nome_tipo='domiciliar'");
            $valordom = mysqli_fetch_array($valor);

            ?>
               <form id="tipoconsulta" method="GET">
                   <div class="campo"><hr>
                       <label><strong>Escolha o Tipo de Consulta:</strong></label><br>
            	       <br><label><input type="radio" name="tc" value="presencial" checked>Presencial no consultório <?=$valorpres[0]?></label>
            	       <br><label><input type="radio" name="tc" value="virtual">Virtual por Telemedicina <?=$valorvir[0]?></label>
                       <br><label><input type="radio" name="tc" value="domiciliar">Visita Domiciliar(somente em SJ Rio Preto-SP no endereço cadastrado) <?=$valordom[0]?></label>
        	       </div><br>
                   <input type="submit" value="Prosseguir">
               </form>
            <?php 
                
            }

            if (!isset($_GET['datacons']) && isset($_GET['tc'])){

                $tc = $_GET['tc'];
        ?>
                <form id="data" method="GET">
                <label>Tipo de Consulta:<input type="text" name="tc" id="tc" value="<?= $tc ?>" readonly></label>
                <br><hr>
                <label>Escolha a data:</label>
                <br><br>

                    <div class="campo">
                        <label>Data de Consulta: </label><br>
                        <input type="date" name="datacons" id="datacons" min="<?= date('Y-m-d', strtotime(date('Y-m-d'). ' + 1 day')) ?>">
                        <input type="submit" value="Pesquisar Horários">
                    </div>
                </form>
        <?php } ?>

        <?php
            if (isset($_GET["datacons"])){

                $tc = $_GET["tc"];
                $datacons = $_GET["datacons"];
        ?>
                <form id="hora" method="GET">
                    <label>Tipo de Consulta:<input type="text" name="tc" id="tc" value="<?= $tc ?>" readonly></label>
                    <label>Data Escolhida:<input type="text" name="datacons" id="datacons" value="<?= $datacons ?>" readonly></label>
                    <br><hr><br>
                        <?php
                        $filtro_data2 = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$datacons' ");
                        $row = mysqli_fetch_array($filtro_data2);

                        if(empty($row)){
                            ?>
                           <script>
                               alert("Não há horários disponíveis para esta data");
                           </script>
                           <body onload='window.history.back();'><?php
                           exit();
                        }
                        $filtro_data = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$datacons' ");
                        echo "Selecione o horário desejado:";
                        $cont= 0;

                            while($dado = mysqli_fetch_array($filtro_data)) {

                                echo '<tr>';
                                for ($i = 3; $i <= 30; $i++) {

                                    if ($dado[$i] == "1") {
                                        if ($i == 3) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=7&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">7:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 4) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=73&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">7:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 5) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=8&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">8:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 6) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=83&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">8:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 7) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=9&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">9:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 8) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=93&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">9:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 9) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=10&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">10:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 10) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=103&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">10:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 11) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=11&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">11:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 12) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=113&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">11:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 13) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=12&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">12:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 14) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=123&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">12:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 15) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=13&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">13:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 16) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=133&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">13:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 17) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=14&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">14:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 18) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=143&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">14:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 19) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=15&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">15:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 20) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=153&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">15:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 21) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=16&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">16:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 22) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=163&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">16:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 23) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=17&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">17:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 24) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=173&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">17:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 25) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=18&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">18:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 26) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=183&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">18:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 27) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=19&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">19:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 28) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=193&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">19:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 29) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=20&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">20:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 30) {
                                            ?><td>&nbsp;<a href="../agenda/agendar.php?id=203&ret=0&data=<?=$datacons?>&cpf=<?=$cpf?>&tc=<?=$tc?>">20:30</a>&nbsp;</td>
                                            <?php
                                        }
                                    }elseif ($dado[$i] == "0") {
                                      $cont = $cont + 1;
                                    }
                                }
                                echo '</tr>';
                            }
                        if ($cont == 28) {
                            ?>
                            <script>
                               alert("Não há horários disponíveis para esta data");
                            </script>
                            <body onload='window.history.back();'>
                            <?php
                            #echo "<br><br>";
                            #echo "Não há horários disponíveis para esta data";
                        }
                    ?>
            </form>
            <?php } ?>
            </center>
</body>
</html>