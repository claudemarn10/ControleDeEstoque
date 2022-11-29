<?php

$servername ="localhost"; // padrao - server local
$database ="tihaccr"; // alterar conforme o nome do banco de dados
$username = "root";     // padrao root
$password = "";     // senha de conexao do bd

//create connection
$conexao = mysqli_connect($servername, $username,$password, $database);

?>
