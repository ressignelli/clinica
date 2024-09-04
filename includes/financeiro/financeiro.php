<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css"  href="/css/clinica_estilo1.css" />
    <script src="/js/man_form.js" type="text/javascript"></script>
</head>

<body>
    <br><hr><br><center>
        <h1>Financeiro-Cadastro de Pagamento</h1>
        
    <!---segunda parte - cadastro do pagamento-->
    <?php
        include_once('../secretaria/exloginsec.php');
        if (isset($_GET['cpf'])){
           include_once('cadastro_pag.php');
        }else{
        ?>
    
        <br>
        <form id="formpac" method="POST">
            <label for="query2">Nome:</label>
                <input type="text" id="query2" name="query2" />

            <label for="query3">Sobrenome:</label>
                <input type="text" id="query3" name="query3" />

            <label for="query4">CPF:</label>
                <input type="text" id="query4" name="query4" />

            <button type="submit">Pesquisar</button>
        </form>
        <div>
            <h2 id="subtitulo">Relação de Pacientes:</h1>
        </div>
        <br>
        <table border="4">
            <tr>
                <td>CPF</td>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>CADRASTRAR PAGAMENTO</td>
                <td>CONSULTAR PAGAMENTO</td>
            </tr>
            <?php
                    require_once('../geral/conecta.php');
                    if(isset($_POST['query2']) != "")
                    {
                        $ref = $_POST['query2'];
                    }
                    else
                    {
                        $ref = '';
                    }
                    if(isset($_POST['query3']) != "")
                    {
                        $ref2 = $_POST['query3'];
                    }
                    else
                    {
                        $ref2= '';
                    }
                    if(isset($_POST['query4']) != "")
                    {
                        $ref3 = $_POST['query4'];
                    }
                    else
                    {
                        $ref3= '';
                    }
                    $dados = mysqli_query($conn, "SELECT * FROM pacientes WHERE cpf LIKE '%$ref3%' and nomepac LIKE '%$ref%' and sobrenomepac LIKE '%$ref2%' and data_cons IS NOT NULL or data_ret IS NOT NULL");

                    while($dado = mysqli_fetch_array($dados)) {
                        echo '<tr>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        ?><td>
                            <?php
                                if ($dado[20]==0 and $dado[18]==0 ){
                                    ?>
                                    <a href="/includes/financeiro/financeiro.php?&cpf=<?=$dado[1]?>">Cadastrar</a></td>
                                <?php
                                }
                            ?>
                        <td>
                            <?php
                            if ($dado[20]==1){
                                echo "Confirmado";
                            }else{
                                echo "Não Confirmado";
                            }
                            ?></td>
                            <?php
                        echo '</tr>';
                    }
            ?>
        </table>
    <br><hr>
        <?php
        }
        ?>
    </center>
</body>
</html>