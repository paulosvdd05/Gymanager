<?php
session_start();
error_reporting(0);

$id = $_POST['ID'];

$sql = "SELECT usu_id, usu_usuario, usu_nome, usu_data, usu_estado, usu_academia, usu_cidade, usu_sexo, nivel_id FROM usuarios WHERE usu_id =
'$id'";
$query = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($query);

//calculo de idade
$timediff = "Select TIMESTAMPDIFF(YEAR, usu_data,NOW()) as idade from usuarios WHERE usu_id = '$id'";
$query2 = mysqli_query($conn, $timediff);
$idade = mysqli_fetch_assoc($query2);
$professor_id = $_SESSION['UsuarioID'];
$remover .= '<td><form action="removeraluno.php" method="post">';






//fim calculo de idade

$total = mysqli_num_rows($query);



if ($total == 1) {

    $aluno_id = $resultado['usu_id'];
    $nivel_id = $resultado['nivel_id'];
    $aluno_nome = $resultado['usu_nome'];
    $aluno_estado = $resultado['usu_estado'];
    $aluno_cidade = $resultado['usu_cidade'];
    $aluno_academia = $resultado['usu_academia'];
    $aluno_sexo = $resultado['usu_sexo'];
    $aluno_idade = $idade['idade']." Anos";

    $remover .= '<input type="hidden" name="ID" value="' . $id . '">';
    $remover .= '<button  class="btn btn-danger" id="btn-size"><i class="fa-solid fa-trash"></i></button>';
    $remover .= '</form></td>';


    $botao1 = '<a href="avaliacao.php" class="avalia">Avaliações</a>';
    $botao2 = '<a href="serie.php" class="avalia" style="margin-left: 15px;">Séries</a>';
    //conexaoid
    $sqlcone = "SELECT aluno_id, conexao_id FROM conexao WHERE aluno_id = $aluno_id AND professor_id = $professor_id";
    $querycone = mysqli_query($conn, $sqlcone);
    $resultadocone = mysqli_fetch_assoc($querycone);
    $_SESSION['conexaoId'] = $resultadocone['conexao_id'];
    $_SESSION['idAluno'] = $resultado['usu_id'];
    $_SESSION['nomeAluno'] = $resultado['usu_nome'];
    $_SESSION['sexoAluno'] = $resultado['usu_sexo'];
    $pesqfoto = mysqli_query($conn, "SELECT * FROM arquivos WHERE usu_id = $aluno_id");
    $arquivo = mysqli_fetch_assoc($pesqfoto);


    $counta = mysqli_num_rows($pesqfoto);

    if ($counta >= 1) {

        $perfil = $arquivo['arq_path'];
        $_SESSION['perfil'] = $perfil;
    } else {
        $perfil = "img/person.png";
        $_SESSION['perfil'] = $perfil;
    }


    $_SESSION['perfil'] = $perfil;
} else {
    $aluno_id = 0;
    $nivel_id = 0;
    $aluno_nome = "Nome";
    $aluno_estado = "Estado";
    $aluno_cidade = "Cidade";
    $aluno_academia = "Academia";
    $aluno_idade = "Idade";
    $botao1 = '';
    $botao2 = '';
}
















$sql = "SELECT aluno_id, aluno_nome, conexao_id FROM conexao WHERE conexao.professor_id ='$professor_id ' ORDER BY aluno_nome ASC";

$qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($qry);
$resultado3 = mysqli_fetch_assoc($qry);
$num_fields =   mysqli_num_fields($qry); //Obtém o número de campos do resultado
$fields[] = array();
if ($num_fields > 0) {
    for ($i = 0; $i < $num_fields; $i++) { //Pega o nome dos campos
        $fields[] = mysqli_fetch_field_direct($qry, $i)->name;
    }
}
