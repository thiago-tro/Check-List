<?php
$local = '127.0.0.1';
$db = 'check_list';
$susasrio = 'root';
$senha = 'tro789';

try {
$conect = new PDO("mysql:host=$local;dbname=$db", $susasrio, $senha);
} catch (PDOExcepition $err) {
    echo "erro naconexão" . $err->getMessage();
}
?>