<?php 
require_once "../acesso/verifica_pag.php";
require_once "../classes/turma.php";

$id = $_GET['id'];

$turma = new Turma($id);

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Sistema acadêmico</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../diciplina/disciplinas-listar.php">Disciplina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="turmas-listar.php">Turmas</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="mx-auto m-4 tamanho text-center" >
        <h4><h3>Nova Turma</h3> <?= $turma->descTurma ?></h4>
    </div>
    <div class="max-auto ml-5 mr-5">
    <form action="turmas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $turma->id ?>">
        <label for="descDisciplinas">Disciplinas:</label>
        <input class="input-group-text w-100 text-left" type="text" name="descTurma" value="<?= $turma->descTurma ?>">
        <label for="ano">Carga horária:</label>
        <input class="input-group-text w-100 text-left" type="number" name="ano" value="<?= $turma->ano ?>">
        <input class="btn btn-success m-4 " type="submit" value="Gravar">
        <a class="btn btn-danger"href="turmas-listar.php">Cancelar</a>
    </form>
    </div>
    <footer>
        <p class="font-italic text-lowercase mx-auto tamanho text-center">Desenvolvido por Igor Teodoro<p>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>