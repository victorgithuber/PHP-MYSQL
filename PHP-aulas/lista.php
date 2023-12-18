<?php
include_once('conexao.php');
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud-listar</title>
</head>
<body>
 <form action="processa.php" method="post">
 
 <h1>Cadastrar usuário</h1>
 <?php
 if(isset($_SESSION['msg'])){
    echo $_SESSION ['msg'];
    unset($_SESSION['msg']);
 }
 $result_usuarios = "SELECT * FROM usuarios";
 $resultado_usuarios = mysqli_query($conn, $result_usuarios);

 //vai puxar os dados por linha
 while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
    echo "ID:" .$row_usuario['id']."<br>";
    echo "Nome:" .$row_usuario['nome']."<br>";
    echo "E-mail:" .$row_usuario['email']."<br>";
    echo "<a href='editar.php?id=" . $row_usuario['id'] . "'>Editar</a><br><hr>";
}
 ?>

</form>


 </body>
</html>