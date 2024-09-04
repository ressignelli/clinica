<html>
<?php
    require_once('/includes/geral/conecta.php');

      $id = $_GET['id']; #hora
      $data_Cons = $_GET['data']; #data da consulta
      $cpf = $_GET['cpf'];
      $ret = $_GET['ret'];


                        if ($id=="7"){
                            ?><a href="agendar2.php?id=70&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 7:00</a><?php
                        }elseif($id == "70"){
                            $sql = "UPDATE ag_consulta SET hora700=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='7:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 7:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }

                        }elseif ($id=="73"){
                            ?><a href="agendar2.php?id=730&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 7:30</a><?php
                        }elseif($id == "730"){
                            $sql = "UPDATE ag_consulta SET hora730=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='7:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 7:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="8"){
                            ?><a href="agendar2.php?id=80&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 8:00</a><?php
                        }elseif($id == "80"){
                            $sql = "UPDATE ag_consulta SET hora800=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='8:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 8:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="83"){
                            ?><a href="agendar2.php?id=830&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 8:30</a><?php
                        }elseif($id == "830"){
                            $sql = "UPDATE ag_consulta SET hora830=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='8:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 8:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="9"){
                            ?><a href="agendar2.php?id=900&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 9:00</a><?php
                        }elseif($id == "900"){
                            $sql = "UPDATE ag_consulta SET hora900=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='9:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 9:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="93"){
                            ?><a href="agendar2.php?id=930&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 9:30</a><?php
                        }elseif($id == "930"){
                            $sql = "UPDATE ag_consulta SET hora930=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='9:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 9:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="10"){
                            ?><a href="agendar2.php?id=100&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 10:00</a><?php
                        }elseif($id == "100"){
                            $sql = "UPDATE ag_consulta SET hora1000=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='10:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 10:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="103"){
                            ?><a href="agendar2.php?id=1030&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 10:30</a><?php
                        }elseif($id == "1030"){
                            $sql = "UPDATE ag_consulta SET hora1030=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='10:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 10:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="11"){
                            ?><a href="agendar2.php?id=110&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 11:00</a><?php
                        }elseif($id == "110"){
                            $sql = "UPDATE ag_consulta SET hora1100=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='11:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 11:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="113"){
                            ?><a href="agendar2.php?id=1130&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 11:30</a><?php
                        }elseif($id == "1130"){
                            $sql = "UPDATE ag_consulta SET hora1130=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='11:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 11:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="12"){
                            ?><a href="agendar2.php?id=120&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 12:00</a><?php
                        }elseif($id == "120"){
                            $sql = "UPDATE ag_consulta SET hora1200=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='12:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 12:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="123"){
                            ?><a href="agendar2.php?id=1230&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 12:30</a><?php
                        }elseif($id == "1230"){
                            $sql = "UPDATE ag_consulta SET hora1230=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='12:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 12:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="13"){
                            ?><a href="agendar2.php?id=130&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 13:00</a><?php
                        }elseif($id == "130"){
                            $sql = "UPDATE ag_consulta SET hora1300=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='13:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 13:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="133"){
                            ?><a href="agendar2.php?id=1330&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 13:30</a><?php
                        }elseif($id == "1330"){
                            $sql = "UPDATE ag_consulta SET hora1330=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='13:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 13:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="14"){
                            ?><a href="agendar2.php?id=140&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 14:00</a><?php
                        }elseif($id == "140"){
                            $sql = "UPDATE ag_consulta SET hora1400=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='14:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 14:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="143"){
                            ?><a href="agendar2.php?id=1430&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 14:30</a><?php
                        }elseif($id == "1430"){
                            $sql = "UPDATE ag_consulta SET hora1430=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='14:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 14:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="15"){
                            ?><a href="agendar2.php?id=150&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 15:00</a><?php
                        }elseif($id == "150"){
                            $sql = "UPDATE ag_consulta SET hora1500=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='15:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 15:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="153"){
                            ?><a href="agendar2.php?id=1530&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 15:30</a><?php
                        }elseif($id == "1530"){
                            $sql = "UPDATE ag_consulta SET hora1530=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='15:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 15:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="16"){
                            ?><a href="agendar2.php?id=160&data=<?=$data_Cons?>&cpf=<?=$cpf?>?&ret=<?=$ret?>">Clique para confirmar o agendamento para às 16:00</a><?php
                        }elseif($id == "160"){
                            $sql = "UPDATE ag_consulta SET hora1600=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='16:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 16:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="163"){
                            ?><a href="agendar2.php?id=1630&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 16:30</a><?php
                        }elseif($id == "1630"){
                            $sql = "UPDATE ag_consulta SET hora1630=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='16:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 16:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="17"){
                            ?><a href="agendar2.php?id=170&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 17:00</a><?php
                        }elseif($id == "170"){
                            $sql = "UPDATE ag_consulta SET hora1700=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='17:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 17:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="173"){
                            ?><a href="agendar2.php?id=1730&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 17:30</a><?php
                        }elseif($id == "1730"){
                            $sql = "UPDATE ag_consulta SET hora1730=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='17:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 17:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="18"){
                            ?><a href="agendar2.php?id=180&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 18:00</a><?php
                        }elseif($id == "180"){
                            $sql = "UPDATE ag_consulta SET hora1800=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='18:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 18:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="183"){
                            ?><a href="agendar2.php?id=1830&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 18:30</a><?php
                        }elseif($id == "1830"){
                            $sql = "UPDATE ag_consulta SET hora1830=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='18:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 18:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="19"){
                            ?><a href="agendar2.php?id=190&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 19:00</a><?php
                        }elseif($id == "190"){
                            $sql = "UPDATE ag_consulta SET hora1900=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='19:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 19:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="193"){
                            ?><a href="agendar2.php?id=1930&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 19:30</a><?php
                        }elseif($id == "1930"){
                            $sql = "UPDATE ag_consulta SET hora1930=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='19:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 19:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="20"){
                            ?><a href="agendar2.php?id=200&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 20:00</a><?php
                        }elseif($id == "200"){
                            $sql = "UPDATE ag_consulta SET hora2000=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='20:00' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 20:00.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
                                }
                        }elseif ($id=="203"){
                            ?><a href="agendar2.php?id=230&data=<?=$data_Cons?>&cpf=<?=$cpf?>&ret=<?=$ret?>">Clique para confirmar o agendamento para às 20:30</a><?php
                        }elseif($id == "230"){
                            $sql = "UPDATE ag_consulta SET hora2030=0 WHERE datainicial='$data_Cons'";
                            $sql2 = "UPDATE pacientes SET data_cons='$data_Cons', hora_cons='20:30' WHERE cpf=$cpf";
                                if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE) {
                                    echo "Agendamento realizado com sucesso para o dia " .$data_Cons. " às 20:30.";
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . $sql2 ."<br>" . $conn->error;
                                }
                        }
                        if ($ret == 1){
                        $sql3 = "UPDATE pacientes SET data_cons='$data_Cons', lib_retorno=0, retorno=1 WHERE cpf=$cpf";

                                if ($conn->query($sql3) === TRUE) {
                                } else {
                                echo "<h3>OCORREU UM ERRO: </h3>: " . $sql3 . "<br>" . $conn->error;
                                }
                        }
                     ?>
</html>