<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Área de Agenda - Secretaria</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<?php
        include_once('../secretaria/exloginsec.php');
        require_once('../secretaria/conecta.php');
        
        if (isset($_GET['data'])){
            $data = $_GET['data'];
            $dados = mysqli_query($conn, "SELECT data_cons, hora_cons, nomepac, sobrenomepac, datanasc, cpf, retorno  FROM pacientes WHERE data_cons ='$data' and lib_retorno=0");
        }else{
            $dados = mysqli_query($conn, "SELECT data_cons, hora_cons, nomepac, sobrenomepac, datanasc, cpf, retorno  FROM pacientes WHERE data_cons >= date('Y-m-d') and lib_retorno=0");
        }

        $dados1 = mysqli_query($conn, "SELECT DISTINCT data_cons FROM pacientes ORDER BY data_cons");
        $dados2 = mysqli_query($conn, "SELECT data_cons FROM pacientes");

        $total = mysqli_num_rows($dados2);

        if (!empty($_GET['del'])){
            $del = $_GET['del'];
            if ($del == 1){
                $cpf = $_GET['cpf'];
                        $d = mysqli_query($conn, "SELECT retorno, data_cons, data_ret, hora_cons FROM pacientes WHERE cpf='$cpf'");
                        $d = mysqli_fetch_array($d);
                        $hora = $d[3];
                        
                        if ($d[0] == 1){
                            $sqld = "UPDATE pacientes SET data_ret=NULL, lib_retorno=1, retorno=0 WHERE cpf='$cpf'";
                            $data = $d[2];

                        }elseif ($d[0] == 0){
                            $sqld = "UPDATE pacientes SET data_cons=NULL WHERE cpf='$cpf'";
                            $data = $d[1];
                        }
                        
                        if ($conn->query($sqld) == TRUE) {
                        }else{
                            echo "<h3>OCORREU UM ERRO: </h3>: " . $sqld . "<br>" . $conn->error;
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
                        if ($conn->query($sql) == TRUE) {
                            ?>
                            <script>
                                alert("Consulta desmarcada com sucesso!");
                            </script>
                            <?php
                        }else{
                            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                        }
        
            }
        }


?>
<body>
        <center><strong><form class="campo" id="form5" method="GET">
        <h2>Área de Consultas:</h2>
<hr>

        <label>Filtro de Data</label>
        <select name="data" id="data" onchange="mudanca()">
            <option value="" selected = selected>Selecione uma data</option>
                <?php
                    if($total >= 1) {
                        while($linha = mysqli_fetch_array($dados1)) {
                            if ($linha[0] >= date('Y-m-d')){
                                echo "<option value=".$linha[0]."> $linha[0] </option>";
                            }
                        }
                    }
                ?>
        </select>
        <br><br>

        <table border="4">
            <tr>
                <td>Data</td>
                <td>Hora</td>
                <td>Nome do Paciente</td>
                <td>SobreNome</td>
                <td>Data de Nascimento</td>
                <td>CPF</td>
                <td>Cancelar Atendimento</td>
            </tr>
        <?php

                    while($dado = mysqli_fetch_array($dados)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        echo '<td>'.$dado[4].'</td>';
                        echo '<td>'.$dado[5].'</td>';
                        echo '<td> <a href="agenda_sec.php?cpf=' .$dado[5]. '&del=1">Cancelar</a></td>';

                        echo '</tr>';
                    }

            ?>
        </table>
        </strong></center></form>
</body>


<script type="text/javascript">
$(document).ready(function(){
    $('#data').change(function(){

    });
});

    function mudanca(){
        const data = document.getElementById("data").value;
        alert(data);
        window.location.href = '../secretaria/agenda_sec.php?data='+data;
    }


</script>
</html>