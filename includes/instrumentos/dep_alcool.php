<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>ASRS-18</title>
    <link href="/css/estilo_grid.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/lib/icones/OIP.jfif" type="image/png">
</head>

<body>
    <div class="titulo">
        <h3>Escala de Avaliação de Dependência de Nicotina</h3>
    </div>

<hr>

	 <!-- Início do formulário -->
        <form id="form" method="" action="">
                <div>
            	    <label><strong>A quanto tempo o padrão problemático de uso de álcool, levando a comprometimento ou sofrimento clinicamente significativos?</strong></label><br>
            	    <label><input type="radio" name="a" id="a">1 ano ou mais</label><br>
            	    <label><input type="radio" name="a" id="a1">menos de 1 ano</label><br><br><hr>
                </div>
                <div>
                    <label><input type="checkbox" name="b" id="b">Álcool é frequentemente consumido em maiores quantidades ou por um período mais longo?</label><br>
                    <label><input type="checkbox" name="c" id="c">Existe um desejo persistente ou esforços malsucedidos no sentido de reduzir ou controlar o uso de álcool?</label><br>
                    <label><input type="checkbox" name="d" id="d">Muito tempo é gasto em atividades necessárias para a obtenção de álcool, na utilização de álcool ou na recuperação de seus efeitos?</label><br>
                    <label><input type="checkbox" name="e" id="e">Fissura ou um forte desejo ou necessidade de usar álcool?</label><br>
                    <label><input type="checkbox" name="f" id="f">Uso recorrente de álcool, resultando no fracasso em desempenhar papéis importantes no trabalho, na escola ou em casa?</label><br>
                    <label><input type="checkbox" name="g" id="g">Uso continuado de álcool, apesar de problemas sociais ou interpessoais persistentes ou recorrentes causados ou exacerbados por seus efeitos?</label><br>
                    <label><input type="checkbox" name="h" id="h">Importantes atividades sociais, profissionais ou recreacionais são abandonadas ou reduzidas em virtude do uso de álcool?</label><br>
                    <label><input type="checkbox" name="i" id="i">Uso recorrente de álcool em situações nas quais isso representa perigo para a integridade física?</label><br>
                    <label><input type="checkbox" name="j" id="j">O uso de álcool é mantido apesar da consciência de ter um problema físico ou psicológico persistente ou recorrente que tende a ser causado ou exacerbado pelo álcool?</label><br><hr>
                </div>
                <div>
                    <strong><label><input type="checkbox" name="k" id="k">Ocorre tolerância, definida por qualquer um dos seguintes aspectos:</label></strong>
                    <p>a. Necessidade de quantidades progressivamente maiores de álcool para alcançar a intoxicação ou o efeito desejado.</p>
                    <p>b. Efeito acentuadamente menor com o uso continuado da mesma quantidade de álcool.</p>
                    <strong><label><input type="checkbox" name="l" id="l">Abstinência, manifestada por qualquer um dos seguintes aspectos:</label></strong>
                    <p>a. Síndrome de abstinência característica de álcool</p>
                    <p>b. Álcool (ou uma substância estreitamente relacionada, como benzodiazepínicos) é consumido para aliviar ou evitar os sintomas de abstinência.</p><hr><br>
                </div>
                
                <div class="finalizar"><center>
        	        <input type="button" value="Verificar Resultado" onclick="soma()">
        	    </center>
        	    </div>
        </form>
    </body>   
    
<script>

function soma() {

    var soma = 0;
    
    if (document.getElementById("b").checked){
        soma +=1;
    }
    if (document.getElementById("c").checked){
        soma +=1;
    }
    if (document.getElementById("d").checked){
        soma +=1;
    }
    if (document.getElementById("e").checked){
        soma +=1;
    }
    if (document.getElementById("f").checked){
        soma +=1;
    }
    if (document.getElementById("g").checked){
        soma +=1;
    }
    if (document.getElementById("h").checked){
        soma +=1;
    }
    if (document.getElementById("i").checked){
        soma +=1;
    }
    if (document.getElementById("j").checked){
        soma +=1;
    }
    if (document.getElementById("k").checked){
        soma +=1;
    }
    if (document.getElementById("l").checked){
        soma +=1;
    }

    var myWindow = window.open("", "MsgWindow", "width=400,height=100");
    
    if (document.getElementById("a").checked){
        if (soma>=2){
            myWindow.document.write("<p>Dependência de Álcool!</p>");
        }
    }else if (document.getElementById("a1").checked){
        if (soma>=2){
            myWindow.document.write("<p>Evolução para a Dependência de Álcool!</p>");
        }
    }

    if (soma < 2){
        myWindow.document.write("<p>Provável ausência de dependência.</p>");
    }else if (soma <= 3 ){
        myWindow.document.write("<p>(F10.10) Leve.</p>");
    }else if (soma <= 5 ){
        myWindow.document.write("<p>(F10.20) Moderada.</p>");
    }else if (soma > 5 ){
        myWindow.document.write("<p>(F10.20) Grave.</p>");
    }
 
}         
</script>     
        

</html>