<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receituário Médico</title>
    <link rel="stylesheet" type="text/css"  href="modelo.css" />
</head>

<body>

<div id="folha-a4" class="folha a4_vertical">
   <div id="conteudo">
           <img src="logos/novo.bmp"  alt="JARL" />

    <h1> Receituário Médico</h1>
    <h2> Dados do Paciente</h2>
       <?php

            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $endereco = $_POST["endereco"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $receita = $_POST["prescricao"];

            echo "Nome: " .$nome. " " .$sobrenome;
            echo "<br>";
            echo "Endereço: " .$endereco;
            echo "<br>";
            echo "Contatos: " .$email. " | " .$tel;
            echo "<br><hr><br>";
            echo $receita;

       ?>
       <footer>
           <hr><br>
           <img src="logos/lg_rod.jpg"  alt="JARL" />
       </footer>



   </div>
</div>



</body>
</html>