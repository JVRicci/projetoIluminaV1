<?php

//variaveis de conexão
define ('HOST', 'localhost');
define ('USUARIO', 'root');
define ('SENHA', '');
define ('DB', 'bancoilumina');

// classe de conecão
$conexao=mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel se conectar');

