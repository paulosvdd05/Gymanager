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

include_once("conexao.php");
session_start();

$id = $_POST['ID'];

$sql = "SELECT usu_id, usu_usuario, usu_nome, nivel_id FROM usuarios WHERE usu_id = '$id'";
$query = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($query);
$aluno_id = $resultado['usu_id'];
$nivel_id = $resultado['nivel_id'];
$aluno_nome = $resultado['usu_nome'];
$professor_id = $_SESSION['UsuarioID'];


$inserir_conexao = "DELETE FROM conexao WHERE conexao.professor_id = '$professor_id' and conexao.aluno_id = '$aluno_id";







$total = 0;
$sql3 = "SELECT * FROM conexao WHERE conexao.professor_id = '$professor_id' and conexao.aluno_id = '$aluno_id';";
$query3 = mysqli_query($conn, $sql3);
$total = mysqli_num_rows($query3);


if ($total == 1) {
    $existir = "SELECT conexao_id FROM `conexao` WHERE conexao.professor_id = '$professor_id' and conexao.aluno_id = '$aluno_id' ";
    $parte1 = mysqli_query($conn, $existir);
    $qryasso = mysqli_fetch_assoc($parte1);
    $conexaoid = $qryasso['conexao_id'];
    $deletar = "DELETE FROM conexao WHERE conexao_id='$conexaoid'";
    $updateava = "UPDATE avaliacao SET conexao_id = 100 WHERE conexao_id = '$conexaoid'";
    $updateserie = "UPDATE serie SET conexao_id = 100 WHERE conexao_id = '$conexaoid'";
    $parte2 = mysqli_query($conn, $updateava);
    $parte2 = mysqli_query($conn, $updateserie);
    $parte2 = mysqli_query($conn, $deletar);
    

    echo "<script language='javascript' type='text/javascript'>
                Swal.fire({
                    title: 'Tudo certo!',
                    text: 'Aluno removido com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#ffaa00',
                    background: '#f7f6ff',
                }).then(function() {
                    window.location = 'meus_alunos.php';
                });
            </script>";
} else {




    echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
            title: 'Aluno não encontrado',
            text: 'Este usuário não pertence aos seus alunos',
            icon: 'warning',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff',
          }).then(function() {
            window.location = 'meus_alunos.php';
        });
        </script>";
}











?>