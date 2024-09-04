<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="css/clinica_estilo1.css" />
</head>

<body>
    <?php
        $cpf= $_GET['cpf'];
    ?>
        <form id="cadastropag" action="salva_pagamento.php" method="POST">
            <div class="campo">
                <label for="cpf"><strong>CPF: </strong></label>
                <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" required>

                <label for="dataAtual"><strong>Data Atual: </strong></label>
                <input type="date" name="dataatual" id="datatual" value="<?= date('Y-m-d') ?>" required>

                <label for="datapagamento"><strong>Data do Pagamento: </strong></label>
                <input type="date" name="datapagamento" id="datapagamento" required>

                <label for="dataconsulta"><strong>Data da Consulta: </strong></label>
                <input type="date" name="dataconsulta" id="dataconsulta" required>

                <label for="valor"><strong>Valor: </strong></label>
                <input type="text" name="valor" id="valor" size="7" value="R$" required>

                <label for="forma_pag"><strong>Forma de Pagamento: </strong></label>
                <select name="forma_pag" id="forma_pag" required>
                    <option>Dinheiro</option>
                    <option>Pix</option>
                    <option>Cartão de Crédito-Site</option>
                    <option>Cartão de Crédito-Pessoal</option>
                </select>
                <br><br>
                <button type="submit">Salvar</button>
            </div>

        </form>
    <?php
    ?>
    </body>
</html>