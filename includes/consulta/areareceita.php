<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>
    <h2>Consulta Médica</h2>

    <form method="POST" action="../consulta/salva_consulta.php?sel=3&ret=<?=$retorno?>&cpf=<?=$cpf?>">
        <div id="sample">
        <h4>Receituário Médico</h4>
            <textarea name="area" id="area" style="width:70%;height:200px;">
            <br>Sem Prescrição<br><hr>
            </textarea>
        <br><h4>Relatório Médico</h4>
            <textarea name="area1" id="area1" style="width:70%;height:200px;">
            <br>Sem relatório<br><hr>
            </textarea>
        <br><h4>Atestado Médico</h4>
            <textarea name="area2" id="area2" style="width:70%;height:200px;">
            <br>Sem Atestado <br>
            Atesto que Sr(a). , cpf nº , necessita afastar-se de suas atividades, por motivo de doença, no período de
            CID-10:
            </textarea>
        </div>
<br><br>
        <input type="submit" value="Salvar Consulta">


    </form>

</body>
<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>
</html>