<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
    <script src="/js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/nicEdit-latest.js"></script>
</head>

 <?php

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $msg = $_POST['msg'];

            $dados = [
            [
                'dadosmsg' => 'Nome: ',
                'valor' => $nome,
                'dadosmsg1' => 'email: ',
                'valor1' => $email,
                'dadosmsg2' => 'telefone: ',
                'valor2' => $telefone,
            ],
            [
                'dadosmsg3' => 'Mensagem',
                'valor3' => $msg,
            ],
            ];

            // Abrir/criar arquivo
            $arquivo = fopen('msg/' .date('d-m-Y-H-i'). '-' .$nome. '.html', 'a');

            // Popular os dados
            foreach ($dados as $linha) {
                fputcsv($arquivo, $linha);
            }

            // Fechar o arquivo
            fclose($arquivo);
            
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "ressignelli@jarlpsiquiatria.com.br";
        $to = "ressignelli@yahoo.com.br";
        $subject = "Envio de mensagem de cliente";
        $message = "Nome: " . $nome . " | Mensagem: " .$msg;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>
        <script>
                alert("Mensagem enviada com sucesso, aguarde nosso contato, obrigado.");
                window.location.href = 'https://www.jarlpsiquiatria.com.br/';

        </script> 

 </html>