<?php

error_reporting(0);
include_once("conexao.php");
session_start();


$usuarioID = $_SESSION['UsuarioID'];

$pesqfotoU = mysqli_query($conn, "SELECT * FROM arquivos WHERE usu_id = $usuarioID");
$count = mysqli_num_rows($pesqfotoU);

if ($count > 0) {
    $arquivoU = mysqli_fetch_assoc($pesqfotoU);
    $perfilU = $arquivoU['arq_path'];
    $_SESSION['perfilU'] = $perfilU;
} else {
    $perfilU = "img/person.png";
    $_SESSION['perfilU'] = $perfilU;
}
