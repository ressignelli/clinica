<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório Médico</title>
    <link rel="stylesheet" type="text/css"  href="modelo.css" />
</head>

<body>

<div id="folha-a4" class="folha a4_vertical">
   <div id="conteudo">
           <img src="logos/lg.bmp"  alt="JARL" />

    <h1> Relatório Médico</h1>
    <h2> Dados do Paciente</h2>
       <?php

            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $endereco = $_POST["endereco"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $relatorio = $_POST["relatorio"];

            echo "Nome: " .$nome. " " .$sobrenome;
            echo "<br>";
            echo "Endereço: " .$endereco;
            echo "<br>";
            echo "Contatos: " .$email. " | " .$tel;
            echo "<br><hr><br>";
            echo $relatorio;
            echo "<br><br>";
            echo date('d-m-Y'). ", São José do Rio Preto-SP.";
            echo "<br><br><br><br><br><br>";
            echo "Dr. José Augusto Ressignelli de Lima";
            echo "<br>";
            echo "Psiquiatria";
            echo "<br>";
            echo "Clínica Médica";
            echo "<br>";
            echo "CRM 151.901";
       ?>
       <footer>
           <hr><br>
           <img src="logos/lg_rod.jpg"  alt="JARL" />
       </footer>



   </div>
</div>



</body>
</html>