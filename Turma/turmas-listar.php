<?php 
require_once "../acesso/verifica_pag.php";
require_once "../classes/turma.php";

$turma = new Turma();

$lista = $turma->listar();

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
  <div class="row">
    <div class="container">
      <div class="float-right mt-4 ">
        <a class="btn btn-success" href="turmas-inserir.html">Adicionar Turma</a>
      </div>
      <div class="m-4">
        <h3>Listar Turmas</h3>
      </div>
      <table class="table">
        <div class="rounded">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Turma</th>
              <th scope="col">Ano</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
        </div>
        <tbody>
            <?php foreach ($lista as $linha): ?>
            <tr>
                <th scope="row"><?php echo $linha['id'] ?></th>
                <td><?php echo $linha['descTurma']?></td>
                <td><?php echo $linha['ano']?></td>
                <td>
                    <a class="btn btn-primary" href="turmas-editar.php?id=<?=$linha['id']?>">Atualizar</a>
                    <a class="btn btn-danger" href="turmas-excluir.php?id=<?=$linha["id"]?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
      </table>
      <footer>
        <p class="font-italic text-lowercase mx-auto tamanho text-center">Desenvolvido por Igor Teodoro
        <p>
      </footer>
    </div>
  </div>
  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>