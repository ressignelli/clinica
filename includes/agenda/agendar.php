<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body><center>

<?php
    include_once('../paciente/area_paciente.php');

    $id = $_GET['id']; #hora
    $data = $_GET['data']; #data da consulta
    $cpf = $_GET['cpf'];
    $tc = $_GET['tc'];
    $ret = $_GET['ret'];

        if ($id=="7"){
?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="70">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 7:00 horas">
            </form>
            <?php
        }elseif ($id=="73"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="730">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 7:30 horas">
            </form>                            
            <?php
        }elseif ($id=="8"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="80">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 8:00 horas">
            </form>                            
            <?php
        }elseif ($id=="83"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="830">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 8:30 horas">
            </form>                            
            <?php
        }elseif ($id=="9"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="90">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 9:00 horas">
            </form>                            
            <?php
        }elseif ($id=="93"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="930">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 9:30 horas">
            </form>                            
            <?php
        }elseif ($id=="10"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1000">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 10:00 horas">
            </form>                            
            <?php
        }elseif ($id=="103"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1030">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 10:30 horas">
            </form>                            
            <?php
        }elseif ($id=="11"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1100">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 11:00 horas">
            </form>                            
            <?php
        }elseif ($id=="113"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1130">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 11:30 horas">
            </form>                            
            <?php
        }elseif ($id=="12"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1200">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 12:00 horas">
            </form>                            
            <?php
        }elseif ($id=="123"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1230">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 12:30 horas">
            </form>                            
            <?php
        }elseif ($id=="13"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1300">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 13:00 horas">
            </form>                            
            <?php
        }elseif ($id=="133"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1330">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 13:30 horas">
            </form>                            
            <?php
        }elseif ($id=="14"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1400">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 14:00 horas">
            </form>                            
            <?php
        }elseif ($id=="143"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1430">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 14:30 horas">
            </form>                            
            <?php
        }elseif ($id=="15"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1500">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 15:00 horas">
            </form>                            
            <?php
        }elseif ($id=="153"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1530">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 15:30 horas">
            </form>                            
            <?php
        }elseif ($id=="16"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1600">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 16:00 horas">
            </form>                            
            <?php
        }elseif ($id=="163"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1630">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 16:30 horas">
            </form>                            
            <?php
        }elseif ($id=="17"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1700">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 17:00 horas">
            </form>                            
            <?php
        }elseif ($id=="173"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1730">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 17:30 horas">
            </form>                            
            <?php
        }elseif ($id=="18"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1800">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 18:00 horas">
            </form>                            
            <?php
        }elseif ($id=="183"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1830">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 18:30 horas">
            </form>                            
            <?php
        }elseif ($id=="19"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1900">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 19:00 horas">
            </form>                            
            <?php
        }elseif ($id=="193"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="1930">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 19:30 horas">
            </form>                            
            <?php
        }elseif ($id=="20"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="2000">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 20:00 horas">
            </form>                            
            <?php
        }elseif ($id=="23"){
            ?>
            <form method="POST" action="../agenda/conf_agenda.php">
                <input type="hidden" name="ret" value="<?php echo $ret; ?>">
                <input type="hidden" name="id" value="2030">
                <input type="hidden" name="data" value="<?php echo $data; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="tc" value="<?php echo $tc; ?>">
                <input type="submit" value="Clique para confirmar o agendamento para às 20:30 horas">
            </form>                            
            <?php
        }
            ?>
</center>
</body>
</html>
