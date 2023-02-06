<?php
require_once "phplogin/validador_acesso.php";
include_once("conexao.php");
error_reporting(0);
include_once("processo_alunos.php");

$conexaoid = $_SESSION['conexaoId'];
$ava_id = $_POST['idAva'];

$sql = "SELECT * FROM avaliacao WHERE ava_id = '$ava_id' ";
$query = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($query);








?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Avaliação • GYMANAGER</title>

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
            <a href="avaliacao.php" class="voltar btn fa-solid fa-arrow-left"></a>
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
                <h3 class="main-title"><?php echo $resultado['ava_nome']; ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <img src="<?php echo $_SESSION['perfil']; ?>" class="person-open mb-3">
                <hr>
                <h2 class="main-proflie"><?php echo $_SESSION['nomeAluno']; ?></h2>
            </div>

            <div class="col-md-8 col-xs-12 mb-5">

                <div class="row">
                    <div class="aluno">

                        <div class="col-12 ">

                            <?php

                            if ($resultado['ava_nome'] == 'Bioimpedancia') {
                                echo '<br>
                                <div class="box-avalia">

                                <div class="info-avalia">
                                <h3 class="title-avalia">Peso: <hr class="line"></h3>
                                <h3 class="text-avalia" > ' . $resultado['ava_peso'] . ' kg</h3>
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Altura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_altura'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">IMC: <hr class="line"></h3> 
                                <h3 class="text-avalia"> ' . $resultado['ava_imc'] . ' </h3> 
                                </div>
                                
                                <div class="info-avalia">
                                <h3 class="title-avalia">Gordura Corporal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_gc'] . ' %</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Taxa Muscular: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_taxamuscular'] . ' %</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Massa Livre de Gordura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_massaldgordura'] . ' kg</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Gordura Subcutânea: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_gordurasub'] . ' %</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Gordura Visceral: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_gorduravisce'] . ' </h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Água Corporal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_aguacorporal'] . ' %</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Massa Muscular: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_massamuscular'] . ' kg</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Massa Óssea: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_massaossea'] . ' kg</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Taxa Metabólica Basal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_tmb'] . ' Kcal</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Idade Metabólica: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_idademetabolica'] . ' anos</h3> 
                                </div>
                                <br>

                                <h1 class="fs-2 text-center" style="color: gray;">Circunferência</h1><br>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Tórax: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ctorax'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Cintura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccintura'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Abdômen: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cabdomen'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Quadril: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cquadril'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Esquerdo(Relaxado): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbre'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Direito(Relaxado): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbrd'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Esquerdo(Contraído): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbce'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Direito(Contraído): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbcd'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa Esquerda: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccoxae'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa Direita: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccoxad'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Panturrilha Esquerda: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cpanturrilhae'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Panturrilha Direita: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cpanturrilhad'] . ' cm</h3> 
                                </div>

                                </div>
                                <br>';
                            }
                            if ($resultado['ava_nome'] == 'Pollock3') {
                                echo '<br>
                                <div class="box-avalia">

                                <div class="info-avalia">
                                <h3 class="title-avalia">Peso: <hr class="line"></h3>
                                <h3 class="text-avalia" > ' . $resultado['ava_peso'] . ' kg</h3>
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Altura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_altura'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">IMC: <hr class="line"></h3> 
                                <h3 class="text-avalia"> ' . $resultado['ava_imc'] . ' </h3> 
                                </div>
                                
                                <div class="info-avalia">
                                <h3 class="title-avalia">Gordura Corporal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_gc'] . ' %</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Taxa Metabólica Basal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_tmb'] . ' Kcal</h3> 
                                </div>
                                <br>

                                <h1 class="fs-2 text-center" style="color: gray;">Dobras Cutâneas</h1> <br>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_coxa'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Peitoral: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_peito'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Abdômen: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_abdominal'] . ' mm</h3> 
                                </div>
                                <br>

                                <h1 class="fs-2 text-center" style="color: gray;">Circunferência</h1><br>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Tórax: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ctorax'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Cintura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccintura'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Abdômen: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cabdomen'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Quadril: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cquadril'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Esquerdo(Relaxado): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbre'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Direito(Relaxado): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbrd'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Esquerdo(Contraído): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbce'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Direito(Contraído): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbcd'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa Esquerda: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccoxae'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa Direita: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccoxad'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Panturrilha Esquerda: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cpanturrilhae'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Panturrilha Direita: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cpanturrilhad'] . ' cm</h3> 
                                </div>

                                </div>
                                <br>';
                            }
                            if ($resultado['ava_nome'] == 'Pollock7') {
                                echo '<br>
                                <div class="box-avalia">

                                <div class="info-avalia">
                                <h3 class="title-avalia">Peso: <hr class="line"></h3>
                                <h3 class="text-avalia" > ' . $resultado['ava_peso'] . ' kg</h3>
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Altura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_altura'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">IMC: <hr class="line"></h3> 
                                <h3 class="text-avalia"> ' . $resultado['ava_imc'] . ' </h3> 
                                </div>
                                
                                <div class="info-avalia">
                                <h3 class="title-avalia">Gordura Corporal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_gc'] . ' %</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Taxa Metabólica Basal: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_tmb'] . ' Kcal</h3> 
                                </div>
                                <br>

                                <h1 class="fs-2 text-center" style="color: gray;">Dobras Cutâneas</h1> <br>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_coxa'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Peitoral: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_peito'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Tríceps: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_triceps'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Axilar Médio: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_axilarmedio'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Abdômen: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_abdominal'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Subescapular: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_subescapular'] . ' mm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Suprailíaca: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_suprailiaca'] . ' mm</h3> 
                                </div>
                                <br>

                                <h1 class="fs-2 text-center" style="color: gray;">Circunferência</h1><br>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Tórax: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ctorax'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Cintura: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccintura'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Abdômen: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cabdomen'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Quadril: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cquadril'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Esquerdo(Relaxado): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbre'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Direito(Relaxado): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbrd'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Esquerdo(Contraído): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbce'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Braço Direito(Contraído): <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cbcd'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa Esquerda: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccoxae'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Coxa Direita: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_ccoxad'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Panturrilha Esquerda: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cpanturrilhae'] . ' cm</h3> 
                                </div>

                                <div class="info-avalia">
                                <h3 class="title-avalia">Panturrilha Direita: <hr class="line"></h3>
                                <h3 class="text-avalia"> ' . $resultado['ava_cpanturrilhad'] . ' cm</h3> 
                                </div>

                                </div>
                                <br>';
                            }

                            ?>



                        </div>
                    </div>
                </div>
            </div>





            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
            </script>
</body>

</html>