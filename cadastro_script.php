<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Livraria</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $sinopse = $_POST['sinopse'];
            $tipo = $_POST['tipo'];
            $ISBN = $_POST['ISBN'];
            $valor = $_POST['valor'];

            $sql = "INSERT INTO `livros`(`titulo`, `autor`, `sinopse`,`tipo`, `ISBN`, `valor`) VALUES ('$titulo','$autor','$sinopse','$tipo','$ISBN','$valor')";

            if (mysqli_query($conn, $sql)) {
                mensage("$titulo cadastrado com sucesso", 'success');
            } else {
                mensage("$titulo não cadastrado", 'danger');
            }

            ?>

            <a href="cadastro.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>