<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>    <center>
    <h2>Consulta Médica</h2>
    <div>
        <a href="../instrumentos/asrs18.php" target="_blank">ASRS-18</a>
        <a href="../instrumentos/dep_alcool.php" target="_blank">Dependência de Álcool</a>
        <a href="../instrumentos/dep_nicotina.php" target="_blank">Dependência de Nicotina</a>
        <a href="../instrumentos/hachinski.php" target="_blank">Score Demência Vascular</a>
    </div>
    <form method="POST" action="../consulta/atendimento2.php?sel=1&cpf=<?=$cpf?>">
        <div id="sample">
        <h4>Anamnese</h4>
            <textarea name="area" id="area" style="width:70%;height:200px;">
            <br><hr>
            HMA: <br><br>
            DPMU: <br><br>
            Desenvolvimento Infantil: personalidade, socialização, jogos e brincadeiras, aproveitamento escolar, ansiedade de separação;

Adolescência:  desempenho escolar, uso de álcool e drogas, delinquência, relacionamentos interpessoais;

Estudos e desenvolvimento: faculdades, cursos e planejamento futuro;

Vida Profissional: vocações; estabilidade nos empregos; relacionamento com chefes, subordinados e colegas; desempenho;

Relacionamentos Familiares:
Relacionamentos Extra-Familares:

Sexualidade: iniciação, preferência, orientação, número de parceiros, frequência;

Personalidade pré-mórbida: padrão de humor, agressividade, introversão/extroversão, egoísmo/altruísmo, independência/dependência, atividade/passividade, valores, adaptação ao ambiente;

Planejamento Futuro:
            Antecedentes Pessoais: <br><br>
            Antecedentes Psiquiátricos: <br><br>
            AF: <br><br>
            Hábitos: <br><br>
            Religião: <br><hr>
            </textarea>
        <br><h4>Exame do Estado Mental</h4>
            <textarea name="area1" id="area1" style="width:70%;height:200px;">
            <br>Apresentação<br><hr>
            </textarea>
        </div>
<br><br>
        <input type="submit" value="Continuar">

    </form></center>

</body>
<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area1');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>
</html>