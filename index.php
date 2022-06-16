<?php
include ('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Check-List</title>
</head>
<header>
    <img src="logo.png" alt="logo empresa">
</header>
<body>
    <main>
        <h2>Pesquisa:</h2>
        <section>
            <form method = "GET" action = "">

                <label>Código do PC:<label>
                <input type = "int" name = "cod-pc" size = "15" placeholder = "Incira o código do PC">
                <button>Buscar</button>
                
                <div>
                    <?php
                        /*if (!isset($_GET['cod-pc'])) {
                        header("location: index.php");
                        exit;
                        }*/

                        $busca = trim( $_GET['cod-pc']);

                        $pesquisa = $conect->prepare('SELECT * FROM pcs WHERE cod_pc LIKE :busca');
                        $pesquisa->bindParam(':busca', $busca, PDO::PARAM_INT);
                        $pesquisa->execute();

                        $resultado = $pesquisa->fetchAll(PDO::FETCH_ASSOC);

                        foreach($resultado as $result) {
                                extract($result);
                                echo "PC:  $cod_pc - $nome_pc";
                                
                            }
                            header("location: check_list.php"); 
                                                        

                    ?>
                    <button><a href="check_list.php">iniciar</a></button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>