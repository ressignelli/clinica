<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo2.css" />
</head><center>
    


<?php
    include_once('../secretaria/exloginsec.php');
    require_once('conecta.php');
    
    ?><h2>Agendamento de Consulta</h2><?php
    
    $pacientes = mysqli_query($conn, "SELECT * FROM pacientes");
    
    while($pac = mysqli_fetch_array($pacientes)) {

        if ($pac[15] < date('Y-m-d')){
            $sql = "UPDATE pacientes SET lib_retorno=0, data_cons=null WHERE cpf='$pac[1]'";
                if ($conn->query($sql) === TRUE) {
                } else {
                    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                }
        }

        if ($pac[15] < date('Y-m-d')){
            $sql = "UPDATE pacientes SET retorno=0, data_ret=null WHERE cpf='$pac[1]'";
                if ($conn->query($sql) === TRUE) {
                } else {
                    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                }
        }



    }

    
    if(!isset($_GET['op'])){
    ?>
        <form action="ag_cons_sec.php" method="POST">
            <p>Filtrar Pacientes: </p>
        <br>
            <label>Nome:</label>
                <input type="text" id="nome" name="nome" />
            <label>Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" />
            <button type="submit" name="filtro_pac" value="1">Filtrar</button>
        </form>
    <br><br><br>

    <form action="ag_cons_sec.php" method='GET'>
            <label>Selecione o Paciente para Agendamento!</label>
            <?php
            require_once('conecta.php');

               if(isset($_POST['nome']) != "")
                    {
                        $nome = $_POST['nome'];
                    }
                    else
                    {
                        $nome = '';
                    }
                    if(isset($_POST['sobrenome']) != "")
                    {
                        $sobrenome = $_POST['sobrenome'];
                    }
                    else
                    {
                        $sobrenome= '';
                    }
                    $pacientes = mysqli_query($conn, "SELECT * FROM pacientes WHERE (data_cons is null or lib_retorno=1) and (nomepac LIKE '%$nome%' and sobrenomepac LIKE '%$sobrenome%')");

            ?>
            <table border="4">
            <tr>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>DN</td>
                <td>CPF</td>
                <td>AGENDAR</td>
            </tr>
            <?php
                    while($pac = mysqli_fetch_array($pacientes)) {
                        echo '<tr>';
                        echo '<td>'.$pac[2].'</td>';
                        echo '<td>'.$pac[3].'</td>';
                        echo '<td>'.$pac[4].'</td>';
                        echo '<td>'.$pac[1].'</td>';
                        ?><td><a href="ag_cons_sec.php?op=1&data_cons=<?=$pac[15]?>&nome=<?=$pac[2]?>&cpf=<?=$pac[1]?>&ret=<?=$pac[18]?>&lib_ret=<?=$pac[19]?>&tipo_cons=<?=$pac[21]?>">Selecionar</a></td>
                        <?php
                    }
            ?>
            </table>
    </form>
    <?php

    }else{

        echo "<br>";
        echo "Agendar para o paciente: " .$_GET['nome']. "<br><br>";
        $op = $_GET['op'];
        $cpf = $_GET['cpf'];
        $ret = $_GET['ret'];
        $nome = $_GET['nome'];
        $lib_ret = $_GET['lib_ret'];
        $tipo_cons = $_GET['tipo_cons'];
        
        $data_ag_cons = $_GET['data_cons'];
        $datamaxima = date('Y-m-d', strtotime($data_ag_cons. ' + 31 days'));
        
        if (date('Y-m-d')>$datamaxima){
            ?><script>
                alert("Paciente perdeu o prazo de retorno gratuito!");
            </script><?php
            require_once('conecta.php');
            $sql = "UPDATE pacientes SET lib_retorno=0, data_cons=null WHERE cpf='$cpf'";
            if (($conn->query($sql) === TRUE)) {
                }else{
                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                }
                ?><script>
                    window.location = 'ag_cons_sec.php';
                </script>
                <?php
             exit();
        }

        if (isset($_GET['tc'])){
            $tc = $_GET['tc'];
        }
        if ($lib_ret==1){
            echo "Consulta de Retorno";
            echo "<br><hr>";
        }

        if ($op==1){
            ?>
            <form method="GET" action="ag_cons_sec.php">
                
                <div class="campo">
                    <label><strong>Escolha o Tipo de Consulta:</strong></label>
            	    <label><input type="radio" name="tc" value="presencial" checked>Presencial no consultório</label>
            	    <label><input type="radio" name="tc" value="virtual">Virtual por Telemedicina</label>
            	    <?php
            	    if ($tipo_cons == "domiciliar" or $lib_ret==0){
            	    ?>
                        <label><input type="radio" name="tc" value="domiciliar">Visita Domiciliar(somente em SJ Rio Preto-SP no endereço cadastrado)</label>
                    <?php
                    }
                    ?>
        	    </div>
        	    
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                <input type="hidden" name="op" value="2">
                <input type="hidden" name="lib_ret" value="<?php echo $lib_ret; ?>">
                <input type="hidden" name="tipo_cons" value="<?php echo $tipo_cons; ?>">
                <input type="submit" value="Prosseguir">
            </form>
            <?php
        }elseif ($op==2){
            echo "<br>";
            echo "Tipo de Consulta Selecionada: " .$_GET['tc']. "<br>";
            ?>
            <br><hr>
            <label>Escolha a data:</label>
            <br><br>
            <form id="calendario" method="GET" action="ag_cons_sec.php">
                <label>Data de Consulta: </label><br>

                <input type="date" name="datacons" id="datacons" min="<?= date('Y-m-d') ?>">

                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                <input type="hidden" name="op" value="2">
                <input type="hidden" name="lib_ret" value="<?php echo $lib_ret; ?>">
                <input type="hidden" name="tipo_cons" value="<?php echo $tipo_cons; ?>">
                <input type="submit" value="Pesquisar Horários">

                <table border="4">
                        <?php
                        $cont = 0;

                        if (isset($_GET['datacons']) and isset($_GET['cpf'])){
                            require_once('conecta.php');
                            $data = $_GET['datacons'];

                            $filtro_data  = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data' ");
                            $filtro_data2 = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial = '$data' ");

                            $row = mysqli_fetch_array($filtro_data);

                            if(empty($row)){
                                echo "Não há horários disponíveis para esta data";
                                exit();
                            }

                            echo '<br><br><hr>';
                            echo "Selecione o horário desejado: ";

                            while($dado = mysqli_fetch_array($filtro_data2)) {

                                echo '<tr>';
                                for ($i = 3; $i <= 30; $i++) {

                                    if ($dado[$i] == "1") {
                                        if ($i == 3) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=7&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">7:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 4) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=73&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">7:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 5) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=8&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">8:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 6) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=83&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">8:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 7) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=9&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">9:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 8) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=93&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">9:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 9) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=10&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">10:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 10) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=103&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">10:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 11) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=11&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">11:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 12) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=113&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">11:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 13) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=12&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">12:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 14) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=123&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">12:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 15) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=13&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">13:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 16) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=133&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">13:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 17) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=14&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">14:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 18) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=143&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">14:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 19) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=15&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">15:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 20) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=153&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">15:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 21) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=16&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">16:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 22) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=163&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">16:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 23) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=17&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">17:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 24) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=173&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">17:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 25) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=18&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">18:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 26) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=183&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">18:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 27) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=19&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">19:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 28) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=193&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">19:30</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 29) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=20&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">20:00</a>&nbsp;</td>
                                            <?php
                                        } elseif ($i == 30) {
                                            ?><td>&nbsp;<a href="agendar2.php?id=203&ret=<?=$lib_ret?>&data=<?=$data?>&cpf=<?=$cpf?>&tc=<?=$tc?>">20:30</a>&nbsp;</td>
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

            <?php
        }
    }
    ?>
    </center>
</html>


