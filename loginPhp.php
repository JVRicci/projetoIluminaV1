<?php
//inicia sessão
session_start();
//utiliza a classe de conexão
include('conexao.php');



// variaveis de login
$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//query do banco para fazer select do login
$query = "select login, senha, func from  users where login = '{$login}' and senha= '{$senha}';";

// executa a query usando a classe de conexãop
$result = mysqli_query($conexao, $query);

//usa as linhas do select executado
$row = mysqli_num_rows($result);
$linha = mysqli_fetch_assoc($result);

//carrega tela inicial do siistema
if($row == 1){

    $_SESSION['login'] = $login;
    if ($linha['func']=='admin'){

        header('Location:admSide/indexAdm.php');
        exit();

    }

    else if( $linha['func'] == 'usuario'){

        header('Location:indexcliente.html');
        exit();
    }
}

else{
    header('Location: login.html');
    exit();
}

