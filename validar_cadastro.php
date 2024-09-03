   # implantar

    //E-mail remetente (deve ser igual ao que esta enviando)
    $mail->From = 'ressignelli@yahoo.com.br';

    //Nome do remetente
    $mail->FromName ='Clínica Dr. José Augusto';

    //Assunto da mensagem
    $mail->Subject = 'Validação de Cadastro';

    //Corpo da mensagem
    $mail->Body = "Ola, Clique <a href='http://dominio.com/validaCadastro.php?mail=".$e_mail."'>aqui</a> para ativar seu cadastro.";

    //Corpo da mensagem em texto
    $mail->AltBody = 'Validação de Cadastro na Clínica de Psquiatria Dr. José Augusto Ressignlli de Lima';


    //Destinatario
    $mail->AddAddress ('ressignelli@yahoo.com.br');

    if ($mail->Send()) {
        echo "e-mail enviado com sucesso";
       echo'<script> alert("Cadastro realizado com sucesso!")</script>';
    }else{
        echo "Erro no envio do e-mail" .$mail->ErrorInfo;
    }
}
?>
<?php
$corpo = '
Olá! Bem-vindo ao site!
<br /><br />
Clique no link a seguir para confirmar seu cadastro:
<br />
<a href="http://nome_do_site.com.br/validar.php?email='.$email_usuario.'&codigo='.$codigo.'" target="_blank">http://nome_do_site.com.br/validar.php?email='.$email_usuario.'&codigo='.$codigo.'</a>
';

$mail->Body = $corpo;
?>


validar cadastro.php
if ($_GET["mail"] != "") {

 $mysqli = new mysqli("localhost", "USUARIO", "SENHA", "NOME_DB");

 //recupera valor do cookie
 $cpf = $_COOKIE['cpf'];
 $getMail= $_GET["mail"];

 $result = $mysqli->query("SELECT COUNT(*) FROM tabela WHERE email = '$getMail'");

        $row = $result->fetch_row();

        if ($row[0] > 0) {
             $alerta =("E-mail (".$getMail.") já existente.");
        } else {
            $mysqli->query("Insert into tabela (cad_validado) values '1'");
        }

}