<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alteração de Cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $sinopse = $_POST['sinopse'];
            $tipo = $_POST['tipo'];
            $ISBN = $_POST['ISBN'];
            $valor = $_POST['valor'];

            $sql = "UPDATE `livros` set `titulo` = '$titulo', `autor` = '$autor', `sinopse` = '$sinopse',`tipo` = '$tipo', `ISBN` = '$ISBN', `valor` = '$valor' WHERE cod_livro = $id";

            if (mysqli_query($conn, $sql)) {
                mensage("$titulo alterado com sucesso", 'success');
            } else {
                mensage("$titulo não alterado", 'danger');
            }
            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>