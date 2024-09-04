<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Área do Médico</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

    <br><hr><br><br><br>
    <div>
        <h1 id="titulo">Área do Médico-Documentos do Paciente</h1>
    </div>
    <br><hr><br><br><br>

    <nav>
    <ul class="menu">
        <li><a href="../medico/agendamed.php">Agenda de Consultas</a></li>
        <li><a href="#">Receituário em Branco</a></li>
        <li><a href="#">Atestado em Branco</a></li>
        <li><a href="#">Mudar Senha de Acesso</a></li>
        <li><a href="#">Sair</a></li>
    </ul>
    </nav>
    <br><hr><br><br><br>

            <?php

                require_once('../geral/conecta.php');

                    $cpf = $_GET['cpf'];

                    $dados_pac = mysqli_query($conn, "SELECT nomepac, sobrenomepac, datanasc, cpf FROM pacientes WHERE cpf=$cpf");
                    $inf_paciente  = mysqli_fetch_array($dados_pac);

                        echo "Nome: " .$inf_paciente[0]. " "  .$inf_paciente[1];
                        echo "<br>";
                        echo "DN: " .$inf_paciente[2]. " | CPF: " .$inf_paciente[3];
                        echo "<br><hr><br>";

                    $docs_paciente = mysqli_query($conn, "SELECT * FROM documentos WHERE cpf=$cpf");
                    $doc_filtro_paciente  = mysqli_fetch_array($docs_paciente);

                    if(empty($doc_filtro_paciente)){
                        ?>
                        <script>
                            alert("Não há documentos disponíveis para este paciente!");
                            window.history.back();
                        </script>
                        <?php
                    }

                    ?>
                    <form id="form" method="GET">
                    <table border="4">
                        <tr>
                        <td>CPF</td>
                        <td>DATA DA CONSULTA</td>
                        <td>ABRIR PRONTUÁRIO</td>
                        </tr>
                    <?php
                    $docs_paciente = mysqli_query($conn, "SELECT * FROM documentos WHERE cpf=$cpf");
                    while($valores = mysqli_fetch_array($docs_paciente)) {
                        echo '<tr>';
                        echo '<td>'.$valores[0].'</td>';
                        echo '<td>'.$valores[1].'</td>';
                        ?>
                        <td> <a href="../consulta/<?=$valores[2]?>" target="_blank">Abrir Documento</a></td>
                       
                    <?php
                        echo '</tr>';
                    }
                    ?>
                    </table>
                    </form>

    </body>
</html>

