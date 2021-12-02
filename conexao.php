<?php

$server = 'localserver';
$user = 'root';
$password = 'root';
$db_name = 'estacionamento';
$port = '8889';


//Conexao com a porta

try {
    $conn = new PDO("mysql:server=$server;port=$port;dbname=".$db_name, $user, $password);
   // echo "Conexão realizada com sucesso";
} catch(PDOException $err){
    echo "Erro: Conexão com o banco de dados nao foi realizada" . $err->getMessage();
}







