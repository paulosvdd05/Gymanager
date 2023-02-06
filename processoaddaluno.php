<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adicionar Aluno • GYMANAGER</title>
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
error_reporting(0);
include_once("conexao.php");
session_start();

$id = $_SESSION['idCod'];
$codInserido = $_POST['cod']; 


$sql = "SELECT usu_id, usu_usuario, usu_nome, nivel_id, usu_codigo FROM usuarios WHERE usu_codigo = '$codInserido'";
$query = mysqli_query($conn, $sql);
$count = mysqli_num_rows($query);
$resultado = mysqli_fetch_assoc($query);
$aluno_id = $resultado['usu_id'];
$nivel_id = $resultado['nivel_id'];
$aluno_nome = $resultado['usu_nome'];
$usu_codigo = $resultado['usu_codigo'];
$professor_id = $_SESSION['UsuarioID'];



$inserir_conexao = "INSERT INTO conexao(professor_id, aluno_id, aluno_nome) VALUES ($professor_id,$aluno_id, '$aluno_nome' )";




if($count == 0){


    echo "<script language='javascript' type='text/javascript'>
            Swal.fire({
                title: 'Erro',
                text: 'O codigo inserido é inexistente.',
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#ffaa00',
                background: '#f7f6ff',
              }).then(function() {
                window.location = 'confcod.php';
            });
            </script>";
         

} else {

  $final = mysqli_query($conn, $inserir_conexao);
  echo "<script language='javascript' type='text/javascript'>
            Swal.fire({
                title: 'Tudo certo!',
                text: 'Aluno adicionado com sucesso.',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#ffaa00',
                background: '#f7f6ff',
              }).then(function() {
                window.location = 'meus_alunos.php';
            });
            </script>";
  
}



?>