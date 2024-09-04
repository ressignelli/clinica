<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Prontuário Médico - Área de consulta</title>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
    <script type="text/javascript" src="/js/nicEdit-latest.js"></script>
</head>

<?php

$arquivo = $_GET['arquivo'];

$handle = fopen($arquivo, "r");

$header = fgetcsv($handle, 1000, ",");

while ($row = fgetcsv($handle, 1000, ",")) {
    $nota[] = array_combine($header, $row);
}
print_r($nota);

fclose($handle);

?>

</html>