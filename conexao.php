




<?php
// define('HOST', '10.70.230.53:3306');
//define('USUARIO', 'sisaluno');
//define('SENHA', 'sisaluno2023');
//define('DBNAME','sisaluno');

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '2324');
define('DBNAME','sisaluno');


try{
    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USUARIO, SENHA);
    
} catch(PDOException $e){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado" . $e -> getMessage();
}








?>
