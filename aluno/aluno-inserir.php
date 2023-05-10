<?php
require_once "../classes/turma.php";

$turmas =  (new Turma())->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assest/css/style.css">
    <title>Sistema Acadêmico</title>
</head>

<body>
<?php include_once "../view/nav-bar.php" ?>
    <div class="mx-auto m-4 tamanho text-center">
        <h3>Novo Aluno</h3>
    </div>
    <div class="container">
        <form action="aluno-gravar.php" method="post" class="row">
            <div class="col-8">
                <label for="descDisciplina">Nome:</label>
                <input class="input-group-text w-100 text-left form-control" type="text" name="nome" id="" required>
            </div>
            <div class="col-4">
                <label for="ano">Data de nascimento:</label>
                <input class="input-group-text w-100 text-left" type="date" name="dataNasc" id="" required>
            </div>
            <div class="col-8 mt-2">
                <label for="ano">E-mail:</label>
                <input class="input-group-text w-100 text-left" type="text" name="email" id="" required>
            </div>
            <div class="col-4 mt-2">
                <label for="ano">Telefone:</label>
                <input class="input-group-text w-100 text-left" type="number" name="telefone" id="" required>
            </div>
            <div class="col-4 mt-2">
                <label for="ano">CEP:</label>
                <input class="input-group-text w-100 text-left" type="number" name="cep" id="cep" required>
            </div>
            <div class="col-8 mt-2">
                <label for="ano">Endereço:</label>
                <input class="input-group-text w-100 text-left" type="text" name="endereco" id="endereco" required>
            </div>
            <div class="col-3 mt-2">
                <label for="ano">nº:</label>
                <input class="input-group-text w-100 text-left" type="number" name="numeroCasa" id="" required>
            </div>
            <div class="col-3 mt-2">
                <label for="ano">Bairro:</label>
                <input class="input-group-text w-100 text-left" type="text" name="bairro" id="bairro" required>
            </div>
            <div class="col-3 mt-2">
                <label for="ano">Cidade:</label>
                <input class="input-group-text w-100 text-left" type="Cidade:" name="cidade" id="cidade" required>
            </div>
            <div class="col-3 mt-2">
                <label for="ano">Estado:</label>
                <input class="input-group-text w-100 text-left" type="text" name="estado" id="estado" required>
            </div>
            <div class="form-group form-check mt-2">
                <label class="form-check-label" for="genero">Genero</label>
                <div class="col-2">
                    <input type="radio" class="form-check-input" name="genero" value="M">
                    <label class="form-check-label" for="genero">masculino</label>
                </div>
                <div class="col-2">
                    <input type="radio" class="form-check-input" name="genero" value="F">
                    <label class="form-check-label" for="genero">feminino</label>
                </div>
            </div>
            <div class="col-2 mt-2">
                <div class="form-group">
                    <label for="turma">Turma</label>
                    <select name="turma" class="form-control">
                        <?php foreach ($turmas as $turma) : ?>
                            <option value="<?php echo $turma['id'] ?>"><?php echo $turma['descTurma'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-5 mt-3">
                <input class="btn btn-success m-4 " type="submit" value="Gravar">
                <a class="btn btn-danger m-4" href="alunos-listar.php">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="../assest/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>