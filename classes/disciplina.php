<?php 
class Disciplina
{
    public $id;
    public $descDisciplina;
    public $cargahr;

    public function __construct($id = false)
    {

        if ($id){
            
            $this->id = $id;

            $this->carregar();
        }
    }

    public function inserir()
    {
        $sql = "INSERT INTO tb_disciplinas (descDisciplinas, cargahr) VALUES (
            '".$this->descDisciplina. "',
            '".$this->cargahr. "'
        )";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $conexao->exec($sql);

        echo "Registro gravado com sucesso! <br>";
        header("Location: ../diciplina/disciplinas-listar.php");
    }

    public function listar()
    {
        $sql = "SELECT * FROM tb_disciplinas";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchALL();

        return $lista;
    }

    public function excluir()
    {
        $sql = "DELETE FROM tb_disciplinas WHERE id=".$this->id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb_disciplinas WHERE id=".$this->id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->descDisciplina = $linha['descDisciplinas'];
        $this->cargahr = $linha['cargahr'];
    }

    public function atualizar()
    {
        $sql = "UPDATE tb_disciplinas SET
            descDisciplinas = '$this->descDisciplina' ,
            cargahr = '$this->cargahr'
            WHERE id = $this->id";
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
            echo $sql;
            $conexao->exec($sql);
  
    }
}
?>