<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pollock3 • GYMANAGER</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_login.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e08dad89c4.js" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="shortcut icon" type="imagex/png" href="../img/halter.ico">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card" style="margin-top: 2%; margin-bottom: 2%;">
            <!--script voltar -->
            <script>
                function goBack() {
                    window.history.back()
                }
            </script>

            <a href="../tipoavaliacao.php" onclick="goBack()" class="voltar">Voltar</a>


            <img src="../img/logo2.png" class="card-img-top" alt="logo">


            <form method="POST" action="processa_prot.php">



                <h3 class="titulo">Pollock3:</h3>
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="nome" class="form-control form-itens " value="Pollock3" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="peso" class="form-control form-itens" placeholder="Peso(kg)" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="altura" class="form-control form-itens" placeholder="Altura(cm)" required>
                    </div>




                    <h4 class="text-center">Dobras cutâneas(mm): </h4>
                    <div class="form-group">
                        <input type="text" name="coxa" class="form-control form-itens" placeholder="Coxa" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="peito" class="form-control form-itens" placeholder="Peitoral" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="abdominal" class="form-control form-itens" placeholder="Abdominal" required>
                    </div>

                    <h4 class="text-center">Circunferências(cm): </h4>

                    <div class="form-group">
                        <input type="text" name="torax" class="form-control form-itens" placeholder="Tórax" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cintura" class="form-control form-itens" placeholder="Cintura" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="abdomen" class="form-control form-itens" placeholder="Abdômen" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="quadril" class="form-control form-itens" placeholder="Quadril" required>
                    </div>

                    <h5>Braço Relaxado:</h5>

                    <div class="row form-group ml-1 ">
                        <input type="text" name="bre" class="form-control form-itens col-5" placeholder="Esquerdo" required>
                        <input type="text" name="brd" class="form-control form-itens mx-auto col-5" placeholder="Direito" required>
                    </div>

                    <h5>Braço Contraído:</h5>

                    <div class="row form-group ml-1 ">
                        <input type="text" name="bce" class="form-control form-itens col-5" placeholder="Esquerdo" required>
                        <input type="text" name="bcd" class="form-control form-itens mx-auto col-5" placeholder="Direito" required>
                    </div>

                    <h5>Coxa:</h5>

                    <div class="row form-group ml-1 ">
                        <input type="text" name="ce" class="form-control form-itens col-5" placeholder="Esquerdo" required>
                        <input type="text" name="cd" class="form-control form-itens mx-auto col-5" placeholder="Direito" required>
                    </div>

                    <h5>Panturrilha:</h5>
                    <div class="row form-group ml-1 ">
                        <input type="text" name="pe" class="form-control form-itens col-5" placeholder="Esquerdo" required>
                        <input type="text" name="pd" class="form-control form-itens mx-auto col-5" placeholder="Direito" required>
                    </div>


                    <button class=" btn btn-md btn-block botao mt-4" type="submit">Cadastrar</button>


            </form>

        </div>
    </div>


</body>

</html>