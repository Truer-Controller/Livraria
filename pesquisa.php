<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pesquisar</title>
</head>

<?php
$pesquisa = $_POST['busca'] ?? '';
include "conexao.php";
$sql = "SELECT * FROM livros l join tipo_capa tc on l.tipo=tc.id WHERE l.titulo LIKE '%$pesquisa%'";
$dados = mysqli_query($conn, $sql);
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="pesquisa.php" method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="Título" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Sinopse</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Código da ISBN</th>
                            <th scope="col">Valor do Livro</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($linha =  mysqli_fetch_assoc($dados)) {
                            $cod_livro = $linha['cod_livro'];
                            $titulo = $linha['titulo'];
                            $autor = $linha['autor'];
                            $sinopse = $linha['sinopse'];
                            $tipo = $linha['capa'];
                            $ISBN = $linha['ISBN'];
                            $valor = $linha['valor'];

                            echo "<tr>
           <th scope='row'>$titulo</th>
           <td>$autor</td>
           <td>$sinopse</td>
           <td>$tipo</td>
           <td>$ISBN</td>
           <td>$valor</td>
           <td width=150px>
               <a href='cadastro_edit.php?id=$cod_livro' class='btn btn-success btn-sm'>Editar</a>
               <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
               onclick=" . '"' . "pegar_dados($cod_livro, '$titulo')" . '"' . ">Excluir</a>
           </td>
           
       </tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <div class="form-group">
                    <br>
                    <a href="index.php" class="btn btn-info">Inicio</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="excluir_script.php" method="POST">
                        <p>Deseja realmente excluir <b id="nome_livro">Nome do Livro</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <input type="hidden" name="nome" id="nome_livro_1" value="">
                    <input type="hidden" name="id" id="cod_livro" value="">
                    <input type="submit" class="btn btn-danger" value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_livro').innerHTML = nome;
            document.getElementById('nome_livro_1').value = nome;
            document.getElementById('cod_livro').value = id;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>