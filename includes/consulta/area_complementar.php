<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
</head>

<body>    <center>
             <form id="prescricao" method="POST" action="modelos/modelo_receit.php" target="_blank">
                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                    <input type="hidden" name="sobrenome" value="<?php echo $sobrenome; ?>">
                    <input type="hidden" name="endereco" value="<?php echo $enderecopac; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <input type="hidden" name="prescricao" value="<?php echo $prescricao; ?>">

                <input type="submit" value="Imprimir Receita">
                <br><hr><br>
             </form>
             <br><br>

             <form id="atestado" method="POST" action="modelos/modelo_atest.php" target="_blank">
             <div class="atest">
                 <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                 <input type="hidden" name="sobrenome" value="<?php echo $sobrenome; ?>">
                 <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                 <input type="hidden" name="atestado" value="<?php echo $atestado; ?>">
                 <input type="submit" value="Imprimir Atestado">
                 <br><br><hr>
             </div>
             </form>

             <form id="relatorio" method="POST" action="modelos/modelo_rel.php" target="_blank">
                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                    <input type="hidden" name="sobrenome" value="<?php echo $sobrenome; ?>">
                    <input type="hidden" name="endereco" value="<?php echo $enderecopac; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio; ?>">
                <input type="submit" value="Imprimir Relatório">
                <br><hr><br>
             </form>
</body>
</html>