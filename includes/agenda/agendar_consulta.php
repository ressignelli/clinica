<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body><center>

    <h2>Agendamento de Consulta</h2>
    
        <?php

            if (!isset($_GET['tc'])){

            $valor = mysqli_query($conn, "SELECT valor FROM valor_tipo_cons WHERE nome_tipo='presencial'");
            $valorpres = mysqli_fetch_array($valor);
            $valor = mysqli_query($conn, "SELECT valor FROM valor_tipo_cons WHERE nome_tipo='virtual'");
            $valorvir = mysqli_fetch_array($valor);
            $valor = mysqli_query($conn, "SELECT valor FROM valor_tipo_cons WHERE nome_tipo='domiciliar'");
            $valordom = mysqli_fetch_array($valor);

            ?>
               <form id="tipoconsulta" method="GET">
                   <div class="campo"><hr>
                       <label><strong>Escolha o Tipo de Consulta:</strong></label><br>
            	       <br><label><input type="radio" name="tc" value="presencial" checked>Presencial no consultório <?=$valorpres[0]?></label>
            	       <br><label><input type="radio" name="tc" value="virtual">Virtual por Telemedicina <?=$valorvir[0]?></label>
                       <br><label><input type="radio" name="tc" value="domiciliar">Visita Domiciliar(somente em SJ Rio Preto-SP no endereço cadastrado) <?=$valordom[0]?></label>
                       <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
        	       </div><br>
                   <input type="submit" value="Prosseguir">
               </form>
            <?php 
                
            }

            if (!isset($_GET['datacons']) && isset($_GET['tc'])){
                $tc = $_GET['tc'];
                $cpf = $_GET['cpf'];
                setcookie('tc', $tc, time() + (8640), "/");
                setcookie('cpf', $cpf, time() + (8640), "/");
                ?>
                <div>
                <label>Tipo de Consulta:<input type="text" name="tc" id="tc" value="<?= $tc ?>" readonly></label>
                <br><hr>
                <label>Escolha a data:</label>
                <br><br>
                </div>
                <?php 
                include('../calendario/calend_princ.php');
            } 
            ?>

</center>
</body>
</html>