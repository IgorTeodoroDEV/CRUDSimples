<?php 
require_once "../acesso/verifica_pag.php";
require_once "../classes/turma.php";

$id = $_POST['id'];
$turma = new Turma($id);

$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

$turma->atualizar();

header('Location: turmas-listar.php');
?>