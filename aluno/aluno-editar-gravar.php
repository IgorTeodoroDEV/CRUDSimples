<?php 
    require_once "../classes/aluno.php";

    $id = $_POST['id'];

    $aluno = new Aluno($id);

    $aluno->nome = $_POST['nome'];
    $aluno->dataNasc = $_POST['dataNasc'];
    $aluno->email = $_POST['email'];
    $aluno->telefone = $_POST['telefone'];
    $aluno->cep = $_POST['cep'];
    $aluno->endereco = $_POST['endereco'];
    $aluno->numeroCasa = $_POST['numeroCasa'];
    $aluno->bairro = $_POST['bairro'];
    $aluno->cidade = $_POST['cidade'];
    $aluno->estado = $_POST['estado'];
    $aluno->genero = $_POST['genero'];
    $aluno->turma = $_POST['turma'];

    $aluno->atualizar();

    header('Location: alunos-listar.php');
?>