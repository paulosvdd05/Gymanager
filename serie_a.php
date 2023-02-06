<?php

require_once "phplogin/validador_acesso.php";
include_once("conexao.php");
error_reporting(0);
include_once("processo_alunos.php");


$conexaoid = $_SESSION['conexaoId'];
$usuCodigo = $_SESSION['UsuarioCodigo'];
$aluno_id = $_SESSION['idAluno'];



$sql = "SELECT serie_id, serie_nome, serie_data FROM serie WHERE serie.aluno_id = '$aluno_id'";

$consulta = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$numero_campo = @mysqli_num_fields($consulta); //Obtém o número de campos do resultado
$campo[] = array();
if ($numero_campo > 0) {
  for ($i = 0; $i < $numero_campo; $i++) { //Pega o nome dos campos
    $campo[] = mysqli_fetch_field_direct($consulta, $i)->name;
  }
}







?>

<html>

<head>
  <meta charset="utf-8" />
  <title><?php echo $_SESSION['nomeAluno']; ?> • GYMANAGER</title>

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
      <a href="inicioAluno.php" class="voltar btn fa-solid fa-arrow-left"></a>
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
            <a class="nav-link font-itens" aria-current="page" href="inicioAluno.php"><i class="fa-solid fa-user"></i>Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-itens active mt-3" aria-current="page" href="serie_a.php"><i class="fa-solid fa-dumbbell"></i> Série</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-itens mt-3" href="avaliacao_a.php"><i class="fa-solid fa-list-check"></i> Avaliação</a>
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
            <a class="nav-link font-itens mt-3" href="config_a.php"><i class="fa-solid fa-gear"></i> Configurações</a>
          </li>
      </div>
    </div>
  </nav>


  <div class="container my-5">
    <div class="row">

      <div class="col-md-12">
        <h3 class="main-title">Séries</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 text-center mb-4">
        <img src="<?php echo $_SESSION['perfil']; ?>" class="person-open mb-3">
        <hr>
        <h2 class="main-proflie"><?php echo $_SESSION['nomeAluno']; ?></h2>
      </div>


      <div class="col-md-8 col-xs-12">

        <!--Tabela com as buscas-->
        <?php
        //Montando o cabeçalho da tabela
        $table = '<table class="table table-inverse theader"> <tr>';


        $table .= '<th></th><th>NOME:</th><th>DATA:</th>';


        //Montando o corpo da tabela
        $table .= '<tbody class="tbody">';
        while ($r = mysqli_fetch_array($consulta)) {
          $table .= '<tr>';
          $table .= '<td></td>';

          $table .= '<td>' . $r[$campo[2]] . '</td>';
          $table .= '<td>' . $r[$campo[3]] . '</td>';

          // Adicionando botão de exclusão
          $table .= '<td><form action="abrirserie_a.php" method="post">';
          $table .= '<input type="hidden" name="idSerie" value="' . $r[$campo[1]] . '">';
          $table .= '<button  class="btn btn-success"><i class="fa-solid fa-arrow-up-right-from-square"></i></button>';
          $table .= '</form></td>';
        }


        //Finalizando a tabela
        $table .= '</tbody></table>';
        echo $r[$campo[2]];


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