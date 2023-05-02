<?php 
 require_once "../classes/aluno.php";

  $lista = (new Aluno())->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assest/css/style.css">
    <title>Sistema escolar</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Sistema acadêmico</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="diciplinas-listar.php">Disciplina</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../Turma/turmas-listar.php">Turmas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Aluno/alunos-listar.php">Aluno</a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="row">
    <div class="container">
      <div class="float-right ">
        <a class="btn btn-success" href="aluno-inserir.php">Adicionar Aluno</a>
      </div>
      <div class="mx-auto m-4 tamanho text-center">
        <h3>Listar Alunos</h3>
      </div>
      <table class="table">
        <div class="rounded">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Turma</th>
              <th scope="col">Telefone</th>
              <th scope="col">Matricula</th>
              <th scope="col">Opções</th>
            </tr>
          </thead>
        </div>
        <tbody>
            <?php foreach ($lista as $linha): ?>
            <tr>
                <th scope="row"><?php echo $linha['id'] ?></th>
                <td><?php echo $linha['nome']?></td>
                <td><?php echo $linha['email']?></td>
                <td><?php echo $linha['turma']?></td>
                <td><?php echo $linha['Telefone']?></td>
                <td><?php echo $linha['matricula']?></td>
                <td>
                    <a class="btn btn-primary" href="aluno-detalhe.php?id=<?=$linha['id']?>">Ver mais</a>
                    <a class="btn btn-primary" href="aluno-editar.php?id=<?=$linha['id']?>">Atualizar</a>
                    <a class="btn btn-danger" href="aluno-excluir.php?id=<?=$linha["id"]?>">Excluir</a>
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
