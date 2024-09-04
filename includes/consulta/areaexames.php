<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>    <center>
    <h2>Consulta Médica</h2>

    <form method="POST" action="../consulta/atendimento2.php?sel=2&cpf=<?=$cpf?>">
        <div id="sample">
        <h4>Resultado de Exames Complementares</h4>
            <textarea name="area" id="area" style="width:70%;height:200px;">
            <br>Sem exames para cadastrar <br><hr>
            </textarea>
        <br><h4>Solicitação de Exames</h4>
            <textarea name="area1" id="area1" style="width:70%;height:200px;">
            <br>Sem solicitações<br><hr>
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