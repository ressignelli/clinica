<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="/css/style.css" rel="stylesheet">
    <script src="/js/jquery-3.7.1.min.js" type="text/javascript"></script>
  <script src="/js/calendario.js" type="text/javascript"></script>
  <title>Calendario</title>
</head>

<?php

require_once('../geral/conecta.php');

    $agenda_bd = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial >= CURDATE() ORDER BY datainicial");
    $agenda_bd2 = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial >= CURDATE() ORDER BY datainicial");

    $data = mysqli_fetch_array($agenda_bd);
    $horarios= array();
    $cont_hor = 0;
    while($data1 = mysqli_fetch_array($agenda_bd2)) {
        for ($i=3; $i<=30; $i++){
           if ($data1[$i]==1){
               $horarios[$cont_hor] = $data1[1];
               $cont_hor +=1;
               break;
           }
        }
    }

    $data_inicial = $data[1];
    for ($cont=1; $cont<=3; $cont++){
        if ($cont==1){
            $data = $data_inicial;
            $dia = date('d', strtotime($data));
            $mes = date('m', strtotime($data));
            $ano = date('Y', strtotime($data));
            $funcao = new DateTime($data);
            $numDias_mes = $funcao->format('t');
            $dia_sem = date('w', strtotime($data));
        }else{
            $data = date('Y-m-d', strtotime($data. ' + 1 month'));
            $dia = date('d', 01);
            $mes = date('m', strtotime($data));
            $ano = date('Y', strtotime($data));
            $funcao = new DateTime($data);
            $numDias_mes = $funcao->format('t');
            $dia_sem = date('w', strtotime($ano."-".$mes."-01"));
        }

        if ($mes==1){
            $nome_mes= "Janeiro-" . $ano;
        }elseif ($mes==2){
            $nome_mes= "Fevereiro-". $ano;
        }elseif ($mes==3){
            $nome_mes= "Março-". $ano;
        }elseif ($mes==4){
            $nome_mes= "Abril-". $ano;
        }elseif ($mes==5){
            $nome_mes= "Maio-". $ano;
        }elseif ($mes==6){
            $nome_mes= "Junho-". $ano;
        }elseif ($mes==7){
            $nome_mes= "Julho-". $ano;
        }elseif ($mes==8){
            $nome_mes= "Agosto-". $ano;
        }elseif ($mes==9){
            $nome_mes= "Setembro-". $ano;
        }elseif ($mes==10){
            $nome_mes= "Outubro-". $ano;
        }elseif ($mes==11){
            $nome_mes= "Novembro-". $ano;
        }elseif ($mes==12){
            $nome_mes= "Dezembro-". $ano;
        }        
        
        if ($dia <= 7){
            $semana = 0;
        }elseif ($dia <= 14){
            $semana = 1;
        }elseif ($dia <= 21){
            $semana = 2;
        }elseif ($dia <= 28){
            $semana = 3;
        }elseif ($dia <= 31){
            $semana = 4;
        }

        include_once('../agenda/agendar_consulta.php');    
        include('../calendario/calendario.php');

    }
    if (isset($_GET['data'])){
        $data_horarios = $_GET['data'];
        $cpf = $_COOKIE['cpf'];
        $tc = $_COOKIE['tc'];
        $hor = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial='$data_horarios'");
        $data2 = mysqli_fetch_array($hor);
            for ($i=3; $i<=30; $i++){
                if ($data2[$i]==1){
                                        if ($i == 3) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=7&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">7:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 4) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=73&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">7:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 5) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=8&ret=0&data='.$data_horarios.'&cpf=<?='.$cpf.'&tc='.$tc.'">8:00</a>&nbsp;</td>';

                                        } elseif ($i == 6) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=83&ret=0&data='.$data_horarios.'&cpf=<?='.$cpf.'&tc='.$tc.'">8:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 7) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=9&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">9:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 8) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=93&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">9:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 9) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=10&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">10:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 10) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=103&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">10:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 11) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=11&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">11:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 12) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=113&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">11:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 13) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=12&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">12:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 14) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=123&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">12:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 15) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=13&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">13:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 16) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=133&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">13:30</a>&nbsp;</td>';
                                           
                                        } elseif ($i == 17) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=14&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">14:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 18) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=143&ret=0&data='.$data_horarios.'&cpf='.$cpf.'>&tc='.$tc.'">14:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 19) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=15&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">15:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 20) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=153&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">15:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 21) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=16&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">16:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 22) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=163&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">16:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 23) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=17&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">17:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 24) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=173&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">17:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 25) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=18&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">18:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 26) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=183&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">18:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 27) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=19&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">19:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 28) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=193&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">19:30</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 29) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=20&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">20:00</a>&nbsp;</td>';
                                            
                                        } elseif ($i == 30) {
                                            $link = $link. '<td>&nbsp;<a href="../agenda/agendar.php?id=203&ret=0&data='.$data_horarios.'&cpf='.$cpf.'&tc='.$tc.'">20:30</a>&nbsp;</td>';
                                            
                                        }
                }
            }
        
        ?>
        <div id="newEventModal">
            <h2>Selecione o horário desejado:</h2>
            <?php
            echo $link;
            ?>
            <div id="msgret"></div><br>
        	<button id="cancelButton">Cancelar</button>
        </div>
        <script>
        const newEvent = document.getElementById('newEventModal');
        
        newEvent.style.display = 'block';
        
        document.getElementById('cancelButton').addEventListener('click',()=>closeModal());
        
        function closeModal(){
            history.go(-2);
            newEvent.style.display = 'none';
        }
        
        </script>

        <?php
    }
?>


</html>