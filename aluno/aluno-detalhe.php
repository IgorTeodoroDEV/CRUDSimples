<?php
 require_once "../acesso/verifica_pag.php";
 require_once "../classes/aluno.php";

    $id = $_GET['id'];
    $aluno = new Aluno($id);

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
  <?php include_once "../view/nav-bar.php" ?>
    <div class="row">
    <div class="container">
      <div class="float-right ">
        <a class="btn btn-success" href="aluno-editar.php?id=<?php echo $aluno->id?>">Alterar</a>
      </div>
      <div class="mx-auto m-4 tamanho text-center">
        <h3>Aluno: <?php echo $aluno->nome ?></h3>
      </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Nome:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->nome  ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Data de nascimento:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->dataNasc  ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>E-mail:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->email ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Telefone:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->telefone ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>CEP:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->cep ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Endereço:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->endereco ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Numero da casa:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->numeroCasa ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Bairro:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->bairro ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Estado:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->estado ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Turma:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->descTurma ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Genero:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->genero ?></p>
            </div>
        </div>
        <div class="d-flex">
            <div class="m-2">
                <h5>Matricula:</h5>
            </div>
            <div class="mt-2 mb-2">
                <p><?php echo $aluno->matricula ?></p>
            </div>
        </div>
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
