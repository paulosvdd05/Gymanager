<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login • GYMANAGER</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_login.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="./img/halter.ico">
</head>

<body>
    <div class="card" style="position: absolute; top: 50%;left: 50%;transform: translate(-50%, -50%)">
        <a href="index.html" class="voltar">Voltar</a>
        <img src="img/logo2.png" class="card-img-top" alt="logo">
        <h3 class="titulo">Login</h3>

        <div class="card-body">
            <form action="phplogin/valida_login.php" method="post">
                <div class="form-group">
                    <input name="usuario" type="text" class="form-control form-itens" placeholder="Usuário">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" id="myInput" class="form-control form-itens" placeholder="Senha">
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class="fa-solid fa-eye"></i>
                        <i id="hide2" class="fa-solid fa-eye-slash"></i>
                    </span>
                    <p class="mostrar">Mostrar senha</p>
                </div>

                <?php
                if (isset($_GET['login']) && ($_GET['login'] == 'erro')) {
                ?>
                    <div class="text-danger">
                        Usuário ou senha inválido(s)
                    </div>
                <?php } ?>

                <?php
                if (isset($_GET['login']) && ($_GET['login'] == 'erro2')) {
                ?>
                    <div class="text-danger">
                        Faça login antes de acessar as páginas protegidas
                    </div>
                <?php } ?>


                <button class=" btn btn-md btn-block botao mt-4" type="submit">Entrar</button>
                <br>
                <div>Não possui uma conta? <a href="cadastro.php" class="outro">Cadastre-se</a></div>
            </form>
        </div>
        <div class="text-center termos"><a href="termos.php" style="color: #ffaa00; font-size:small;" target="_blank"><b>Termos de Uso</b></a></div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            } else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>

</body>

</html>