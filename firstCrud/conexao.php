<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'bdcrud');

//Assim ele tenta fazer a conexão com o banco de dados e, se não conseguir, cai no catch exibindo a mensagem do die.
try {
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
    mysqli_set_charset($conexao, 'utf8');
    // echo "Conectado com sucesso"; // não use em produção
} catch (mysqli_sql_exception $e) {
    die('Não foi possível conectar ao banco de dados.');
}

// Poderia ser assim, mas assim a mensagem do die não aparece.

//<?php
//
//    define('HOST', '');
//    define('USUARIO', '');
//    define('SENHA', '');
//    define('DB', '');
//
//    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar ao banco de dados.');
//    ?>