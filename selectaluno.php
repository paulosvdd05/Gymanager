<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Erro • GYMANAGER</title>
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




  echo "<script language='javascript' type='text/javascript'>
          Swal.fire({
            title: 'Erro!',
            text: 'Selecione um aluno primeiro',
            icon: 'warning',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
              }).then(function() {
                window.location = 'meus_alunos.php';
            });
            </script>";


?>