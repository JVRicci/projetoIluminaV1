<?php
//inicia sessão
session_start();

//inclue classe de conexão
include ('conexao.php');

// filtra para pegar resultado do radio
$estadoCap = filter_input(INPUT_POST, 'estadoRadio');


//chama valores e converte para o valor real deles, impedindo quie comandos sejam efetuados no banco
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$latitude = mysqli_real_escape_string($conexao, $_POST['latLabel']);
$longitude = mysqli_real_escape_string($conexao, $_POST['longLabel']);
$estado = $_POST['estadoRadio'];
$comentario = mysqli_real_escape_string($conexao, $_POST['comentario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);


// declara query
$query = "INSERT INTO pontos (  latitude, longitude, status, email, descricao) 
        VALUES ( '{$latitude}', '{$longitude}', '{$estado}', '{$email}', '{$comentario}');";
//executa atraves da classe de conexão
        $resultado = mysqli_query($conexao, $query) or die ('Erro ao tentar cadastrar');

        
        header('Location: feedback.html');


// finaliza a session
exit();
