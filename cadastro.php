<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Livraria</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control" name="autor">
                    </div>
                    <div class="form-group">
                        <label for="sinopse">Sinopse</label>
                        <textarea name="sinopse" class="form-control" name="sinopse"></textarea>
                    </div>
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <div>
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="tipo" value="1" checked> Capa dura
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="tipo" value="2"> Cartonada
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ISBN">Código da ISBN</label>
                <input type="number" class="form-control" name="ISBN">
            </div>
            <div class="form-group">
                <label for="valor">Valor do Livro</label>
                <br>
                <input type="number" class="form-contril" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valor">
            </div>
            <div class="form-group">
                <br>
                <input type="submit" class="btn btn-success" name="botao">
            </div>
            </form>
            <div class="form-group">
                <br>
                <a href="index.php" class="btn btn-info">Inicio</a>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>