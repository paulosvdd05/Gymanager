<?php
require_once "phplogin/validador_acesso.php";
include_once("conexao.php");
include_once("foto_user.php");
error_reporting(0);
include_once("processo_alunos.php");


$usuCodigo = $_SESSION['UsuarioCodigo'];


$_SESSION['alunoIdade'] = $aluno_idade;




if ($total == 1) {
    $perfil = $arquivo['arq_path'];
} else {
    $perfil = 'img\person.png';
}



?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Meus Alunos • GYMANAGER</title>

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
            <a class="none"></a>
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
                        <a class="nav-link font-itens mt-3" href="config.php"><i class="fa-solid fa-gear"></i> Configurações</a>
                    </li>
            </div>
        </div>
    </nav>


    <div class="container my-5">
        <div class="row">

            <div class="col-12">
                <h3 class="main-title">Meus Alunos</h3>
            </div>

            <div class="col-12">
                <!-- Professor -->
                <!--Selecionar Aluno-->
                <div class="select-box">

                    <div class="options-container">

                        <?php
                        //gerar opcao
                        while ($r = mysqli_fetch_array($qry)) {

                            $option = '<form action="meus_alunos.php" method="post">';
                            $option .= '<input type="hidden" name="ID" value="' . $r[$fields[1]] . '">';
                            $option .= ' <div class="option">
                     <input type="radio" class="radio" id="' . $r[$fields[1]] . '" name="id" />';


                            $option .= '<button id="btn_form" class="bttra w-100 text-start" <label for="' . $r[$fields[1]] . '">' . $r[$fields[2]] . '</label></button>';

                            $option .= '</label></div></form>';








                            echo $option;
                        }


                        ?>


                    </div>

                    <div class="selected">
                        Selecionar Aluno
                    </div>

                    <div class="search-box">
                        <input type="text" placeholder="Escreva aqui..." />
                    </div>

                </div><br>
                <?php




                ?>




            </div>

            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <img src="<?php echo $perfil; ?>" id="person-img" class="person-open mb-3">
                </div>
                <div class="col-md-8 col-xs-12 text-center">
                    <div class="aluno">
                        <br>
                        <h1 class="main-proflie"><strong><?php echo $aluno_nome ?></strong></h1>
                        <hr><br>
                        
                        <h3><?php echo $aluno_idade ?></h3>
                        <h3><?php echo $aluno_cidade . " - " . $aluno_estado ?></h3>
                        <h3><?php echo $aluno_academia ?></h3><br>
                        <div class="mb-3">
                            <?php echo $botao1; ?><?php echo $botao2; ?>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/selectbox.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>

