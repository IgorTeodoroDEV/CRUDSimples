<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assest/css/style.css">
    <title>Sistema Acadêmico</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Sistema acadêmico</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../diciplina/disciplinas-listar.php">Disciplina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Turma/turmas-listar.php">Turmas</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mx-auto m-4 tamanho text-center">
        <h3>Novo Aluno</h3>
    </div>
    <div class="container">
        <form action="disciplinas-gravar.php" method="post" class="row">
            <div class="col-8">
                <div class="d-flex">
                    <label for="descDisciplina">Nome:</label>
                    <input class="input-group-text w-100 text-left" type="text" name="descDisciplina" id="">
                </div>
            </div>
            <div class="col-4">
                <label for="ano">Data de nascimento:</label>
                <input class="input-group-text w-100 text-left" type="date" name="cargahr" id="">
            </div>
            <div class="col-8">
                <label for="ano">E-mail:</label>
                <input class="input-group-text w-100 text-left" type="text" name="cargahr" id="">
            </div>
            <div class="col-4">
                <label for="ano">Telefone:</label>
                <input class="input-group-text w-100 text-left" type="number" name="cargahr" id="">
            </div>
            <div class="col-4">
                <label for="ano">CEP:</label>
                <input class="input-group-text w-100 text-left" type="number" name="cargahr" id="">
            </div>
            <div class="col-8">
                <label for="ano">Endereço:</label>
                <input class="input-group-text w-100 text-left" type="text" name="cargahr" id="">
            </div>
            <div class="col-3">
                <label for="ano">nº:</label>
                <input class="input-group-text w-100 text-left" type="number" name="cargahr" id="">
            </div>
            <div class="col-3">
                <label for="ano">Bairro:</label>
                <input class="input-group-text w-100 text-left" type="text" name="cargahr" id="">
            </div>
            <div class="col-3">
                <label for="ano">Cidade:</label>
                <input class="input-group-text w-100 text-left" type="Cidade:" name="cargahr" id="">
            </div>
            <div class="col-3">
                <label for="ano">Estado:</label>
                <input class="input-group-text w-100 text-left" type="text" name="cargahr" id="">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label" for="exampleCheck1">Genero</label>
                <input type="checkbox" class="form-check-input" name="genero" value="M">
                <label class="form-check-label" for="exampleCheck1">masculino</label>
                <input type="checkbox" class="form-check-input" name="genero" value="F">
                <label class="form-check-label" for="exampleCheck1">feminino</label>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select de exemplo</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <input class="btn btn-success m-4 " type="submit" value="Gravar">
            <a class="btn btn-danger" href="disciplinas-listar.php">Cancelar</a>
            <section></section>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
