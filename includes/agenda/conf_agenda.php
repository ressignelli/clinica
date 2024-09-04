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
    require_once('../agenda/conecta.php');
    
    $id = $_POST['id'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $tc = $_POST['tc'];
    $ret = $_POST['ret'];

if ($ret==0){
    #gravar o tipo de consulta
    $sql = "UPDATE pacientes SET tipo_consulta='$tc' WHERE cpf='$cpf'";
    if ($conn->query($sql) === TRUE) {
    }else{
    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    
    #gravar hora e data de consulta
    if($id == "70"){
    $sql = "UPDATE ag_consulta SET hora700=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='7:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 7:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    }elseif($id == "730"){
    $sql = "UPDATE ag_consulta SET hora730=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='7:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 7:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "80"){
    $sql = "UPDATE ag_consulta SET hora800=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='8:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 8:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "830"){
    $sql = "UPDATE ag_consulta SET hora830=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='8:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 8:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }    
    }elseif($id == "90"){
    $sql = "UPDATE ag_consulta SET hora900=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='9:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 9:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "930"){
    $sql = "UPDATE ag_consulta SET hora930=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='9:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 9:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    } 
    }elseif($id == "1000"){
    $sql = "UPDATE ag_consulta SET hora1000=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='10:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 10:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    } 
    }elseif($id == "1030"){
    $sql = "UPDATE ag_consulta SET hora1030=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='10:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 10:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1100"){
    $sql = "UPDATE ag_consulta SET hora1100=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='11:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 11:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }     
    }elseif($id == "1130"){
    $sql = "UPDATE ag_consulta SET hora1130=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='11:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 11:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }     
    }elseif($id == "1200"){
    $sql = "UPDATE ag_consulta SET hora1200=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='12:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 12:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }     
    }elseif($id == "1230"){
    $sql = "UPDATE ag_consulta SET hora1230=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='12:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 12:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1300"){
    $sql = "UPDATE ag_consulta SET hora1300=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='13:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 13:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1330"){
    $sql = "UPDATE ag_consulta SET hora1330=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='13:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 13:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1400"){
    $sql = "UPDATE ag_consulta SET hora1400=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='14:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 14:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1430"){
    $sql = "UPDATE ag_consulta SET hora1430=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='14:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 14:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1500"){
    $sql = "UPDATE ag_consulta SET hora1500=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='15:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 15:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1530"){
    $sql = "UPDATE ag_consulta SET hora1530=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='15:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 15:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1600"){
    $sql = "UPDATE ag_consulta SET hora1600=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='16:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 16:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1630"){
    $sql = "UPDATE ag_consulta SET hora1630=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='16:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 16:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1700"){
    $sql = "UPDATE ag_consulta SET hora1700=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='17:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 17:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1730"){
    $sql = "UPDATE ag_consulta SET hora1730=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='17:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 17:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1800"){
    $sql = "UPDATE ag_consulta SET hora1800=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='18:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 18:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1830"){
    $sql = "UPDATE ag_consulta SET hora1830=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='18:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 18:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1900"){
    $sql = "UPDATE ag_consulta SET hora1900=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='19:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 19:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1930"){
    $sql = "UPDATE ag_consulta SET hora1930=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='19:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 19:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "2000"){
    $sql = "UPDATE ag_consulta SET hora2000=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='20:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 20:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "2030"){
    $sql = "UPDATE ag_consulta SET hora2030=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_cons='$data', hora_cons='20:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 20:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "<br><hr>";
    echo "Gostaria de realizar o pagamento antecipado, clique abaixo:" . "<br><br>";
    echo "<a href='../paciente/val_pag.php?cpf=$cpf'>Pagamento aqui</a>";
        
}elseif ($ret==1){
    #gravar o tipo de retorno e liberar para consulta
    $sql = "UPDATE pacientes SET tipo_retorno='$tc', lib_retorno=0, retorno=1 WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE) {
        }else{
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    
    
    #setar data e horario de consulta de retorno
    if($id == "70"){
    $sql = "UPDATE ag_consulta SET hora700=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='7:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 7:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    }elseif($id == "730"){
    $sql = "UPDATE ag_consulta SET hora730=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='7:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 7:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "80"){
    $sql = "UPDATE ag_consulta SET hora800=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='8:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 8:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "830"){
    $sql = "UPDATE ag_consulta SET hora830=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='8:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 8:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }    
    }elseif($id == "90"){
    $sql = "UPDATE ag_consulta SET hora900=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='9:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 9:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "930"){
    $sql = "UPDATE ag_consulta SET hora930=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='9:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 9:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    } 
    }elseif($id == "1000"){
    $sql = "UPDATE ag_consulta SET hora1000=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='10:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 10:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    } 
    }elseif($id == "1030"){
    $sql = "UPDATE ag_consulta SET hora1030=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='10:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 10:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1100"){
    $sql = "UPDATE ag_consulta SET hora1100=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='11:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 11:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }     
    }elseif($id == "1130"){
    $sql = "UPDATE ag_consulta SET hora1130=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='11:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 11:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }     
    }elseif($id == "1200"){
    $sql = "UPDATE ag_consulta SET hora1200=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='12:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 12:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }     
    }elseif($id == "1230"){
    $sql = "UPDATE ag_consulta SET hora1230=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='12:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 12:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1300"){
    $sql = "UPDATE ag_consulta SET hora1300=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='13:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 13:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1330"){
    $sql = "UPDATE ag_consulta SET hora1330=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='13:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 13:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1400"){
    $sql = "UPDATE ag_consulta SET hora1400=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='14:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 14:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1430"){
    $sql = "UPDATE ag_consulta SET hora1430=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='14:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 14:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1500"){
    $sql = "UPDATE ag_consulta SET hora1500=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='15:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 15:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1530"){
    $sql = "UPDATE ag_consulta SET hora1530=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='15:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 15:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1600"){
    $sql = "UPDATE ag_consulta SET hora1600=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='16:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 16:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1630"){
    $sql = "UPDATE ag_consulta SET hora1630=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='16:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 16:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1700"){
    $sql = "UPDATE ag_consulta SET hora1700=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='17:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 17:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1730"){
    $sql = "UPDATE ag_consulta SET hora1730=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='17:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 17:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1800"){
    $sql = "UPDATE ag_consulta SET hora1800=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='18:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 18:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1830"){
    $sql = "UPDATE ag_consulta SET hora1830=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='18:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 18:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1900"){
    $sql = "UPDATE ag_consulta SET hora1900=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='19:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 19:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "1930"){
    $sql = "UPDATE ag_consulta SET hora1930=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='19:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 19:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "2000"){
    $sql = "UPDATE ag_consulta SET hora2000=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='20:00' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 20:00.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
    }elseif($id == "2030"){
    $sql = "UPDATE ag_consulta SET hora2030=0 WHERE datainicial='$data'";
    $sql2 = "UPDATE pacientes SET data_ret='$data', hora_cons='20:30' WHERE cpf='$cpf'";
        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
            echo "Agendamento realizado com sucesso para o dia " .$data. " às 20:30.";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    }
}
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "ressignelli@jarlpsiquiatria.com.br";
        $to = "ressignelli@yahoo.com.br";
        $subject = "Agendamento de consulta.";
        $message = "Você possui uma consulta agendada.";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>

</center>
</body>
</html>