<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="/css/style.css" rel="stylesheet">
</head>

<?php

    $calendario = array (
    array('&nbsp',' ',' ',' ',' ',' ',' '), #semana1
    array('&nbsp',' ',' ',' ',' ',' ',' '),
    array('&nbsp',' ',' ',' ',' ',' ',' '),
    array('&nbsp',' ',' ',' ',' ',' ',' '),
    array('&nbsp',' ',' ',' ',' ',' ',' '), #semana5
    );

    $d = $dia;

    while ($d <= $numDias_mes){
        for ($s = $semana; $s <= 4; $s++){
            for ($ds = $dia_sem; $ds <= 6; $ds++){
                $calendario[$s][$ds] = $d;
                for ($c=0; $c<=$cont_hor; $c++){
                    if ($horarios[$c] == $ano."-".$mes."-".$d){
                        $calendario[$s][$ds] = $d."<div class='dias'><br><a href='../calendario/calend_princ.php?data=$horarios[$c]'><img src='../calendario/img/rel.jpg' alt='Hora' width='100%'/></a></div>";
                        break;
                    }
                }
                $d++;
                $d = str_pad($d, 2, '0', STR_PAD_LEFT);
                if ($d == $numDias_mes+1){
                    break 3;
                }
            }
            $dia_sem = 0;
        }
    }

?>
<body>

  <div class="container">
      <div id="header">
        <div id="nome_mes"><?=$nome_mes?></div>
      </div>
    
    <table id="calendar">
    <tr>
        <td>Dom</td>
        <td>Seg</td>
        <td>Ter</td>
        <td>Qua</td>
        <td>Qui</td>
        <td>Sex</td>
        <td>Sáb</td>
    </tr>
    
    <tr><!-- onclick="evento(<=$calendario[0][0]?> )" -->
    
        <td><?=$calendario[0][0]?></td>
        <td><?=$calendario[0][1]?></td>
        <td><?=$calendario[0][2]?></td>
        <td><?=$calendario[0][3]?></td>
        <td><?=$calendario[0][4]?></td>
        <td><?=$calendario[0][5]?></td>
        <td><?=$calendario[0][6]?></td>
    </tr>

    <tr>
        <td><?=$calendario[1][0]?></td>
        <td><?=$calendario[1][1]?></td>
        <td><?=$calendario[1][2]?></td>
        <td><?=$calendario[1][3]?></td>
        <td><?=$calendario[1][4]?></td>
        <td><?=$calendario[1][5]?></td>
        <td><?=$calendario[1][6]?></td>
    </tr>

    <tr>
        <td><?=$calendario[2][0]?></td>
        <td><?=$calendario[2][1]?></td>
        <td><?=$calendario[2][2]?></td>
        <td><?=$calendario[2][3]?></td>
        <td><?=$calendario[2][4]?></td>
        <td><?=$calendario[2][5]?></td>
        <td><?=$calendario[2][6]?></td>
    </tr>

    <tr>
        <td><?=$calendario[3][0]?></td>
        <td><?=$calendario[3][1]?></td>
        <td><?=$calendario[3][2]?></td>
        <td><?=$calendario[3][3]?></td>
        <td><?=$calendario[3][4]?></td>
        <td><?=$calendario[3][5]?></td>
        <td><?=$calendario[3][6]?></td>
    </tr>

    <tr>
        <td><?=$calendario[4][0]?></td>
        <td><?=$calendario[4][1]?></td>
        <td><?=$calendario[4][2]?></td>
        <td><?=$calendario[4][3]?></td>
        <td><?=$calendario[4][4]?></td>
        <td><?=$calendario[4][5]?></td>
        <td><?=$calendario[4][6]?></td>
    </tr>

    </table>
</div>

<br><br>
</body>

</html>