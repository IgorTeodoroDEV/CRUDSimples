<?php
Class Aluno{

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $turma;
    public $cep;
    public $endereco;
    public $numeroCasa;
    public $bairro;
    public $cidade;
    public $estado;
    public $dataNasc;
    public $genero;
    public $matricula;
    public $descTurma;

    public function __construct($id = false)
    {

        if ($id){
            
            $this->id = $id;

            $this->carregar();
        }
    }

    public function inserir(){

            $sql = "INSERT INTO tb_alunos (nome, email, Telefone, cep, endereco, numeroCasa, bairro, cidade, estado, turma, dataNasc, genero, matricula) VALUES (
                '".$this->nome."',
                '".$this->email."',
                '".$this->telefone."',
                '".$this->cep."',
                '".$this->endereco."',
                '".$this->numeroCasa."',
                '".$this->bairro."',
                '".$this->cidade."',
                '".$this->estado."',
                '".$this->turma."',
                '".$this->dataNasc."',
                '".$this->genero."',
                'ATIVA'
            )";
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            echo $sql;

            $conexao->exec($sql);
    
            header("Location: ../aluno/alunos-listar.php");
    }
    public function listar(){
        $sql =  "SELECT * FROM tb_alunos";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;

    }
    public function excluir(){
        $sql = " DELETE FROM tb_alunos WHERE id=".$this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb_alunos as tb_a INNER JOIN tb_turmas as tb_t ON tb_a.turma = tb_t.id  WHERE tb_a.id=".$this->id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->nome = $linha['nome'];
        $this->email = $linha['email'];
        $this->telefone = $linha['Telefone'];
        $this->cep = $linha['cep'];
        $this->endereco = $linha['endereco'];
        $this->numeroCasa = $linha['numeroCasa'];
        $this->bairro = $linha['bairro'];
        $this->cidade = $linha['cidade'];
        $this->estado = $linha['estado'];
        $this->turma = $linha['turma'];
        $this->dataNasc = $linha['dataNasc'];
        $this->genero = $linha['genero'];
        $this->descTurma = $linha['descTurma'];
        $this->matricula = $linha['matricula'];
    }

    public function atualizar(){
        
            $sql = "UPDATE tb_alunos SET
            nome = '$this->nome' ,
            email = '$this->email',
            Telefone = '$this->telefone',
            cep = '$this->cep',
            endereco = '$this->endereco',
            numeroCasa = '$this->numeroCasa',
            bairro = '$this->bairro',
            cidade = '$this->cidade',
            estado = '$this->estado',
            turma = '$this->turma',
            dataNasc =  '$this->dataNasc',
            genero = '$this->genero'
            WHERE id = $this->id";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
            echo $sql;
            $conexao->exec($sql);
      
    }
}
?>