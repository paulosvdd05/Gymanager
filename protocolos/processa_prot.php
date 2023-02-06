<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo</title>
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
include_once("../conexao.php");
include_once("../processo_alunos.php");
error_reporting(0);
session_start();


$aluno_idade = $_SESSION['alunoIdade'];

$hoje = date("d/m/Y");

$aluno_sexo == $_SESSION['sexoAluno'];
$aluno_id = $_SESSION['idAluno'];
$conexaoid = $_SESSION['conexaoId'];

$nome = $_POST['nome'];
$peso = str_replace(",",".",$_POST['peso']);
$altura = $_POST['altura'];
$gc = $_POST['gc'];
$coxa = str_replace(",",".",$_POST['coxa']);
$peito = str_replace(",",".",$_POST['peito']);
$triceps = str_replace(",",".",$_POST['triceps']);
$axilarmedio = str_replace(",",".",$_POST['axilarmedio']);
$abdominal = str_replace(",",".",$_POST['abdominal']);
$subescapular = str_replace(",",".",$_POST['subescapular']);
$suprailiaca = str_replace(",",".",$_POST['suprailiaca']);
$taxamuscular = $_POST['taxamuscular'];
$massaldgordura = $_POST['massaldgordura'];
$gordurasub = $_POST['gordurasub'];
$gorduravisce = $_POST['gorduravisce'];
$aguacorporal = $_POST['aguacorporal'];
$massamuscular = $_POST['massamuscular'];
$massaossea = $_POST['massaossea'];
$tmb = $_POST['tmb'];
$idademetabolica = $_POST['idademetabolica'];
$torax = $_POST['torax'];
$cintura = $_POST['cintura'];
$abdomen = $_POST['abdomen'];
$quadril = $_POST['quadril'];
$brd = $_POST['brd'];
$bre = $_POST['bre'];
$bcd = $_POST['bcd'];
$bce = $_POST['bce'];
$cd = $_POST['cd'];
$ce = $_POST['ce'];
$pd = $_POST['pd'];
$pe = $_POST['pe'];
$imcn = $peso/pow(($altura/100),2);
$imc = number_format($imcn, 1, ',', ' ');

echo $aluno_sexo;
//protocolo
if ($nome == 'Pollock3') {
    $somadobras3 = $peito + $abdominal + $coxa;
}   
if ($nome == 'Pollock7') {
    $somadobras7 = $peito + $coxa + $abdominal + $triceps + $axilarmedio + $subescapular + $suprailiaca;
}  



if ($aluno_sexo = 'masculino') {
    $tmb =  66+ (13.7*$peso) + (5*$altura) - (6.8*$aluno_idade);
    $dc3 = 1.10938-(0.0008267 * $somadobras3) + (0.0000016 * pow($somadobras3,2)) - (0.0002574 * $aluno_idade);
    $dc7 = 1.112 - (0.00043499 * $somadobras7) + (0.00000055 *  pow($somadobras7,2) ) - (0.00028826 * $aluno_idade);    
}else{
    $tmb =  665 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $aluno_idade);
    $dc3 = 1.0994921 - (0.0009929 * $somadobras3) + (0.0000023 * pow($somadobras3,2)) - (0.0001392 * $aluno_idade);
    $dc7 = 1.097 - (0.00046971 * $somadobras3) + (0.00000056 * pow($somadobras3,2)) - (0.00012828 * $aluno_idade);
}



    if ($nome == 'Pollock3') {
        $gc = (495/$dc3) - 450;
    }   
    if ($nome == 'Pollock7') {
        $gc = ((495/$dc7) - 450)*100;
    }  
    
    




$result_usuario = "INSERT INTO avaliacao(ava_nome, ava_idade, ava_peso, ava_altura, ava_data, ava_imc, ava_gc,  ava_coxa, ava_peito, ava_triceps, ava_axilarmedio, ava_abdominal, ava_subescapular, ava_suprailiaca, ava_taxamuscular, ava_massaldgordura, ava_gordurasub, ava_gorduravisce, ava_aguacorporal, ava_massamuscular, ava_massaossea, ava_tmb, ava_idademetabolica,
ava_ctorax, ava_ccintura, ava_cabdomen, ava_cquadril, ava_cbrd,ava_cbre, ava_cbcd, ava_cbce, ava_ccoxad, ava_ccoxae, ava_cpanturrilhad, ava_cpanturrilhae, avaliacao.conexao_id, avaliacao.aluno_id) VALUES ('$nome', '$aluno_idade', '$peso', '$altura', '$hoje', '$imc', '$gc', '$coxa','$peito', '$triceps', '$axilarmedio', '$abdominal', '$subescapular', '$suprailiaca','$taxamuscular','$massaldgordura','$gordurasub','$gorduravisce','$aguacorporal','$massamuscular','$massaossea','$tmb','$idademetabolica',
'$torax','$cintura','$abdomen','$quadril','$brd','$bre','$bcd','$bce','$cd','$ce','$pd','$pe', '$conexaoid', '$aluno_id' )";
$resultado_usuario = mysqli_query($conn, $result_usuario);




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
                window.location = '../avaliacao.php';
        });
        </script>";
} else {
    echo "<script language='javascript' type='text/javascript'>
        Swal.fire({
             title: 'Ops...',
            text: 'Houve algum erro, usuário não foi cadastrado',
            icon: 'warning',
            confirmButtonText: 'OK',
            confirmButtonColor: '#ffaa00',
            background: '#f7f6ff'
            }).then(function() {
                window.location = '../avaliacao.php';
        });
        </script>";
}
//<!-Fim Tratamento de erros-!>


?>