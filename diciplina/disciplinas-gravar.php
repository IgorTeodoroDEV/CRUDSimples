<?php 
require_once "../classes/disciplina.php";

$disciplina = new Disciplina();

$disciplina->descDisciplina = $_POST['descDisciplina'];
$disciplina->cargahr = $_POST['cargahr'];

$disciplina->inserir();
?>