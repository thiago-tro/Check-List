<?php

if(!isset($_SESSION)){
    session_start();
   
}

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

        <h1>Pesquisa:</h1>
        
        <section>
            <form method = "POST" action = "index.php">

                <label>Código do PC:<label>
                <input type = "int" name = "cod-pc" size = "15" array= "" placeholder = "Incira o código do PC">
                <button>Buscar</button> 
                
                <div>
                    <?php
                        //if (isset($_POST['cod-pc'])) {
                        //    header("location: check_list.php");
                        //exit;
                        //}
                       

                        $busca = trim( $_POST['cod-pc'] );

                        $pesquisa = $conect->prepare('SELECT * FROM pcs WHERE cod_pc LIKE :busca');
                        $pesquisa->bindParam(':busca', $busca, PDO::PARAM_INT);
                        $pesquisa->execute();

                        $resultado = $pesquisa->fetchAll(PDO::FETCH_ASSOC);

                        foreach($resultado as $result) {
                                extract($result);
                                $titulo_pc = "PC:  $cod_pc - $nome_pc";
                                
                                
                                                                
                                if (isset($_POST['cod-pc'])) {
                                //header("location: check_list.php");
                                require("check_list.php");
                        exit;
                        } }                         

                    ?>

                    <script>
                       var titulo = "<?php echo $titulo_pc;?>";
                        
                    </script>

                   <!-- <button><a href="check_list.php">iniciar</a></button> -->
                </div>
            </form>
        </section>
    </main>
</body>
</html>