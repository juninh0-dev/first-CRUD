<?php
session_start();
require "conexao.php";

if (isset($_POST['create_usuario'])) {
    header('Location: index.php');

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = trim($_POST['senha']);

    $senha = password_hash($senha, PASSWORD_BCRYPT);
    if ($nome == "" || $email == "" || $data_nascimento == "" || empty($_POST['senha'])) {
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos.";
        header('Location: index.php');
        exit;
    } else {
        $sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha)
            VALUES ('$nome', '$email', '$data_nascimento', '$senha')";

        mysqli_query($conexao, $sql);

        if (mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem'] = "Usuário criado com sucesso.";
        } else {
            $_SESSION['mensagem'] = "Erro ao criar usuário.";
            header('Location: index.php');
            exit;
        }
    }
}
