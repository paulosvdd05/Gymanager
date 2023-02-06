<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro • GYMANAGER</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_login.css">
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="./img/halter.ico">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card" style="margin-top: 3%; margin-bottom: 3%;">
            <a href="index.html" class="voltar">Voltar</a>
            <img src="img/logo2.png" class="card-img-top" alt="logo">
            <h3 class="titulo">Cadastro</h3>

            <div class="card-body">

                <form method="POST" enctype="multipart/form-data" action="phplogin/processa_cad_usuario.php">
                    <div class="form-group">
                        <input type="text" name="nome" class="form-control form-itens" placeholder="Digite o nome completo" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control form-itens" placeholder="Digite o nome de usuário" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-itens" placeholder="Digite o E-mail" required>
                    </div>

                    <div class="row form-group ml-1">
                        <input type="text" name="cidade" class="form-control form-itens col-7" placeholder="Digite sua cidade" required>
                        <select class="form-control form-itens text-cad col-4 ml-3" name="estado" required>
                            <option value="" disabled selected>Estado</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <select class="form-control form-itens text-cad" name="sexo" required>
                            <option value="" disabled selected>Sexo</option>
                            <option value="masculino">Masculino ♂</option>
                            <option value="feminino">Feminino ♀</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="academia" class="form-control form-itens" placeholder="Digite a sua academia" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="data" class="form-control form-itens textbox-n" placeholder="Digite seu aniversário" onfocus="(this.type='date')" id="date" required>
                    </div>

                    <div class="form-group">
                        <label for="arquivo" class="form-control col-12"><p class="text-cad">Foto de perfil<i class="fa-regular fa-image ml-1"></i></p></label>
                        <input type="file" name="arquivo" id="arquivo">
                    </div>

                    <div class="form-group">
                        <input type="password" name="senha" id="myInput" class="form-control form-itens" placeholder="Digite a senha" required>
                        <input type="password" name="consenha" id="myInput2" class="form-control form-itens mt-2" placeholder="Confirme a senha" required>
                        <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fa-solid fa-eye"></i>
                            <i id="hide2" class="fa-solid fa-eye-slash"></i>
                        </span>
                        <p class="mostrar">Mostrar senha</p>
                    </div>

                    <div class="form-group text-cad my-3 d-flex justify-content-center">
                        <input type="radio" name="nivel" id="aluno" value=1 required />
                        <label for="aluno" class="mt-2 ml-1">Aluno</label>
                        <input type="radio" class="ml-5" name="nivel" id="professor" value=2 required />
                        <label for="professor" class="mt-2 ml-1">Personal</label>
                    </div>

                    <?php
                    if (isset($_GET['error']) && ($_GET['error'] == 'emptyFields')) {
                    ?>
                        <div class="text-danger">
                            Algo deu errado, por favor cadastre todos os campos.
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($_GET['error']) && ($_GET['error'] == 'imgNotAccepted')) {
                    ?>
                        <div class="text-danger">
                            Esse tipo de imagem não é aceito.
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($_GET['error']) && ($_GET['error'] == 'imgTooBig')) {
                    ?>
                        <div class="text-danger">
                            O tamanho da imagem é muito grande.
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($_GET['error']) && ($_GET['error'] == 'existingUser')) {
                    ?>
                        <div class="text-danger">
                            Nome de usuario já existente, por favor insira outro.
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($_GET['error']) && ($_GET['error'] == 'existingEmail')) {
                    ?>
                        <div class="text-danger">
                            Email já existente, por favor insira outro.
                        </div>
                    <?php }
                    ?>
                    <?php
                    if (isset($_GET['error']) && ($_GET['error'] == 'incorrectPassword')) {
                    ?>
                        <div class="text-danger">
                            Confirme a senha corretamente.
                        </div>
                    <?php }
                    ?>

                    <button class=" btn btn-md btn-block botao mt-4" type="submit">Cadastrar</button>
                    <br>
                    <div class="text">Já possui uma conta? <a href="login.php" class="outro">Entre aqui</a></div>

                </form>
            </div>
            <div class="text-center termos"><a href="termos.php" style="color: #ffaa00; font-size:small;" target="_blank"><b>Termos de Uso</b></a></div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            var v = document.getElementById("myInput2");
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

            if (v.type === 'password') {
                v.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            } else {
                v.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>

</body>

</html>