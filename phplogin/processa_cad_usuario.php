<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <!-- Estilos -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="../css/styles_login.css">
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
include_once("../conexao.php");
$nome_usuario = $_POST['nome'];
$usuario_usuario = $_POST['usuario'];
$senha_usuario = $_POST['senha'];
$consenha_usuario = $_POST['consenha'];
$email_usuario = $_POST['email'];
$nivel_usuario = $_POST['nivel'];
$data_usuario = $_POST['data'];
$estado_usuario = $_POST['estado'];
$cidade_usuario = $_POST['cidade'];
$academia_usuario = $_POST['academia'];
$sexo_usuario = $_POST['sexo'];
//<!-Tratamento de erros-!>
//variaveis para ver se o nome de usuario ja existe.
$pesquisarusuario = "SELECT usu_id FROM usuarios WHERE usu_usuario like binary '$usuario_usuario'";
$pesquisaemail = "SELECT usu_id FROM usuarios WHERE usu_email like binary '$email_usuario'";
$query1 = mysqli_query($conn, $pesquisarusuario);
$query2 = mysqli_query($conn, $pesquisaemail);
if (empty($nome_usuario) or empty($usuario_usuario) or empty($senha_usuario) or empty($email_usuario) or empty($nivel_usuario)) {
    header('Location:../cadastro.php?error=emptyFields');
}
if ($senha_usuario != $consenha_usuario) {
    // Mensagem de erro quando o nome de usuarios já existe
    header('Location:../cadastro.php?error=incorrectPassword');
    die;
}

if (mysqli_num_rows($query1) >= 1) {
    // Mensagem de erro quando o nome de usuarios já existe
    header('Location:../cadastro.php?error=existingUser');
    die;
}
if (mysqli_num_rows($query2) >= 1) {
    // Mensagem de erro quando o nome de usuarios já existe
    header('Location:../cadastro.php?error=existingEmail');
    die;
}


$result_usuario = "INSERT INTO usuarios(usu_nome, usu_usuario, usu_senha, usu_email, usu_data, usu_estado, usu_cidade, usu_academia, usu_sexo, usu_codigo,  nivel_id) VALUES ('$nome_usuario', '$usuario_usuario','$senha_usuario', '$email_usuario', '$data_usuario','$estado_usuario','$cidade_usuario','$academia_usuario','$sexo_usuario' , SUBSTR(MD5(RAND()), 1, 6),'$nivel_usuario')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//foto
$sq = "SELECT usu_id FROM usuarios WHERE usu_usuario like binary '$usuario_usuario'";
$query = mysqli_query($conn, $sq);
$resultado = mysqli_fetch_assoc($query);
$usu_id = $resultado['usu_id'];
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $pasta = "../arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));



    $path = "arquivos/" . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);

    if ($extensao != "jpg" && $extensao != "png" && $extensao != "png" && $extensao != "gif" && $extensao != "webp" && $extensao != "svg"&& $extensao != "" ) {
        // Mensagem de erro quando imagem nao aceita
        header('Location:../cadastro.php?error=imgNotAccepted');
        die;
    }

    if ($arquivo['size'] > 3097152) {
        // Mensagem de erro quando imagem nao aceita
        header('Location:../cadastro.php?error=imgTooBig');
        die;
    }


    if ($deu_certo) {
        $sql = "INSERT INTO arquivos (arq_nome, arq_path, usu_id) VALUES('$nomeDoArquivo', '$path', '$usu_id')";
        mysqli_query($conn, $sql);
        //echo "<p>Arquivo enviado com sucesso!</p>";
    } else {
        
    }
}

if ($nivel_usuario == 2) {
    $sqlaaa = "INSERT INTO conexao(professor_id, aluno_id) VALUES ($usu_id, 72);";
    mysqli_query($conn, $sqlaaa);
}





if (mysqli_affected_rows($conn) != 0) {
    echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
            title: 'Tudo certo!',
            text: 'Usuário cadastrado com sucesso!',
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = '../login.php';
        });</script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
             title: 'Ops...',
            text: 'Houve algum erro, usuario não foi cadastrado',
            icon: 'warning',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = '../login.php';
        });</script>";
}
//<!-Fim Tratamento de erros-!>


?>