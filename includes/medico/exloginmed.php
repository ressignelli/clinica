<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Área do Médico</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>
    <div>
        <h2>Área do Médico</h2>
    </div>
    <nav>
    <ul class="menu">
        <li><a href="../medico/agendamed.php">Agenda de Consultas</a></li>
        <li><a href="#" >Receituário em Branco</a></li>
        <li><a href="modelos/modelo_atest_branco.html" target="_blank">Atestado em Branco</a></li>
        <li><a href="#">Mudar Senha de Acesso</a></li>
        <li><a href="../medico/pendencias.php">Pendências</a></li>
        <li><a href="../geral/medicacoes.php" target="_black">Medicações</a></li>
        <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Testes e Escalas</a>
            <div class="dropdown-content">
                <a href="../instrumentos/asrs18.php" target="_blank">ASRS-18(para TDHA)</a>
                <a href="../instrumentos/dep_alcool.php" target="_blank">Dependência de Álcool</a>
                <a href="../instrumentos/dep_nicotina.php" target="_blank">Dependência de Nicotina</a>
                <a href="../instrumentos/hachinski.php" target="_blank">Demência Vascular</a>
            </div>
        </li>
    </ul>
    </nav>

    <center>
        <h2>Filtrar Pacientes</h2>
        <br>
        <form id="form1" method="POST">
            <label>Nome:</label>
                <input type="text" id="query2" name="query2" />
        </form>
        <br>
        <form id="form2" method="POST">
            <label>Sobrenome:</label>
                <input type="text" id="query3" name="query3" />
        </form>
            <br><br><br>
        <div>
            <h2 id="subtitulo">Relação de Pacientes:</h1>
        </div>
        <br>
        <table border="4">
            <tr>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>DN</td>
                <td>CPF</td>
                <td>RELAÇÃO DE DOCUMENTOS</td>
            </tr>
            <?php
                require_once('../geral/conecta.php');

                    if(isset($_POST['query2']) != ""){
                        $ref = $_POST['query2'];
                    }else{
                        $ref = "";
                    }  
                    if(isset($_POST['query3']) != ""){
                        $ref2 = $_POST['query3'];
                    }else{
                        $ref2= "";
                    }                       
                    $dados_select = mysqli_query($conn, "SELECT nomepac, sobrenomepac, datanasc, cpf FROM pacientes WHERE nomepac LIKE '%$ref%' and sobrenomepac LIKE '%$ref2%'");

                    while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';

                        ?><td>&nbsp;<a href="consulta_documentos.php?cpf=<?=$dado[3]?>">Abrir Documentos</a>&nbsp;</td>
                        <?php
                        echo '</tr>';
                    }
            ?>
        </table>
    </center>
    </body>
</html>