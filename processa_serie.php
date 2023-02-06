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
include_once("processo_alunos.php");
session_start();



$aluno_idade = $_SESSION['alunoIdade'];

$hoje = date("d/m/Y");

$aluno_sexo == $_SESSION['sexoAluno'];
$conexaoid = $_SESSION['conexaoId'];
$aluno_id = $_SESSION['idAluno'];

$serieNome = $_POST['serieNome'];
$nome = $_POST['nome'];
$series = $_POST['series'];
$repeticoes = $_POST['repeticoes'];
$intervalo = $_POST['intervalo'];
$obs = $_POST['obs'];
echo $aluno_id;


$sqlSerie = "INSERT INTO serie(serie_nome, serie_data, conexao_id, aluno_id) VALUES('$serieNome', '$hoje', '$conexaoid', '$aluno_id')";
$queryserie = mysqli_query($conn, $sqlSerie);

$pesquisa = "SELECT serie_id FROM serie WHERE serie_nome = '$serieNome'";
$queryPesquisa = mysqli_query($conn, $pesquisa);
$resultado = mysqli_fetch_assoc($queryPesquisa);

$serieid = $resultado['serie_id'];

$sqlaaa = "INSERT INTO exercicio(exe_nome, serie_id) VALUES ('a', '$serieid')";
mysqli_query($conn, $sqlaaa);

for ($i = 0; $i < count($nome); $i++) {
    $sqlExercicio = "INSERT INTO exercicio(exe_nome, exe_serie, exe_repeticao, exe_intervalo, exe_obs, serie_id) VALUES('$nome[$i]', '$series[$i]', '$repeticoes[$i]', '$intervalo[$i]', '$obs[$i]', '$serieid')";
    $queryExercicio = mysqli_query($conn, $sqlExercicio);
}


if (mysqli_affected_rows($conn) != 0) {
    echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
            title: 'Tudo certo!',
            text: 'Série cadastrada com sucesso!',
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = 'serie.php';
        });
        </script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
             title: 'Ops...',
            text: 'Houve algum erro, Série não foi cadastrada',
            icon: 'warning',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = 'serie.php';
        });
        </script>";
}
//<!-Fim Tratamento de erros-!>






?>