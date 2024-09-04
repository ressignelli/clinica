<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atestado Médico</title>
    <link rel="stylesheet" type="text/css"  href="modelo.css" />
</head>

<body>

<div id="folha-a4" class="folha a4_vertical">
   <div id="conteudo">
           <img src="logos/lg.bmp"  alt="JARL" />

    <h1> Atestado Médico</h1>
       <?php
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $cpf = $_POST["cpf"];
            $cid = $_POST["cid"];
            $tempo = $_POST["tempo"];

            echo "Atesto que Sr(a). " .$nome. " " .$sobrenome. ", cpf nº " .$cpf. ", necessita de afastar-se " .$tempo. " de suas atividades, por motivo de doença.";
            echo "<br><br>";
            echo "CID-10: " .$cid;
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