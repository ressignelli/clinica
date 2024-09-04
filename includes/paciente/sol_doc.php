<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo2.css" />
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>
<body><center>
    <script>
        function printDiv() {
            window.print();
        }
    </script>
    <?php
    include_once('../paciente/area_paciente.php');

    if (!isset($_POST['forma'])){
    ?>
    <br><br>
    <form method="POST" action="../paciente/sol_doc.php">
    <div class="campo">
        <label><strong>Selecione quais documentos gostaria (até 7 dias úteis):</strong></label><br><br>
        <label><input type="checkbox" name="prontuario" value="prontuario">Prontuário Médico</label><br>
        <label><input type="checkbox" name="receita" value="receita">2ª Via da Última Receita</label><br>
        <label><input type="checkbox" name="atestado" value="atestado">2ª Via do Último Atestado</label><br>
        <label><input type="checkbox" name="relatorio" value="relatorio">2ª Via do Último Relatório</label><br>
        <label><input type="checkbox" name="recibo" value="recibo">Recibo de Pagamento</label><br>
        <label><input type="checkbox" name="nf" value="nf">Nota Fiscal</label><br>
        <label><input type="checkbox" name="informe" value="informe">Informe de Pagamentos</label><br>
    </div>
    <br><hr><br>
    <div class="campo">
        <label><strong>Forma de Recebimento:</strong></label>
        <label><input type="radio" name="forma" value="email">E-mail cadastrado</label>
        <label><input type="radio" name="forma" value="whatsapp">Whatsapp cadastrado</label>
        <label><input type="radio" name="forma" value="pessoalmente">Retirar Impresso Pessoalmente</label>
    </div>
    <div class="hiddens">
        <input type="hidden" name="cpf" value="<?= $cpf ?>">
    </div>
    <br><hr><br>
        <button type="submit">Solicitar</button>
    </form>

    <?php
    }else{
    $dados = array(0, 0, 0, 0, 0, 0, 0, 'nulo');

        if (isset($_POST['prontuario'])){
            $dados[0] = 1;
        }
        if (isset($_POST['receita'])){
            $dados[1] = 1;
        }
        if (isset($_POST['atestado'])){
            $dados[2] = 1;
        }
        if (isset($_POST['relatorio'])){
            $dados[3] = 1;
        }
        if (isset($_POST['recibo'])){
            $dados[4] = 1;
        }
        if (isset($_POST['nf'])){
            $dados[5] = 1;
        }
        if (isset($_POST['informe'])){
            $dados[6] = 1;
        }
        if (isset($_POST['forma'])){
            $dados[7] = $_POST['forma'];
        }
    require_once('../geral/conecta.php');
    $cpf = $_POST['cpf'];
    $sql = "INSERT INTO solicit_docs (cpf, data_hora_sol, prontuario, receita, atestado, relatorio, recibo, nf, informe, forma_envio) VALUES ('$cpf', CURRENT_TIMESTAMP, '$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dados[4]', '$dados[5]', '$dados[6]', '$dados[7]')";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h3>Solicitação realizada com sucesso, aguarde o encaminhamento!</h3>";
        echo "<br><hr><br><b>";
        echo "CPF: " . $cpf."<br></b>";
        echo "Data da Solicitação:" . date("d-m-Y") ."<br><hr>";
        echo "Foi solicitado:"."<br>";
        if ($dados[0] == 1){
            echo "Prontuário"."<br>";
        }
        if ($dados[1] == 1){
            echo "2ª via da receita"."<br>";
        }
        if ($dados[2] == 1){
            echo "2ª via do atestado"."<br>";
        }
        if ($dados[3] == 1){
            echo "2ª via do relatório"."<br>";
        }
        if ($dados[4] == 1){
            echo "Recibo"."<br>";
        }
        if ($dados[5] == 1){
            echo "Nota Fiscal"."<br>";
        }
        if ($dados[6] == 1){
            echo "Informe para IR"."<br><br><hr>";
        }
        echo "Na forma de: " .$dados[7]. "<br><br>";
        echo "<a href='../paciente/area_paciente.php'><input type='button' value='Voltar'></a>";
        echo '<input type="button" value="Imprimir" onclick="printDiv()">';
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }
    ?>



</body>
</html>
