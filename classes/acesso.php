<?php

Class Acesso{
    public $email;
    public $senha;

    public function acess(){

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $sql = "SELECT * FROM tb_acesso WHERE  email = '".$this->email."' AND senha = ".$this->senha.;

        $consulta = $conexao->prepare($sql, array(PDO::CURSOR_SCROLL));

        $consulta->bindParam(':email',$email,':senha',$senha);

        $consulta->execute();

        $numero_linhas = $consulta->rowCount();

        if ( $numero_linhas!= 1) {

            echo "Login inválido!"; exit;
        } else {

            $resultado = $numero_linhas;
        }
    }
}

?>