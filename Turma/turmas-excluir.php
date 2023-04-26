<?php 
require_once '../classes/turma.php';

$id = $_GET['id'];

$turma = new Turma($id);

$turma->excluir();

header('Location: turmas-listar.php');
?>