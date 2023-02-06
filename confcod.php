<?php
error_reporting(0);
session_start();
$_SESSION['idCod'] = $_POST['ID'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Código Aluno • GYMANAGER</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_login.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="./img/halter.ico">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card" style="position: absolute; top: 50%;left: 50%;transform: translate(-50%, -50%)">
            <a href="gerenciar_alunos.php" class="voltar">Voltar</a>
            <img src="img/logo2.png" class="card-img-top" alt="logo">
            <h3 class="titulo">Confirmar Código de Aluno:</h3>

            <div class="card-body">
                <form action="processoaddaluno.php" method="post">
                    <div class="form-group">
                        <input name="cod" type="text" class="form-control form-itens" placeholder="Código"><br>
                    </div>

                    <button class=" btn btn-md btn-block botao mt-4" type="submit">Confirmar</button>
                    <br>
                </form>
            </div>
        </div>
    </div>

 

</body>

</html>