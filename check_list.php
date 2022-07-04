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
    <title>Check List</title>
</head>
<body>
    
        <!--<header>
            <img src="logo.png" alt="logo empresa">
        </header>-->

    <main>
       
        <h1>Check-List</h1>

        <!--<h4>
            <script>
                var titulo = "<?php echo $titulo_pc;?>";
                document.write(titulo);
            </script>
        </h4>-->

        <form method = "POST" action = "check_list.php">
            <table>
                <caption>
                    <script>
                        var titulo = "<?php echo $titulo_pc;?>";
                        document.write(titulo);
                    </script>
                </caption>
                <tbody>
                    <?php

                        $lista = $conect -> prepare('SELECT * FROM itens');
                        $lista -> execute();
                        
                        //$sql = $conect -> prepare("UPDATE itens SET status_pc WHERE id= ?");
                        //$sql->execute();

                        while ($listar = $lista -> fetch(PDO::FETCH_BOTH)): 
                            
                    ?>

                    <tr>
                        <td><input type = "checkbox" id = "check_ok" name = "status_pc" value = "OK" ></td>
                        <td><?php echo $listar ['item']?></td>
                    </tr>

                    <?php endwhile ?>
                </tbody>
            </table>
            <br>
            <button type = "submit" id = "" name = "" value = "Salvar">Salvar</button>

        </form>
    </main>
</body>
</html>