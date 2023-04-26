<?php 
require_once "../classes/disciplina.php";

$id = $_POST['id'];
$disciplina = new Disciplina($id);

$disciplina->descDisciplina = $_POST['descDisciplinas'];
$disciplina->cargahr = $_POST['cargahr'];

$disciplina->atualizar();

header('Location: disciplinas-listar.php');
?>