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
        <h3>Frontal Assessment Battery - D. Fronto-temporal</h3>
    </div>

<hr>

	 <!-- Início do formulário -->
        <form id="form" method="GET" action="dem_front_temp.php">
                <label><strong>Idade:</strong></label><br>
                    <label><input type="radio" name="f" value="1" id="f1">20-29 anos</label><br>
                    <label><input type="radio" name="f" value="2" id="f2">30-39 anos</label><br>
                    <label><input type="radio" name="f" value="3" id="f3">40-49 anos</label><br>
                    <label><input type="radio" name="f" value="4" id="f4">50-59 anos</label><br>
                    <label><input type="radio" name="f" value="5" id="f4">60-69 anos</label><br>
                    <label><input type="radio" name="f" value="6" id="f4">70-79 anos</label><br>
                    <label><input type="radio" name="f" value="7" id="f4">80-89 anos</label><br>
                    <label><input type="radio" name="f" value="8" id="f4">90-95 anos</label><br>
                </div>
                <label><strong>Anos de Estudo:</strong></label><br>
                    <label><input type="radio" name="g" value="1" id="g1">1-3 anos</label><br>
                    <label><input type="radio" name="g" value="2" id="g2">4-5 anos</label><br>
                    <label><input type="radio" name="g" value="3" id="g3">6-8 anos</label><br>
                    <label><input type="radio" name="g" value="4" id="g4">9-13 anos</label><br>
                    <label><input type="radio" name="g" value="5" id="g4">> 13 anos</label><br>
                </div>            
            
                <div>
                    <label><strong>1-Similaridade - Conceitualização:</strong></label><br>
                    <label><input type="checkbox" name="ca" value="1" id="ca">Banana-laranja - 1pt</label><br>
                    <label><input type="checkbox" name="cb" value="1" id="cb">Mesa-cadeira - 1pt</label><br>
                    <label><input type="checkbox" name="cc" value="1" id="cc">Tulipa-rosa-margarida -1pt</label><br>
                </div>
                <div>
                    <label><strong>2-Fluência Lexical - Flexibilidade Mental (animais ou frutas):</strong></label><br>
                    <label><input type="radio" name="a" value="3" id="a1"> 9 palavras - 3pts</label><br>
                    <label><input type="radio" name="a" value="2" id="a2">6-9 palavras - 2pts</label><br>
                    <label><input type="radio" name="a" value="1" id="a3">3-5 palavras - 1 pt</label><br>
                    <label><input type="radio" name="a" value="0" id="a4"> 3 palavras - 0 pts</label><br>
                </div>
                <div>
                <label><strong>3-Sequencias Motoras - Programação (Luria - palma-punho-lado):</strong></label><br>
                    <label><input type="radio" name="b" value="3" id="b1">6 séries consecutivas sozinho</label><br>
                    <label><input type="radio" name="b" value="2" id="b2">3 séries consecutivas sozinho</label><br>
                    <label><input type="radio" name="b" value="1" id="b3">3 séries consecutivas em imitação</label><br>
                    <label><input type="radio" name="b" value="0" id="b4">Não executa nem 3 séries em imitação</label><br>
                </div>
                <div>
                <label><strong>4-Instruções Conflitantes - Sensibilidade à interferência
Bata 1 vez quando eu bater 2 e 2 vezes quando eu bater 1
1-1-2-1-2-2-2-1-1-2:</strong></label><br>
                    <label><input type="radio" name="c" value="3" id="c1">Nenhum erro</label><br>
                    <label><input type="radio" name="c" value="2" id="c2">1-2 erros</label><br>
                    <label><input type="radio" name="c" value="1" id="c3">Mais de 2 erros</label><br>
                    <label><input type="radio" name="c" value="0" id="c4">Ecopraxia 4 vezes</label><br>
                </div>
                <label><strong>5-Vai não vai - Controle Inibitório
Bata quando eu bater 1 vez e não bata quando eu bater 2 vezes
1-1-2-1-2-2-2-1-1-2</strong></label><br>
                    <label><input type="radio" name="d" value="3" id="d1">Nenhum erro</label><br>
                    <label><input type="radio" name="d" value="2" id="d2">1-2 erros</label><br>
                    <label><input type="radio" name="d" value="1" id="d3">Mais de 2 erros</label><br>
                    <label><input type="radio" name="d" value="0" id="d4">Ecopraxia 4 vezes</label><br>
                </div>
                <label><strong>6-Preensão - Autonomia ambiental
Não pegue minhas mãos</strong></label><br>
                    <label><input type="radio" name="e" value="3" id="e1">Não pega as mãos do examinador</label><br>
                    <label><input type="radio" name="e" value="2" id="e2">Hesita, e pergunta o que fazer</label><br>
                    <label><input type="radio" name="e" value="1" id="e3">Pega sem hesitação</label><br>
                    <label><input type="radio" name="e" value="0" id="e4">Continua segurando após advertência</label><br>
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
 




	                20-29	30-39	40-49	50-59	60-69	70-79	80-89	90-95	Total
1-3 years education	            -	-	-	18	14.5	14.0	13.5	-	14.6
4-5 years education	-	-	16.4	15.6	14.8	14.7	13.2	11.8	14.7
6-8 years education	15.9	16.2	16.7	16.6	16.2	15.4	12.0	14.7	15.8
9-13 years education16.9	17.1	17.7	16.9	16.3	16.2	17.0	12.0	16.6
> 13 years education17.9	17.6	17.7	17.5	17.1	15.9	16.0	15.0	17.2
Total	            16.8	16.8	17.1	16.8	16	15.5	13.8	13.1	16.1
Resources
