<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'minhaseconomias'; // Nome do banco de dados

// Conexão com o banco de dados
$mysqli = new mysqli($host, $user, $password, $database);

/*if ($mysqli->connect_errno) {
    echo 'Falha ao conectar ao MySQL: ' . $mysqli->connect_error;
    exit();
} else {
    echo 'Conectado com sucesso!';
}
*/