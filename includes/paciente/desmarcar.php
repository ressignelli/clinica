<?php

require_once('../geral/conecta.php');
include_once('../paciente/area_paciente.php');

           $data = $_GET['data'];
           $hora = $_GET['hora'];
           $cpf = $_GET['cpf'];
           $ret = $_GET['ret'];


                            if ($hora=="7:00"){
                                $sql = "UPDATE ag_consulta SET hora700=1 WHERE datainicial='$data'";
                            }elseif ($hora=="7:30"){
                                $sql = "UPDATE ag_consulta SET hora730=1 WHERE datainicial='$data'";
                            }elseif ($hora=="8:00"){
                                $sql = "UPDATE ag_consulta SET hora800=1 WHERE datainicial='$data'";
                            }elseif ($hora=="8:30"){
                                $sql = "UPDATE ag_consulta SET hora830=1 WHERE datainicial='$data'";
                            }elseif ($hora=="9:00"){
                                $sql = "UPDATE ag_consulta SET hora900=1 WHERE datainicial='$data'";
                            }elseif ($hora=="9:30"){
                                $sql = "UPDATE ag_consulta SET hora930=1 WHERE datainicial='$data'";
                            }elseif ($hora=="10:00"){
                                $sql = "UPDATE ag_consulta SET hora1000=1 WHERE datainicial='$data'";
                            }elseif ($hora=="10:30"){
                                $sql = "UPDATE ag_consulta SET hora1030=1 WHERE datainicial='$data'";
                            }elseif ($hora=="11:00"){
                                $sql = "UPDATE ag_consulta SET hora1100=1 WHERE datainicial='$data'";
                            }elseif ($hora=="11:30"){
                                $sql = "UPDATE ag_consulta SET hora1130=1 WHERE datainicial='$data'";
                            }elseif ($hora=="12:00"){
                                $sql = "UPDATE ag_consulta SET hora1200=1 WHERE datainicial='$data'";
                            }elseif ($hora=="12:30"){
                                $sql = "UPDATE ag_consulta SET hora1230=1 WHERE datainicial='$data'";
                            }elseif ($hora=="13:00"){
                                $sql = "UPDATE ag_consulta SET hora1300=1 WHERE datainicial='$data'";
                            }elseif ($hora=="13:30"){
                                $sql = "UPDATE ag_consulta SET hora1330=1 WHERE datainicial='$data'";
                            }elseif ($hora=="14:00"){
                                $sql = "UPDATE ag_consulta SET hora1400=1 WHERE datainicial='$data'";
                            }elseif ($hora=="14:30"){
                                $sql = "UPDATE ag_consulta SET hora1430=1 WHERE datainicial='$data'";
                            }elseif ($hora=="15:00"){
                                $sql = "UPDATE ag_consulta SET hora1500=1 WHERE datainicial='$data'";
                            }elseif ($hora=="15:30"){
                                $sql = "UPDATE ag_consulta SET hora1530=1 WHERE datainicial='$data'";
                            }elseif ($hora=="16:00"){
                                $sql = "UPDATE ag_consulta SET hora1600=1 WHERE datainicial='$data'";
                            }elseif ($hora=="16:30"){
                                $sql = "UPDATE ag_consulta SET hora1630=1 WHERE datainicial='$data'";
                            }elseif ($hora=="17:00"){
                                $sql = "UPDATE ag_consulta SET hora1700=1 WHERE datainicial='$data'";
                            }elseif ($hora=="17:30"){
                                $sql = "UPDATE ag_consulta SET hora1730=1 WHERE datainicial='$data'";
                            }elseif ($hora=="18:00"){
                                $sql = "UPDATE ag_consulta SET hora1800=1 WHERE datainicial='$data'";
                            }elseif ($hora=="18:30"){
                                $sql = "UPDATE ag_consulta SET hora1830=1 WHERE datainicial='$data'";
                            }elseif ($hora=="19:00"){
                                $sql = "UPDATE ag_consulta SET hora1900=1 WHERE datainicial='$data'";
                            }elseif ($hora=="19:30"){
                                $sql = "UPDATE ag_consulta SET hora1930=1 WHERE datainicial='$data'";
                            }elseif ($hora=="20:00"){
                                $sql = "UPDATE ag_consulta SET hora2000=1 WHERE datainicial='$data'";
                            }elseif ($hora=="20:30"){
                                $sql = "UPDATE ag_consulta SET hora2030=1 WHERE datainicial='$data'";
                            }

                            if ($ret==1){
                                $sql2 = "UPDATE pacientes SET data_ret=NULL, retorno=0, lib_retorno=1 WHERE cpf='$cpf'";
                                if (($conn->query($sql) === TRUE) and ($conn->query($sql2) === TRUE)) {
                                    echo "<br>";
                                    echo "<center>";
                                    echo "Retorno desmarcado com sucesso na data " .$data . " as " .$hora. " horas!";
                                    echo "</center>";
                                } else {
                                    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . $sql2. "<br>" . $conn->error;
                                }
                            }elseif ($ret==0){
                                $sql2 = "UPDATE pacientes SET data_cons=NULL, hora_cons=NULL WHERE cpf='$cpf'";
                                if (($conn->query($sql) === TRUE) and ($conn->query($sql2) === TRUE)) {
                                    echo "<br>";
                                    echo "<center>";
                                    echo "Consulta desmarcada com sucesso na data " .$data . " as " .$hora. " horas!";
                                    echo "</center>";
                                } else {
                                    echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . $sql2. "<br>" . $conn->error;
                                }
                            }



?>
