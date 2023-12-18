<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud-cadastrar</title>
</head>
<body>
    <h1>cadastrar usuario</h1>

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION ['msg'];
        unset ($_SESSION['msg']);

    }
    ?>
   
   
    <form action="processa.php" method="post">
   <label>Nome: </label>
   <input type="text" name="nome" placeholder="digite o nome completo"> <br> <br>
   <label>E-mail: </label>
   <input type="email" name="email" placeholder="Digite o seu melhor email"> <br> <br>
   <input type="Submit" value="cadastrar">

</form>




</body>
</html>