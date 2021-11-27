<?php
//inicia sessão
session_start();
//utiliza a classe de conexão
include('conexao.php');

// variaveis de cadastro
$nome = mysqli_real_escape_string($conexao, $_POST['usuariocad']);
$login = mysqli_real_escape_string($conexao, $_POST['usuariocad']);
$email = mysqli_real_escape_string($conexao, $_POST['emailcad']);
$senha = mysqli_real_escape_string($conexao, $_POST['senhacad']);

//query do banco para fazer insert do cadastro
$query = "INSERT INTO users (nome, email, login, senha, func) 
            values ( '{$nome}', '{$email}', '{$login}', '{$senha}', 'usuario');";

// executa a query usando a classe de conexão
$resultado = mysqli_query($conexao, $query) ;


//carrega tela inicial do siistema
header('Location:login.html');
exit();