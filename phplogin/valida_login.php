<?php

session_start();
include_once("../conexao.php");

// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
if (!empty($_POST) and (empty($_POST['usuario']) or empty($_POST['senha']))) {
    header("Location: ../login.php");
    exit;
}




$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


// Valida��o do usu�rio/senha digitados
$sql = "SELECT usu_id, usu_usuario, usu_nome, nivel_id, usu_codigo FROM usuarios WHERE usu_usuario like binary '$usuario' AND usu_senha like binary '$senha' AND usu_ativo = 1 LIMIT 1";
$query = mysqli_query($conn, $sql);
$usuario_autenticado = false;

if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
    header('Location:../login.php?login=erro');
} else {
    // Salva os dados encontados na vari�vel $resultado
    $resultado = mysqli_fetch_assoc($query);

    // Se a sess�o n�o existir, inicia uma
    if (!isset($_SESSION)) session_start();

    // Salva os dados encontrados na sess�o
    $_SESSION['UsuarioID'] = $resultado['usu_id'];
    $_SESSION['UsuarioUsuario'] = $resultado['usu_usuario'];
    $_SESSION['UsuarioNome'] = $resultado['usu_nome'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel_id'];
    $_SESSION['UsuarioCodigo'] = $resultado['usu_codigo'];
    $usuario_autenticado = true;
}

//enviar para a pagina

if ($usuario_autenticado == true) {
    echo 'Usuário Autenticado';
    $_SESSION['autenticado'] = 'sim';
    if ($_SESSION['UsuarioNivel'] == 1) {
        header('Location:../inicioAluno.php');
    }
    if ($_SESSION['UsuarioNivel'] == 2) {
        header('Location:../meus_alunos.php');
    }if ($_SESSION['UsuarioNivel'] == 3) {
        header('Location:../homenv3.php');
    }
} else {
    $_SESSION['autenticado'] = 'nao';
    header('Location:../login.php?login=erro');
}
