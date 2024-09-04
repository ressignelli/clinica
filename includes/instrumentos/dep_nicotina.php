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
        <h3>Escala de Avaliação de Dependência de Nicotina</h3>
    </div>

<hr>

	 <!-- Início do formulário -->
        <form id="form" method="GET" action="dep_nicotina.php">
                <div>
            	    <label><strong>Classificação DiClemente</strong></label><br>
            	    <label><input type="radio" name="a" value="0" id="a">Pré-contemplação:Cliente não tem intenção de mudar nos próximos seis meses. Encontra-se desmotivado e bastante resistente às orientações (não quer parar de fumar).</label><br>
            	    
            	    <label><input type="radio" name="a" value="0" id="a1">Contemplação: Cliente está ciente que o problema existe, e há intenção de mudanças nos próximos seis meses. No entanto, há uma ambivalência quanto à perspectiva de mudanças (pensa em parar de fumar).</label><br>
            	    
            	    <label><input type="radio" name="a" value="1" id="a2">Preparação: Cliente tem intenções de realizar mudanças no próximo mês, e já se podem observar pequenas mudanças comportamentais.</label><br>
            	    <label><input type="radio" name="a" value="1" id="a3">Ativa/ação: Cliente tem modificado seu comportamento num período inferior de seis meses e superou de alguma forma as barreiras antes percebidas (preparado para iniciar tratamento).</label><br>
            	    <label><input type="radio" name="a" value="1" id="a4">Manutenção: Cliente se esforça para prevenir recaídas e consolidar o comportamento saudável.</label><br>
            	    <label><input type="radio" name="a" value="1" id="a5">Recaida: Cliente retornou ao hábito.</label><br><br><hr>
                </div>
                
                <label><strong>Teste de Fagerström</strong></label><br>
                <div>
                    <label><strong>1-Quanto tempo, depois de acordar, você fuma o seu primeiro cigarro?</strong></label><br>
                    <label><input type="radio" name="b" value="0" id="b1">0 - Após 60 minutos;</label><br>
                    <label><input type="radio" name="b" value="1" id="b2">1 - 31 à 60 minutos;</label><br>
                    <label><input type="radio" name="b" value="2" id="b3">2 - 6 à 30 minutos;</label><br>
                    <label><input type="radio" name="b" value="3" id="b4">3 - nos primeiros 5 minutos.</label><br><br>
                </div>
                <div>
                    <label><strong>2-Você encontra dificuldades em evitar fumar em locais onde é proibido?</strong></label><br>
                    <label><input type="radio" name="c" value="0" id="c1">0 - Não</label><br>
                    <label><input type="radio" name="c" value="1" id="c2">1 - Sim</label><br><br>
                </div>
                <div>
                    <label><strong>3-Qual o cigarro mais difícil de largar ou de não fumar?</strong></label><br>
                    <label><input type="radio" name="d" value="0" id="d1">0 - Qualquer um</label><br>
                    <label><input type="radio" name="d" value="1" id="d2">1 - O primeiro da manhã</label><br><br>
                </div>                
                <div>
                    <label><strong>4-Quantos cigarros você fuma por dia?</strong></label><br>
                    <label><input type="radio" name="e" value="0" id="e1">0 - 10 ou menos</label><br>
                    <label><input type="radio" name="e" value="1" id="e2">1 - 11 à 20</label><br>
                    <label><input type="radio" name="e" value="2" id="e3">2 - 21 à 30</label><br>
                    <label><input type="radio" name="e" value="3" id="e4">3 - 31 ou mais</label><br><br>
                </div>
                <div>
                    <label><strong>5-Você fuma mais frequentemente nas primeiras horas do dia do que durante o resto do dia?</strong></label><br>
                    <label><input type="radio" name="f" value="0" id="f1">0 - Não</label><br>
                    <label><input type="radio" name="f" value="1" id="f2">1 - Sim</label><br><br>
                </div>  
                <div>
                    <label><strong>6-Você fuma mesmo estando doente a ponto de ficar na cama a maior parte do dia?</strong></label><br>
                    <label><input type="radio" name="g" value="0" id="g1">0 - Não</label><br>
                    <label><input type="radio" name="g" value="1" id="g2">1 - Sim</label><br><br>
                </div>  
                <div>
                    <label><strong>Doeças pré-existentes</strong></label><br>
                    <label><input type="checkbox" name="h" value="0" id="h">IAM recente ou HAS 2</label><br>
                    <label><input type="checkbox" name="i" value="1" id="i">Úlcera Péptica"</label><br>
                    <label><input type="checkbox" name="j" value="2" id="j">Convulsão"</label><br>
                    <label><input type="checkbox" name="k" value="3" id="k">IMAOs/Etilismo"</label><br>
                </div>
                <div>
                    <input type="hidden" name="ver" value="1">
                </div>
                <div class="finalizar"><center>
        	        <button type="submit">Verificar Resultado</button>
        	    </center>
        	    </div>
        	        <div id="newEventModal">
                    <h2>Resultado</h2>

<?php

if (!isset($_GET['ver'])){
    exit();
}

if (isset($_GET['a'])){
    $a = $_GET['a'];
    if ($a ==0){
        echo "Paciente com baixíssima probabilidade de sucesso em parar de fumar!";
        exit();
    }
} else{
    echo "Paciente com baixíssima probabilidade de sucesso em parar de fumar!";
    exit();
}

$soma=0;

if (isset($_GET['b'])){
    $soma = $soma + $_GET['b'];
}
if (isset($_GET['c'])){
    $soma = $soma + $_GET['c'];
}
if (isset($_GET['d'])){
    $soma = $soma + $_GET['d'];
}
if (isset($_GET['e'])){
    $soma = $soma + $_GET['e'];
}
if (isset($_GET['f'])){
    $soma = $soma + $_GET['f'];
}
if (isset($_GET['g'])){
    $soma = $soma + $_GET['g'];
}

if ($soma <=2){
    echo "Dependência muito baixa" . "<br>";
}elseif ($soma <=4){
    echo "Depedência baixa" . "<br>";
}elseif ($soma <=5){
    echo "Depedência moderada" . "<br>";
}elseif ($soma <=7){
    echo "Depedência elevada". "<br>" ;
}elseif ($soma >=8){
    echo "Depedência muito elevada" . "<br>";
}

if (isset($_GET['h'])){
    echo "Melhor tratamento: Vanericlina ou Bupropiona" . "<br>";
}
if (isset($_GET['i'])){
    echo "Vanericlina, Bupropiona ou Nicotina adesivo". "<br>";
}
if (isset($_GET['j'])){
    echo "Vanericlina e Nicotina qualquer forma". "<br>";
}
if (isset($_GET['k'])){
    echo "Nicotina qualquer forma". "<br>";
}
    echo "<br><hr>";
    echo "Vareniclina: Kit Tratamento Completo: 11 cps de 0,5 mg e 154 cp de 1 mg." ."<br>" .
    "1º ao 3º dia 0,5 mg, uma vez ao dia"."<br>".
    "4º ao 7º dia 0,5 mg, duas vezes ao dia"."<br>".
    "8º dia até o final do tratamento 1 mg, duas vezes ao dia até 12 semanas (3 meses)". "<br><hr>";
    echo "Bupropiona". "<br><hr>";
    echo "Nicotina:". "<br>";
    echo "Gomas mastigáveis 2 mg ou 4 mg (>20cig/dia)"."<br>";
    echo "Mascar intermitente por 30 min, usar no máximo 24 ao dia (máx 1 ano)"."<br><br>";
    echo "Adesivos 7 mg, 14 mg ou 21 mg"."<br>";
    echo "> 10 cig/dia:"."<br>";
    echo "1a Etapa 21 mg->6 semanas iniciais"."<br>". "2a Etapa 14 mg->2 semanas seguintes"."<br>". "3a Etapa 7 mg->2 semanas finais". "<br>";
    echo "< 10 cid/dia:"."<br>";
    echo "14 mg->6 semanas"."<br>". "7 mg->2 semanas". "<br>";

?>
        <br><hr>
        <button id="cancelButton">Fechar</button>
        </div>
        </form>
        </body>
<script>
    const newEvent = document.getElementById('newEventModal')
    newEvent.style.display = 'block'
    document.getElementById('cancelButton').addEventListener('click',()=>closeModal())
    
    function closeModal(){
        newEvent.style.display = 'none'
    }
</script>

</html>
