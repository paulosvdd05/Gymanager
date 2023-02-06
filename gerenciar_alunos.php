<?php
require_once "phplogin/validador_acesso.php";
error_reporting(E_ERROR | E_PARSE);
include_once("foto_user.php");
include_once("conexao.php");

$professor_id = $_SESSION['UsuarioID'];


$sql = "SELECT * FROM conexao WHERE professor_id = '$professor_id' AND  aluno_id <> 72 ORDER BY aluno_nome ASC";
$nome = @$_POST['NOME'];

if (!is_null($nome) && !empty($nome))
    $sql = "SELECT * FROM conexao WHERE professor_id = '$professor_id'   AND aluno_nome LIKE '%" . $nome . "%' ORDER BY aluno_nome ASC";

$qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($qry);
$num_fields = @mysqli_num_fields($qry); //Obtém o número de campos do resultado
$fields[] = array();
if ($num_fields > 0) {
    for ($i = 0; $i < $num_fields; $i++) { //Pega o nome dos campos
        $fields[] = mysqli_fetch_field_direct($qry, $i)->name;
    }
}


?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Gerenciar Alunos • GYMANAGER</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Estilo -->
    <link rel="stylesheet" href="css/style_selectbox.css" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="./img/halter.ico">


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
                        <a class="nav-link font-itens" aria-current="page" href="meus_alunos.php"><i class="fa-solid fa-dumbbell"></i> Meus Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-itens active mt-3" href="gerenciar_alunos.php"><i class="fa-solid fa-list-check"></i> Gerenciar Alunos</a>
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

            <div class="col-md-12">
                <h3 class="main-title">Consulta de Alunos</h3>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-7">
                <form method="post">
                    <input class="form-control form-itens" id="NOME" placeholder="Nome do aluno" name="NOME">
                    <br>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">

            <button type="submit" class="botao fa-solid fa-magnifying-glass"></button>
            <button href="gerenciar_alunos.php" style="margin-left: 10px;" class="botao fa-solid fa-circle-xmark"></button>

            </form>
        </div>

        </form>




    </div>
    <!--Filtro de busca-->

    <div class="container">
        <div class="col-7 mx-auto">
            <?php
            if (!is_null($nome) && !empty($nome)) {
                if ($count > 0) {
                    echo 'Encontrado registros com o nome ' . '<b>' . $nome;
                } else {
                    echo 'Nenhum registro foi encontrado com o nome ' . '<b>' . $nome;
                }
            }
            ?>
            <!--Tabela com as buscas-->
            <?php
            //Montando o cabeçalho da tabela
            $table = '<table class="table table-inverse theader"> <tr>';


            $table .= '<th></th><th>NOME:</th><th></th>';


            //Montando o corpo da tabela
            $table .= '<tbody class="tbody">';
            while ($r = mysqli_fetch_array($qry)) {
                $table .= '<tr>';
                $table .= '<td></td>';

                $table .= '<td><div id="nome">' . $r[$fields[4]] . '</td>';







                $table .= '<td><form action="removeraluno.php" method="post">';
                $table .= '<input type="hidden" name="ID" value="' . $r[$fields[3]] . '">';
                $table .= '<button  class="btn btn-danger" id="btn-size"><i class="fa-solid fa-trash"></i></button>';
                $table .= '</form></td>';
            }


            //Finalizando a tabela
            $table .= '</tbody></table>';
            echo $r[$fields[2]];

            //Imprimindo a tabela
            echo $table;


            ?>
        </div>
    </div>

    <div class="position-relative mt-5">
        <div class="position-absolute top-50 start-50 translate-middle">
            <form action="confcod.php">
                <button type="submit" class="btn btn-success" id="btn-size">Adicionar Aluno <i class="fa-solid fa-plus"></i></button>
            </form>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>