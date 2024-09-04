<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>Clínica Psiquiátrica JARL</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

    <br><hr><br><center>
        <h1>Filtrar Pacientes</h1>
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
        <div>
            <h2 id="subtitulo">Relação de Pacientes:</h1>
        </div>
        <br>
        <table border="4">
            <tr>
                <td>CPF</td>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>DN</td>
                <td>SEXO</td>
                <td>COR</td>
                <td>Logradouro</td>
                <td>Nº</td>
                <td>BAIRRO</td>
                <td>CEP</td>
                <td>CIDADE/UF</td>
                <td>E-MAIL</td>
                <td>TELEFONE</td>
                <td>DATA DE CONSULTA</td>
                <td>DATA DE RETORNO</td>
                <td>PAGAMENTO DE CONSULTA</td>
                <td>ALTERAR CADASTRO</td>
            </tr>
            <?php
                require_once("conecta.php");
                    if(isset($_POST['query2']) != "")
                    {
                        $ref = $_POST['query2'];
                    }
                    else
                    {
                        $ref = '';
                    }
                    if(isset($_POST['query3']) != "")
                    {
                        $ref2 = $_POST['query3'];
                    }
                    else
                    {
                        $ref2= '';
                    }
                    $dados_select = mysqli_query($conn, "SELECT * FROM pacientes WHERE nomepac LIKE '%$ref%' and sobrenomepac LIKE '%$ref2%'");

                    while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        echo '<td>'.$dado[4].'</td>';
                        echo '<td>'.$dado[5].'</td>';
                        echo '<td>'.$dado[6].'</td>';
                        echo '<td>'.$dado[7].'</td>';
                        echo '<td>'.$dado[8].'</td>';
                        echo '<td>'.$dado[9].'</td>';
                        echo '<td>'.$dado[10].'</td>';
                        echo '<td>'.$dado[11].'</td>';
                        echo '<td>'.$dado[12].'</td>';
                        echo '<td>'.$dado[13].'</td>';
                        echo '<td>'.$dado[15].'</td>';
                        echo '<td>'.$dado[16].'</td>';
                        if ($dado[20] == 1){
                        echo '<td>COM PAGAMENTO</td>';
                        }elseif ($dado[20] == 0){
                        echo '<td>SEM PAGAMENTO</td>';
                        }
                        ?><td><a href="../secretaria/altera_paciente.php?&cpf=<?=$dado[1]?>">Alterar</a></td><?php

                        echo '</tr>';
                    }
            ?>
        </table>
    <br>
    </center>
</html>