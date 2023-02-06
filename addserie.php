<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Série • GYMANAGER</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_login.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="img/halter.ico">


    <script>
    function mais() {
        var destino = document.getElementById("aqui");
        var novadiv = document.createElement("div");
        var conteudo = document.getElementById("exercicio");
        novadiv.innerHTML = conteudo.innerHTML;
        destino.appendChild(novadiv);
    }
    </script>



</head>

<body>

    <div class="card" style="margin: 0 auto; margin-top:6%; margin-bottom: 3%;">
        <!--script voltar -->
        <script>
        function goBack() {
            window.history.back()
        }
        </script>

        <a href="serie.php" onclick="goBack()" class="voltar">Voltar</a>


        <img src="img/logo2.png" class="card-img-top" alt="logo">


        <form method="POST" action="processa_serie.php">



            <h3 class="titulo">Adicionar Série</h3>
            <div class="card-body">
                <div class="form-group ">
                    <input type="text" name="serieNome" class="form-control form-itens" placeholder="Nome da Série"
                        required>
                </div>
                <h4 class="titulo">Exercícios</h4>
                <div id="exercicio">
                    <div class="form-group row mx-1">
                        <input type="text" name="nome[]" class="form-control form-itens col-12" placeholder="Nome"
                            >
                        <input type="text" name="series[]" class="form-control form-itens col-4" placeholder="Séries"
                            >
                        <input type="text" name="repeticoes[]" class="form-control form-itens col-4"
                            placeholder="Repetições" >
                        <input type="text" name="intervalo[]" class="form-control form-itens col-4"
                            placeholder="Inter.(seg)" >
                        <input type="text" name="obs[]" class="form-control form-itens col-12"
                            placeholder="*Observação">
                    </div>
                </div>


                <div id="aqui">

                </div>

                <div class="col-md-12 col-sm-12 d-flex justify-content-center">
                    <br>
                    <input type="button" value="+" onclick="mais()" ; class="btn btn-outlined btn-warning" />
                </div>


                <button class=" btn btn-md btn-block botao mt-4" type="submit">Cadastrar</button>


        </form>

    </div>



</body>

</html>