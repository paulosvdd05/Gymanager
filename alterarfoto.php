<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo</title>
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
include_once("foto_user.php");
error_reporting(0);
include_once("processo_alunos.php");

$usuario_usuario = $_SESSION['UsuarioUsuario'];
$usualt = $_POST['usuario'];
//foto
$sq = "SELECT usu_id FROM usuarios WHERE usu_usuario like binary '$usuario_usuario'";
$query = mysqli_query($conn, $sq);
$resultado = mysqli_fetch_assoc($query);
$usu_id = $resultado['usu_id'];
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));



    $path = "arquivos/" . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);

    if ($extensao != "jpg" && $extensao != "png" && $extensao != "png" && $extensao != "gif" && $extensao != "webp" && $extensao != "svg" && $extensao != "") {
        // Mensagem de erro quando imagem nao aceita
        header('Location:../cadastro.php?error=imgNotAccepted');
        die;
    }

    if ($arquivo['size'] > 3097152) {
        // Mensagem de erro quando imagem nao aceita
        header('Location:../cadastro.php?error=imgTooBig');
        die;
    }

//nomeusuario
$sqlusu = "UPDATE usuarios set usu_usuario = '$usualt' WHERE usu_id = $usu_id ";
$queryusu = mysqli_query($conn, $sqlusu);

$sqlatt = "SELECT* FROM usuarios WHERE usu_id = '$usu_id'";
$qryatt = mysqli_query($conn, $sqlatt);
$resultatt = mysqli_fetch_assoc($qryatt);
echo $resultatt['usu_id'];


    if ($deu_certo) {
        $sqldel = "DELETE FROM arquivos WHERE usu_id = '$usu_id'";
        mysqli_query($conn, $sqldel);
        $unlink = @unlink($arquivo['name']);
        $sql = "INSERT INTO arquivos (arq_nome, arq_path, usu_id) VALUES('$nomeDoArquivo', '$path', '$usu_id')";
        mysqli_query($conn, $sql);
        echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
            title: 'Informações alteradas com sucesso!',
            text: 'por favor, insira o login novamente',
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = 'login.php';
        });
        </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
            title: 'Informações alteradas com sucesso!',
            text: 'por favor, insira o login novamente',
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = 'login.php';
        });
        </script>";
    }
}
?>