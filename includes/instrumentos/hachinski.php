<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>ASRS-18</title>
    <link href="/css/ferramentas.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>

<body>
    <div class="titulo">
        <h3>Escore Isquêmico de Hachinski</h3>
    </div>

<hr>

	 <!-- Início do formulário -->
        <form id="form" method="GET" action="hachinski.php">
                <div>
                    <label><input type="checkbox" name="a" value="2" id="a">Início abrupto</label><br>
                    <label><input type="checkbox" name="b" value="1" id="b">Deterioração não linear (em degraus)</label><br>
                    <label><input type="checkbox" name="c" value="2" id="c">Curso oscilante</label><br>
                    <label><input type="checkbox" name="d" value="1" id="d">Confusão noturna</label><br>
                    <label><input type="checkbox" name="e" value="1" id="e">Conservação relativa da personalidade</label><br>
                    <label><input type="checkbox" name="f" value="1" id="f">Depressão</label><br>
                    <label><input type="checkbox" name="g" value="1" id="g">Queixas somáticas</label><br>
                    <label><input type="checkbox" name="h" value="1" id="h">Incontinência emocional</label><br>
                    <label><input type="checkbox" name="i" value="1" id="i">História de hipertensão arterial</label><br>
                    <label><input type="checkbox" name="j" value="2" id="j">História de AVC</label><br>
                    <label><input type="checkbox" name="k" value="2" id="k">Evidência de aterosclerose associada</label><br>
                    <label><input type="checkbox" name="l" value="2" id="l">Sinais neurológicos focais</label><br>
                </div>
                
                <div>
                    <input type="hidden" name="ver" id="ver" value="1">
                </div>
                <div class="finalizar"><center>
        	        <button type="submit">Verificar Resultado</button>
        	    </center>
        	    </div>
        </form>
        	    <div id="newEventModal">
                    <h2>Resultado</h2>

<?php

if (!isset($_GET['ver'])){
    exit();
}
if (isset($_GET['ver'])==0){
    exit();
}

$soma=0;

if (isset($_GET['a'])){
    $soma = $soma + 2;
}
if (isset($_GET['b'])){
    $soma = $soma + 1;
}
if (isset($_GET['c'])){
    $soma = $soma + 2;
}
if (isset($_GET['d'])){
    $soma = $soma + 1;
}
if (isset($_GET['e'])){
    $soma = $soma + 1;
}
if (isset($_GET['f'])){
    $soma = $soma + 1;
}
if (isset($_GET['g'])){
    $soma = $soma + 1;
}
if (isset($_GET['h'])){
    $soma = $soma + 1;
}
if (isset($_GET['i'])){
    $soma = $soma + 1;
}
if (isset($_GET['j'])){
    $soma = $soma + 2;
}
if (isset($_GET['k'])){
    $soma = $soma + 2;
}
if (isset($_GET['l'])){
    $soma = $soma + 2;
}

if ($soma >= 7){
    echo "Provável Demência Vascular" . "<br>";

}elseif ($soma==6 or $soma==5){
    echo "Zona de incerteza de Demência Vascular" . "<br>";

}elseif ($soma <=4){
    echo "Baixa probailidade de Demência Vascular" . "<br>";

}
?>
        <br><hr>
        <button id="cancelButton">Fechar</button>
        </div>

        </body>
<script>
    const newEvent = document.getElementById('newEventModal')
    newEvent.style.display = 'block'
    document.getElementById('cancelButton').addEventListener('click',()=>closeModal())
    document.getElementById('ver').value = "0";
    function closeModal(){
        newEvent.style.display = 'none'
    }
</script>

</html>
 
