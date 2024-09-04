<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
      include_once('../consulta/atendimento1.php');
      include_once('../medico/agendamed.php');
      require_once('../geral/conecta.php');

        $cpf = $_GET['cpf'];

        $dados2 = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = $cpf");
                $dadospac = mysqli_fetch_array($dados2);
                $nome = $dadospac[2];
                $sobrenome = $dadospac[3];
                $dn = $dadospac[4];
                $data_cons_atual = $dadospac[15];
                $hora_cons_atual = $dadospac[16];
                $retorno = $dadospac[17];
                $email = $dadospac[12];
                $tel = $dadospac[13];

                $enderecopac = "Endereço: ".$dadospac[7].", Nº ".$dadospac[8].", Bairro: ".$dadospac[9]." - Cidade: ".$dadospac[11].", CEP: ".$dadospac[10];

            if (isset($_POST['area'])){
                $prescricao = $_POST['area'];
            }
            if (isset($_POST['area1'])){
                $relatorio = $_POST['area1'];
            }
            if (isset($_POST['area2'])){
                $atestado = $_POST['area2'];

            }

            $dados = [
            [
            'dadosconsultap'=>'Prescricao','valor9' => $prescricao
            ],
            [
            'dadosconsultar'=>'Relatorio','valor10' => $relatorio
            ],
            [
            'dadosconsultar'=>'Atestado','valor11' => $atestado
            ],
            ];

            // Abrir/criar arquivo
            $arquivo = fopen('consultas/' .$cpf. '-' .$data_cons_atual. '.html', 'a');

            // Popular os dados
            foreach ($dados as $linha) {
                fputcsv($arquivo, $linha);
            }
             // Fechar o arquivo
             fclose($arquivo);

       #      $csvData = file_get_contents('consultas/' .$cpf. '-' .$data_cons_atual. '.csv');

$cpf = $_GET['cpf'];
$retorno = $_GET['ret'];
$caminho_doc = 'consultas/' .$cpf. '-' .$data_cons_atual. '.html';

$sql = "INSERT INTO documentos (cpf, data_gravacao, end_prontuario) VALUES ('$cpf', NOW(), '$caminho_doc')";
if ($retorno == 1){
    $sql2 = "UPDATE pacientes SET retorno=0, lib_retorno=0, data_ret=null, hora_cons=null WHERE cpf=$cpf";
}else{
    $sql2 = "UPDATE pacientes SET retorno=0, lib_retorno=1 WHERE cpf=$cpf";
}
       if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
             echo "Consulta finalizada e gravada";
             echo "<br><hr><br>";
            include("../consulta/area_complementar.php");
       } else {
             echo "<h3>OCORREU UM ERRO: </h3>: " . $sql .  $sql2 ."<br>" . $conn->error;
       }
?>
</html>