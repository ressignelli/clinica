<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="css/clinica_estilo1.css" />
</head>

<body><center>
    <?php
        require_once('../paciente/area_paciente.php');
        require_once('../geral/conecta.php');

        $cpf = $_POST['enviacpf'];

            $consulta_pac = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf'");
            $exibe = mysqli_fetch_array($consulta_pac);

            $data = $exibe["data_cons"];
            $hora = $exibe["hora_cons"];
            $tipo_consulta = $exibe["tipo_consulta"];

            $consulta_inf = mysqli_query($conn, "SELECT * FROM valor_tipo_cons WHERE nome_tipo = '$tipo_consulta'");
            $exibe2 = mysqli_fetch_array($consulta_inf);

            $valor = $exibe2["valor"];

            echo "<br><br>";
            echo "Consulta " .$tipo_consulta. ", agendada em " .$data. " às " .$hora;

            echo "<br><br>";
            echo "Valor: " .$valor;
            echo "<br><br>";
            echo "Clique no link para ser direcionado ao serviço de pagamento.";
            if ($tipo_consulta == "presencial") {
                ?><a href="<?= $exibe2['link']; ?>" target="_blank">Clique aqui</a><?php
            }elseif ($tipo_consulta == "virtual") {
                ?><a href="<?= $exibe2['link']; ?>" target="_blank">Clique aqui</a><?php
            }elseif ($tipo_consulta == "domiciliar") {
                ?><a href="<?= $exibe2['link']; ?>" target="_blank">Clique aqui</a><?php
            }


    ?>


</center>
</body>
</html>