<?php

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM tb_acesso WHERE email = '{$email}' AND senha = {$senha}";
    include_once "../conexao/conexao.php";
    $result = $conexao->query($sql);
    $line = $result->fetch();

    $usu_log = $line['id'];
    $_usu =  $line['usuario'];
    echo $usu_log;  
    
    if($usu_log == null){
        echo  "Sem usu";

    }else{
        session_start();
        $_SESSION['id'] = $usu_log;
        $_SESSION['usuario'] = $_usu;
        header('Location: ../painel-center.php');
    }

?>