<?php
require_once('../geral/conecta.php');

    $cpf = $_POST['cpf'];

    $dataatual =  $_POST['dataatual'];
    $datapagamento = $_POST['datapagamento'];
    $dataconsulta = $_POST['dataconsulta'];
    $valor = $_POST['valor'];
    $forma_pag = $_POST['forma_pag'];

    $sql = "INSERT INTO financeiro (data_gravacao, cpf, valor_recebido, data_recebimento, Forma_pagamento, data_cons) VALUES ('$dataatual', '$cpf', '$valor', '$datapagamento', '$forma_pag', '$dataconsulta')";
    $sql2 = "UPDATE pacientes SET pagamento=1 WHERE cpf='$cpf'";

    if (($conn->query($sql) === TRUE) and ($conn->query($sql2) === TRUE)) {
        echo "<center><h3>Registro Inserido com Sucesso</h3>";
        echo "<a href='../secretaria/exloginsec.php'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>