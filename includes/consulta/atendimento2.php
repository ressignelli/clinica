<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Prontuário Médico - Área de consulta</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
    <script type="text/javascript" src="/js/nicEdit-latest.js"></script>
</head>

<?php

        include_once('../medico/agendamed.php');
        require_once('../consulta/conecta.php');


        $cpf = $_GET['cpf'];

        $iniciar = $_GET['sel'];

        if ($iniciar == 0) {

                $dados = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = $cpf");
                $dadospac = mysqli_fetch_array($dados);
                $retorno = $dadospac[17];
                $nome = $dadospac[2];
                $sobrenome = $dadospac[3];
                $dn = $dadospac[4];
                $data_cons_atual = $dadospac[15];
                $hora_cons_atual = $dadospac[17];

                $enderecopac = "Endereço: ".$dadospac[7].", Nº ".$dadospac[8].", Bairro: ".$dadospac[9]." - Cidade: ".$dadospac[11].", CEP: ".$dadospac[10];
                ?><div>
                <br><hr><br>
                <p>Prontuário Médico</p><br>
                <?php
                    echo "Paciente: ".$nome." ".$sobrenome;
                    echo " | Data Nascimento: ".$dn;
                    if ($retorno ==1){
                        echo "Consulta de Retorno";
                    }
                ?>
                </div><br><br><?php
                include('areaconsulta.php');

        }elseif ($iniciar == 1){

                $dados = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = $cpf");
                $dadospac = mysqli_fetch_array($dados);
                $retorno = $dadospac[17];
                $nome = $dadospac[2];
                $sobrenome = $dadospac[3];
                $dn = $dadospac[4];
                $data_cons_atual = $dadospac[15];
                $hora_cons_atual = $dadospac[17];

                $enderecopac = "Endereço: ".$dadospac[7].", Nº ".$dadospac[8].", Bairro: ".$dadospac[9]." - Cidade: ".$dadospac[11].", CEP: ".$dadospac[10];
                ?><div>
                <br><hr><br>
                <p>Prontuário Médico</p><br>
                <?php
                    echo "Paciente: ".$nome." ".$sobrenome;
                    echo " | Data Nascimento: ".$dn;
                    if ($retorno ==1){
                        echo "Consulta de Retorno";
                        $tipo_cons = "Retorno";
                        }else{
                            $tipo_cons = "Consulta Normal";
                    }
                ?>
                </div><br><br><?php

            include('areaexames.php');

            if (isset($_POST['area']))
            {
                $anamnese = $_POST['area'];
            } else{
                $anamnese = "";
            }
            if (isset($_POST['area1']))
            {
                $eem = $_POST['area1'];
            } else{
                $eem = "";
            }
# corrigir a declaração de ARRAY
            $dados = [
            [
                'html'=>'<!DOCTYPE HTML><html lang=pt-br><head><meta charset=UTF-8></head></html>',
                'img'=>'<img src=novo.bmp />',
            ],
            [
                'espaco' => '<br>',
                'cabecalho' => 'Prontuário Médico - Dr. José Augusto Ressignelli - 151901',
                'br0' => '<br>',
                'cabecalho1' => 'Tipo de Consulta: ',
                'br1' => $tipo_cons . '<br><br><hr>',
            ],
            [
                'identificacao' => 'Identificação:',
                'br2' => '<br>',
                'dadospacientecpf' => 'CPF: ',
                'valor' => $cpf . '<br>',
                'dadospacientenome' => 'Nome: ',
                'valor1' => $nome,
                'dadospacientesobrenome' => 'SobreNome: ',
                'valor2' => $sobrenome . '<br><hr>',
                'cabecalho2' => 'Dados da Consulta:',
                'br3' => '<br>',
            ],
            [
                'dadosconsultadata' => 'Data da Consulta: ',
                'valor3' => $data_cons_atual,
                'dadosconsultahora' => 'Hora da Consulta: ',
                'valor4' => $hora_cons_atual . '<br><br><hr>',
            ],
            [
                'dadosconsultaa' => 'Anamnese',
                'valor5' => $anamnese
            ],
            [
                'dadosconsultae' => 'Exame do Estado Mental',
                'valor6' => $eem
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


        }elseif ($iniciar == 2){

                $dados = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = $cpf");
                $dadospac = mysqli_fetch_array($dados);
                $retorno = $dadospac[17];
                $nome = $dadospac[2];
                $sobrenome = $dadospac[3];
                $dn = $dadospac[4];
                $data_cons_atual = $dadospac[15];
                $hora_cons_atual = $dadospac[16];

                $enderecopac = "Endereço: ".$dadospac[7].", Nº ".$dadospac[8].", Bairro: ".$dadospac[9]." - Cidade: ".$dadospac[11].", CEP: ".$dadospac[10];
                ?><div>
                <br><hr><br>
                <p>Prontuário Médico</p><br>
                <?php
                    echo "Paciente: ".$nome." ".$sobrenome;
                    echo " | Data Nascimento: ".$dn;
                    if ($retorno ==1){
                        echo "<br><br>";
                        echo "Consulta de Retorno";
                    }
                ?>
                </div><br><br><?php

            include('areareceita.php');

            if (isset($_POST['area']))
            {
                $resul_exames = $_POST['area'];
            } else{
                $resul_exames = "";
            }
            if (isset($_POST['area1']))
            {
                $ped_exames = $_POST['area1'];
            } else{
                $ped_exames = "";
            }
            $dados = [
            [
                'dadosconsultares' => 'Resultado de Exames','valor7' => $resul_exames
            ],
            [
                'dadosconsultaex' => 'Pedido de Exames','valor8' => $ped_exames
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

        }

        ?>
</html>