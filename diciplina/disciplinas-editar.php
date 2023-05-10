<?php 
require_once "../acesso/verifica_pag.php";
require_once "../classes/disciplina.php";

$id = $_GET['id'];

$disciplina = new Disciplina($id);

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
    <div class="mx-auto m-4 tamanho text-center" >
        <h4>Alterar Disciplina: <?= $disciplina->descDisciplina ?></h4>
    </div>
    <div class="max-auto ml-5 mr-5">
    <form action="disciplinas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $disciplina->id ?>">
        <label for="descDisciplinas">Disciplinas:</label>
        <input class="input-group-text w-100 text-left" type="text" name="descDisciplinas" value="<?= $disciplina->descDisciplina ?>">
        <label for="cargahr">Carga horária:</label>
        <input class="input-group-text w-100 text-left" type="number" name="cargahr" value="<?= $disciplina->cargahr ?>">
        <input class="btn btn-success m-4 " type="submit" value="Gravar">
        <a class="btn btn-danger"href="disciplinas-listar.php">Cancelar</a>
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