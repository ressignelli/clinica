<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Área da Secretaria</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

    <div class="cabecou">
        <img src="/lib/logos/novo.bmp"  alt="JARL" />
    </div>
    <div>
        <h2>Área Secretaria</h2>
    </div>
    <nav>
    <ul class="menu">
        <li><a href="../secretaria/exloginsec.php?esc=1">Cadastrar Paciente</a></li>
        <li><a href="../secretaria/exloginsec.php?esc=4">Pesquisar/Alterar Pacientes</a></li>
        <li><a href="../secretaria/exloginsec.php?esc=2">Agenda de Consultas</a></li>
        <li><a href="../secretaria/exloginsec.php?esc=3">Agendar Consultas</a></li>
        <li><a href="../secretaria/exloginsec.php?esc=5">Alterar Senha</a></li>
        <li><a href="https://sjrp.ginfes.com.br/" target="_black">Emitir NF-e</a></li>
        <li><a href="../secretaria/exloginsec.php?esc=6">Financeiro</a></li>
    </ul>
    </nav>
    <?php
        if(!empty($_GET['esc'])){
            $var = $_GET['esc'];
            if ($var ==1){
                include('../paciente/cad_paciente.php');
            }elseif ($var==2){
                include('../secretaria/agenda_sec.php');
            }elseif ($var==3){
                include('../secretaria/ag_cons_sec.php');
            }elseif ($var==4){
                include('../secretaria/pesquisa_paciente.php');
            }elseif ($var==5){
                include('../secretaria/altera_cad_secretaria.php');
            }elseif ($var==6){
                include('../financeiro/financeiro.php');
            }

        }
        ?>


    </body>
</html>