<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alterações de Cadastro</title>
</head>

<body>

    <?php

    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM livros l join tipo_capa tc on l.tipo=tc.id WHERE cod_livro = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração no cadastro dos Livros</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" require value="<?php echo $linha['titulo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control" name="autor" value="<?php echo $linha['autor']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="sinopse">Sinopse</label>
                        <textarea name="sinopse" class="form-control" name="sinopse"><?php echo $linha['sinopse']; ?></textarea>
                    </div>
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <div>
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="tipo" value="1" checked value="<?php echo $linha['tipo']; ?>"> Capa dura
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="tipo" value="2" value="<?php echo $linha['tipo']; ?>"> Cartonada
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ISBN">Código da ISBN</label>
                <input type="number" class="form-control" name="ISBN" value="<?php echo $linha['ISBN']; ?>">
            </div>
            <div class="form-group">
                <label for="valor">Valor do Livro</label>
                <br>
                <input type="number" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valor" value="<?php echo $linha['valor']; ?>">
            </div>
            <div class="form-group">
                <br>
                <input type="submit" class="btn btn-success" name="botao" value="Salvar Aterações">
                <input type="hidden" name="id" value="<?php echo $linha['cod_livro']; ?>">
            </div>

            </form>
            <div class="form-group">
                <br>
                <a href="index.php" class="btn btn-info">Inicio</a>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>