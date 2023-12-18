<?php
session_start();
include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "nome: $nome <br>";
//echo "E-mail: $email <br>"

//result VAI PUXAR A INFO QUE FOI COLOCADA NO BANCO
$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
//resultado usuario vai salvar,query é consulta
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:green;'>usuario cadastrado com sucesso</p>";
    header("Location: index.php");
}
else{
    $_SESSION['msg'] = "<p style 'color:red;'> usuario não foi casdastrado com sucesso</p>";
    header("Location: index.php");;
}


