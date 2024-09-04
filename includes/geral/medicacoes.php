<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="css/clinica_blog.css" />
    <script src="/js/jquery-3.7.1.min.js" type="text/javascript"></script>
</head>

<body>
    
<br><hr><br><center>
        <h1>Filtrar Medicações</h1>
        <br>
        <form id="form1" method="GET">
            <label>Nome:</label>
                <input type="text" id="query2" name="query2" />
        </form>
        <div>
            <h2 id="subtitulo">Relação de Medicações:</h1>
        </div>
        <br>
        <table border="4">
            <tr>
                <td>Nome</td>
                <td>Abrir Informações</td>
            </tr>
            <?php
                require_once("conecta.php");
                    if(isset($_GET['query2']) != "")
                    {
                        $ref = $_GET['query2'];
                    }
                    else
                    {
                        $ref = '';
                    }

                    $dados_select = mysqli_query($conn, "SELECT * FROM medicacoes WHERE nome LIKE '%$ref%'");

                    while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[1].'</td>';
                        ?><td><a href="../geral/medicacoes/<?=$dado[1].'.html'?>" target="_blank">Abrir</a></td><?php
                        echo '</tr>';
                    }
            ?>
        </table>
    <br>
    </center>

<br><hr>

    <form id="form2" method="GET">
        <div id="sample">
        <h4>Nome:</h4>
            <textarea name="area" id="area" style="width:50%;height:20px;"></textarea>
        <br><h4>Descrição</h4>
            <textarea name="area1" id="area1" style="width:50%;height:100px;"></textarea>
        </div>
        <input type="submit" value="Salvar Cadastro">
    </form>

<?php
if (isset($_GET['area'])){

      require_once('conecta.php');
        $nome = $_GET['area'];
            $dados = [

            [
                'html'=>'<!DOCTYPE HTML><html lang=pt-br><head><meta charset=UTF-8></head></html>',
            ],
            [
                'espaco' => '<br>',
                'cabecalho1' => 'Nome: ',
                'br1' => $nome . '<br><br><hr>',
            ],
            [
                'descricao' => 'Descrição:',
                'br2' => '<br>',
                'descricaomed' => $_GET['area1'],
            ],
            ];

            // Abrir/criar arquivo
            $arquivo = fopen('medicacoes/' .$nome. '.html', 'a');

            // Popular os dados
            foreach ($dados as $linha) {
                fputcsv($arquivo, $linha);
            }
             // Fechar o arquivo
             fclose($arquivo);
            
            $sql = "INSERT INTO medicacoes (nome) VALUES ('$nome')";
            if ($conn->query($sql) === TRUE) {
            } else {
             echo "<h3>OCORREU UM ERRO: </h3>: " . $sql ."<br>" . $conn->error;
            }

}
?>

<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>    
</body>
</html>