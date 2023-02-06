<?php

require_once "phplogin/validador_acesso.php";
include_once("conexao.php");
error_reporting(0);
include_once("processo_alunos.php");

$ava_id = $_POST['idAva'];
$conexaoid = $_SESSION['conexaoId'];

$sql = "DELETE FROM avaliacao WHERE ava_id = '$ava_id'";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remover Aluno • GYMANAGER</title>
    <!-- Estilos -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="css/styles_login.css">
    <!--SweetAlert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="./img/halter.ico">
</head>

<body>

</body>

</html>
    <?php 

    echo "<script language='javascript' type='text/javascript'>
            Swal.fire({
                title: 'Tudo certo!',
                text: 'Avaliação removida com sucesso!',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#ffaa00',
                background: '#f7f6ff',
              }).then(function() {
                window.location = 'avaliacao_a.php';
            });
            </script>";

    ?>