<?php

$email = $_POST['email'];
$cpf = $_POST['cpf'];

    require_once('../geral/conecta.php');

    $consulta_pac = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf = '$cpf' or email = '$email'");
    $exibe = mysqli_fetch_array($consulta_pac);

    if($exibe==NULL){
        echo "Dados Incorretos!";
        exit();
    }else{

        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$%*+=#@!';
        $senha = '';
        for ($i = 0; $i < 8; $i++) {
            $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }

        $sql = "UPDATE pacientes SET senha='$senha' WHERE cpf='$cpf'";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql4 . "<br>" . $conn->error;
        }
        
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "ressignelli@jarlpsiquiatria.com.br";
        $to = $exibe[12];
        $subject = "Recuperação de senha";
        $message = "Senha para o acesso é:" . $senha ."  | Não esqueça de alterá-la ao acessar o sistema!";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "O email de recuperação foi enviado com sucesso! Sempre verifique a caixa de SPAM";       
    }
?>