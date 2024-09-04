<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Prontuário Médico - Área de consulta</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
    <script src="/js/jquery-3.7.1.min.js" type="text/javascript"></script>
</head>

<?php
        include_once('../medico/agendamed.php');
        require_once('../geral/conecta.php');
        
        if (isset($_GET['data'])){
            $data = $_GET['data'];
            $dados = mysqli_query($conn, "SELECT data_cons, hora_cons, nomepac, sobrenomepac, datanasc, cpf  FROM pacientes WHERE data_cons = '$data' and lib_retorno=0");
        }else{
            $dados = mysqli_query($conn, "SELECT data_cons, hora_cons, nomepac, sobrenomepac, datanasc, cpf  FROM pacientes WHERE data_cons >= date('Y-m-d') and lib_retorno=0");
        }

        $dados1 = mysqli_query($conn, "SELECT DISTINCT data_cons FROM pacientes ORDER BY data_cons");
        $dados2 = mysqli_query($conn, "SELECT data_cons FROM pacientes");
        $total = mysqli_num_rows($dados2);
?>
<body>
        <center><strong>
        <form class="campo" id="form5" method="GET">

        <h2>Área de Consulta:</h2>
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
                <td>Abrir Atendimento</td>
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
                        echo '<td> <a href="../consulta/atendimento2.php?cpf=' .$dado[5]. '&sel=0">Iniciar</a></td>';

                        echo '</tr>';
                    }
            ?>
        </table>
        </strong></center>
</form>
</body>


<script type="text/javascript">
    function mudanca(){
        const data = document.getElementById("data").value;
        alert(data);
        window.location.href = '../consulta/atendimento1.php?data='+data;
    }

</script>
</html>