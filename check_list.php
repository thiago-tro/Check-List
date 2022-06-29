<?php
    
    if(!isset($_SESSION)){
        session_start();
    }
    include_once ('conexao.php');
    


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Check List</title>
</head>
<body>
<form method = "POST" action = "check_list.php">
    <header>
        <img src="logo.png" alt="logo empresa">
    </header>
    <main>
        
    <h1>Check List</h1>


    <?php
                  /*$busca = trim( $_POST['cod-pc'] );*/
$pesquisa = $conect->prepare('SELECT * FROM itens WHERE item LIKE :busca');
$pesquisa->bindParam(':busca', $busca, PDO::PARAM_INT);
$pesquisa->execute();

$resultado = $pesquisa->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $result) {
        extract($result);
        echo "PC:  $cod_pc - $nome_pc";
        

exit;

    }

    ?>

 
    <!--<table border="1">
        <tr><th colspan="2">Zona 1</th></tr><!--itens da zona 1
        <tr>
            <td>CPU</td>
            <td>
                <select name="status" id="status">
                    <!--<option value=""></option>->
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Anti Skimming</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Leitora de Cartão</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Imperssora</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Leitor de Código de Barras</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Teclado</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Vídeo</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Touch Screen</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Biometria</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr><th colspan="2">Zona 2</th></tr><!--itens da zona 2->
        <tr>
            <td>Placa de identificação do Pc</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Sensor 2</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr><th colspan="2">Zona 3</th></tr><!--itns da zona 3->
        <tr>
            <td>Filtro de Ar</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Iluminação do Mosaico</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Fiação do ATM</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ventoinha</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Cabo de Comunicação</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Teste de Rede/Moldem</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tensão do Estabilizador/Nobreak</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tensão da Rede Elétrica</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alarme/DIMER</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr><th colspan="2">Ponto</th></tr><!--itens do ponto->
        
        <tr>
            <td>Adesivos</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>Triedo</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Limpeza do Equipamento</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mascar do ATM</td>
            <td>
                <select name="status" id="status">
                    <option value=""></option>
                    <option value="OK">OK</option>
                    <option value="PD">Pendente</option>
                </select>
            </td>
        </tr>        
    </table>-->
    </form>
    </main>
</body>
</html>