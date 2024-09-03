<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="author" content="JARL" />
    <meta name="copyright" content="© 2024 JARL" />
    <meta name="description" content="Consultorio psiquiatrico" />
    <meta name="keywords" content="psiquiatra, doenca mental, psiquiatria, consulta com psiquiatra, ressignelli, rio preto">
    <meta name="revisit-after" content="15 days" />
    <title>Clínica Psiquiátrica JARL</title>
    <link rel="stylesheet" type="text/css"  href="css/clinica_estilo1.css" />
    <link rel="icon" href="lib/icones/mente.png" type="image/png">
    <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
</head>

<body>
    <main>
    <div id="principal" class="principal">
        <div class="cabecou">
           <img src="lib/logos/novo.png"  alt="JARL" />
        </div>
        <div class="wapp">
            <th><a href="https://wa.me/5517991022270" target='_blank'>
                <img src="lib/logos/wapp.jfif" alt="whatsapp" style="position: absolute; top: 10; right: 10px;" />
            </a></th>
        </div>

        <div id="menu">
            <nav>
                <ul class="menu">
                <li><a href="index.php?esc=1">Agendamento de Consultas</a></li>
                <li><a href="index.php?esc=1">Acesso aos Pacientes</a></li>
                <li><a href="index.php?esc=2">Acesso ao Médico</a></li>
                <li><a href="index.php?esc=3">Acesso Secretária</a></li>
                <li><a href="index.php?esc=4">Contato</a></li>
                <li><a href="index.php?esc=6">Sobre</a></li>
                <li><a href="index.php?esc=5">Como chegar</a></li>
                </ul>
            </nav>
         </div>
<?php
    if(!empty($_GET['esc'])){
        $var = $_GET['esc'];
        if ($var ==1){
            include('includes/paciente/loginpaciente.php');
        }elseif ($var==2){
            include('includes/medico/loginmedico.php');
        }elseif ($var==3){
            include('includes/secretaria/loginsecretaria.php');
        }elseif ($var==4){
            include('includes/geral/contato.php');
        }elseif ($var==5){
            include('includes/geral/chegar.php');
        }elseif ($var==6){
            include('includes/geral/sobre.php');
        }
    }else{
            echo '<div class="principal">';
            echo '<img src="lib/logos/princ1.png"  alt="Principal" /></div>';
    }

?>
    </div></main></body>
    <?php
        include('includes/geral/blog.php');
    ?>

</html>
