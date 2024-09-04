<?php
require_once('../geral/conecta.php');
    $datainicial = $_POST['datainicial'];
    $datafinal =  $_POST['datafinal'];

    if(!empty($_POST['hora700']))
    {
        $h1 = $_POST['hora700'];
    }
    else
    {
        $h1 = '0';
    }
    if(!empty($_POST['hora730']))
    {
        $h2 = $_POST['hora730'];
    }
    else
    {
        $h2 = '0';
    }
    if(!empty($_POST['hora800']))
    {
        $h3 = $_POST['hora800'];
    }
    else
    {
        $h3 = '0';
    }
    if(!empty($_POST['hora830']))
    {
        $h4 = $_POST['hora830'];
    }
    else
    {
        $h4 = '0';
    }
    if(!empty($_POST['hora900']))
    {
        $h5 = $_POST['hora900'];
    }
    else
    {
        $h5 = '0';
    }
    if(!empty($_POST['hora930']))
    {
        $h6 = $_POST['hora930'];
    }
    else
    {
        $h6 = '0';
    }
    if(!empty($_POST['hora1000']))
    {
        $h7 = $_POST['hora1000'];
    }
    else
    {
        $h7 = '0';
    }
    if(!empty($_POST['hora1030']))
    {
        $h8 = $_POST['hora1030'];
    }
    else
    {
        $h8 = '0';
    }
    if(!empty($_POST['hora1100']))
    {
        $h9 = $_POST['hora1100'];
    }
    else
    {
        $h9 = '0';
    }
    if(!empty($_POST['hora1130']))
    {
        $h10 = $_POST['hora1130'];
    }
    else
    {
        $h10 = '0';
    }
    if(!empty($_POST['hora1200']))
    {
        $h11 = $_POST['hora1200'];
    }
    else
    {
        $h11 = '0';
    }
    if(!empty($_POST['hora1230']))
    {
        $h12 = $_POST['hora1230'];
    }
    else
    {
        $h12 = '0';
    }
    if(!empty($_POST['hora1300']))
    {
        $h13 = $_POST['hora1300'];
    }
    else
    {
        $h13 = '0';
    }
    if(!empty($_POST['hora1330']))
    {
        $h14 = $_POST['hora1330'];
    }
    else
    {
        $h14 = '0';
    }
    if(!empty($_POST['hora1400']))
    {
        $h15 = $_POST['hora1400'];
    }
    else
    {
        $h15 = '0';
    }
    if(!empty($_POST['hora1430']))
    {
        $h16 = $_POST['hora1430'];
    }
    else
    {
        $h16 = '0';
    }
    if(!empty($_POST['hora1500']))
    {
        $h17 = $_POST['hora1500'];
    }
    else
    {
        $h17 = '0';
    }
    if(!empty($_POST['hora1530']))
    {
        $h18 = $_POST['hora1530'];
    }
    else
    {
        $h18 = '0';
    }
    if(!empty($_POST['hora1600']))
    {
        $h19 = $_POST['hora1600'];
    }
    else
    {
        $h19 = '0';
    }
    if(!empty($_POST['hora1630']))
    {
        $h20 = $_POST['hora1630'];
    }
    else
    {
        $h20 = '0';
    }
    if(!empty($_POST['hora1700']))
    {
        $h21 = $_POST['hora1700'];
    }
    else
    {
        $h21 = '0';
    }
    if(!empty($_POST['hora1730']))
    {
        $h22 = $_POST['hora1730'];
    }
    else
    {
        $h22 = '0';
    }
    if(!empty($_POST['hora1800']))
    {
        $h23 = $_POST['hora1800'];
    }
    else
    {
        $h23 = '0';
    }
    if(!empty($_POST['hora1830']))
    {
        $h24 = $_POST['hora1830'];
    }
    else
    {
        $h24 = '0';
    }
    if(!empty($_POST['hora1900']))
    {
        $h25 = $_POST['hora1900'];
    }
    else
    {
        $h25 = '0';
    }
    if(!empty($_POST['hora1930']))
    {
        $h26 = $_POST['hora1930'];
    }
    else
    {
        $h26 = '0';
    }
    if(!empty($_POST['hora2000']))
    {
        $h27 = $_POST['hora2000'];
    }
    else
    {
        $h27 = '0';
    }
    if(!empty($_POST['hora2030']))
    {
        $h28 = $_POST['hora2030'];
    }
    else
    {
        $h28 = '0';
    }
    
while ($datainicial <= $datafinal){
    
    $sql = "INSERT INTO ag_consulta (datainicial, datafinal, hora700, hora730, hora800, hora830, hora900, hora930, hora1000, hora1030, hora1100, hora1130, hora1200, hora1230, hora1300, hora1330, hora1400, hora1430, hora1500, hora1530, hora1600, hora1630, hora1700, hora1730, hora1800, hora1830, hora1900, hora1930, hora2000, hora2030)
    VALUES ('$datainicial', '$datainicial', '$h1', '$h2', '$h3', '$h4', '$h5', '$h6', '$h7', '$h8', '$h9', '$h10', '$h11', '$h12', '$h13', '$h14', '$h15', '$h16', '$h17', '$h18', '$h19', '$h20', '$h21', '$h22', '$h23', '$h24', '$h25', '$h26', '$h27', '$h28')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

    $datainicial = date('Y-m-d', strtotime($datainicial . ' + 1 day'));
}

echo "<center><h3>Registro Inserido com Sucesso</h3>";
echo "<a href='confagenda.php'><input type='button' value='Voltar'></a></center>";

?>