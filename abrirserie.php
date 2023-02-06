<?php
error_reporting(0);
require_once "phplogin/validador_acesso.php";
include_once("conexao.php");

include_once("processo_alunos.php");

$conexaoid = $_SESSION['conexaoId'];
$serie_id = $_POST['idSerie'];

$sqlSerie = "SELECT * FROM serie WHERE serie_id = '$serie_id' ";
$querySerie = mysqli_query($conn, $sqlSerie);
$resultadoSerie = mysqli_fetch_assoc($querySerie);

$sqlExercicio = "SELECT * FROM exercicio WHERE serie_id = '$serie_id' ";
$queryExercicio = mysqli_query($conn, $sqlExercicio);
$resultadoExercicio = mysqli_fetch_assoc($queryExercicio);



$count = mysqli_num_rows($queryExercicio);
$nfields = @mysqli_num_fields($queryExercicio); //Obtém o número de campos do resultado
$f[] = array();
if ($nfields > -1) {
    for ($i = 0; $i < $nfields; $i++) { //Pega o nome dos campos
        $f[] = mysqli_fetch_field_direct($queryExercicio, $i)->name;
    }
}










?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Série • GYMANAGER</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Estilo -->
    <link rel="stylesheet" href="css/style_selectbox.css" />
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="./img/halter.ico">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>



</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="serie.php" class="voltar btn fa-solid fa-arrow-left"></a>
            <img src="img/logo.png" class="card-img-top" id="logo" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="offcanvas offcanvas-end text-bg-dark" style="width: 300px!important;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <img src="img/logo3.png" class="card-img-in" alt="logo-in">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mt-5">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link font-itens active" aria-current="page" href="meus_alunos.php"><i class="fa-solid fa-dumbbell"></i> Meus Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-itens mt-3" href="gerenciar_alunos.php"><i class="fa-solid fa-list-check"></i> Gerenciar Alunos</a>
                    </li>
                    <li class="nav-item profile-box">
                        <div class="profile">
                            <div class="profile-details">
                                <img src="<?php echo $_SESSION['perfilU']; ?>" class="profile-img" alt="profile">
                                <h4 class="profile-name"><?php echo $_SESSION['UsuarioUsuario'] ?></h4>
                                <a href="phplogin/logoff.php" class="sair btn fa-solid fa-arrow-right-from-bracket"></a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-itens mt-3" href=""><i class="fa-solid fa-gear"></i> Configurações</a>
                    </li>
            </div>
        </div>
    </nav>


    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="main-title"><?php echo $resultadoSerie['serie_nome']; ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <img src="<?php echo $_SESSION['perfil']; ?>" class="person-open mb-3">
                <hr>
                <h2 class="main-proflie"><?php echo $_SESSION['nomeAluno']; ?></h2>
            </div>

            <div class="col-md-8 col-xs-12">

                <?php

                $table = '<table class="table table-inverse theader"> <tr>';


                $table .= '<th></th><th><div class="serie">EXERCÍCIO:</div></th><th><div class="serie">SÉRIES:</div></th><th><div class="serie">REPETIÇÕES:</div></th><th><div class="serie">INTERVALO:</div></th><th><div class="serie">*OBSERVAÇÃO:</div></th>';


                //Montando o corpo da tabela
                $table .= '<tbody class="tbody">';
                while ($r = mysqli_fetch_array($queryExercicio)) {
                    $table .= '<tr>';
                    $table .= '<td></td>';

                    $table .= '<td>' . $r[$f[2]] . '</td>';
                    $table .= '<td><div id="nome">' . $r[$f[3]] . '</td>';
                    $table .= '<td><div id="serie">' . $r[$f[4]] . '</div></td>';
                    $table .= '<td><div id="repeticao">' . $r[$f[5]] . ' seg</td>';
                    $table .= '<td><div id="obs">' . $r[$f[6]] . '</td>';
                }

                //Finalizando a tabela
                $table .= '</tbody></table>';
                echo $r[$fields[2]];

                //Imprimindo a tabela
                echo $table;

                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>