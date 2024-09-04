<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="/css/style.css" rel="stylesheet">

  <title>Calendario</title>
</head>

<h1> ÁREA EM CONSTRUÇÂO</h1>

<?php

require_once('../geral/conecta.php');

    $agenda_bd = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial >= CURDATE() ORDER BY datainicial");
    $agenda_bd2 = mysqli_query($conn, "SELECT * FROM ag_consulta WHERE datainicial >= CURDATE() ORDER BY datainicial");

    $data = mysqli_fetch_array($agenda_bd);
    $data[1]="2024-11-20";
    $horarios= array();
    $cont = 0;
    while($data1 = mysqli_fetch_array($agenda_bd2)) {
        for ($i=3; $i<=30; $i++){
           if ($data1[$i]==1){
               $horarios[$cont] = $data1[1];
                $cont +=1;
           }
        }
    }


    $dia = date('d', strtotime($data[1]));
    $mes = date('m', strtotime($data[1]));
    $ano = date('Y', strtotime($data[1]));
    
    $dia_sem = date('w', strtotime($data[1]));

    $funcao = new DateTime($data[1]);
    $numDias = $funcao->format('t');
    
    $d = date('Y-m-d', strtotime($data[1]. ' + 1 month'));
    $funcao = new DateTime($d);
    $num_dias_seg_mes = $funcao->format('t');
    $dia_sem_terc_m2  = date('w', strtotime($ano.'-'.($mes+1)));
    
    $d = date('Y-m-d', strtotime($data[1]. ' + 1 month'));
    $funcao = new DateTime($d);    
    $num_dias_terc_mes = $funcao->format('t');
    $dia_sem_terc_m3  = date('w', strtotime($ano.'-'.($mes+2)));
    
    #chamar include para preencher 3 meses contínuos da primeira data

    for ($cont=1; $cont<=3; $cont++){
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
        include('../calendario/calendario.php');
        $mes = $mes + 1;
        
        if ($mes == 13){
            $mes = 1;
            $ano = $ano+1;
            $d=$ano. "-1-1";
            $dia=1;
            $funcao = new DateTime($ano.$mes);
            $num_Dias = $funcao->format('t');
            $dia_sem  = date('w', strtotime($ano."-".$mes));
        }else{
            if ($cont==2){
                $d=1;
                $numDias= $num_dias_seg_mes;
                $dia = 1;
                $dia_sem = $dia_sem_terc_m2;

            }elseif ($cont == 3){
                $d =1;
                $dia=1;
                $numDias= $num_dias_terc_mes;
                $dia_sem = $dia_sem_terc_m3;
            }
        }
    }

  
?>
</html>