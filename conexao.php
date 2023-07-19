




<?php
define('HOST', 'localhost');
define('DBNAME', 'Escola');
define('SENHA', '2324');
define('USUARIO', 'root');

try{
    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USUARIO, SENHA);
    
} catch(PDOException $e){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado" . $e -> getMessage();
}








?>
