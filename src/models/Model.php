<?php 

class Model
{
    public function __construct()
    {
        $host = "127.0.0.1";
        $dbname = "bd_doadores";
        $user = "root";
        $password = "";

        try {   
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        } catch (Exception $e) {
            echo "Conexão mal sucedida";
        }
        $this->pdo = $pdo;
    }

    public function insert($data)
    {
        extract($data);

        $sql = "INSERT INTO tb_doadores (nome, cpf, email, telefone, dt_nasc,intervalo, cep, logradouro, num, bairro, cidade, uf, complemento, valor, pagamento) VALUES (:nome, :cpf, :email, :telefone, :dt_nasc, :intervalo, :cep, :logradouro,:num, :bairro, :cidade, :uf,:complemento, :valor, :pagamento)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':dt_nasc', $dt_nasc);
        $stmt->bindParam(':intervalo', $intervalo);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':uf', $uf);
        $stmt->bindParam(':complemento', $complemento);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':pagamento', $pagamento);

        $stmt->execute();

        return;
    }

    public function getDoadores()
    {
        $sql = "SELECT * FROM tb_doadores";

        $query = $this->pdo->query($sql);

        $stmt = $query->fetchAll(PDO::FETCH_ASSOC);

        return $stmt;
    }

    public function getDoadorId($id)
    {
        $sql = "SELECT * FROM tb_doadores WHERE id = $id";

        $query = $this->pdo->query($sql);

        $stmt = $query->fetchAll(PDO::FETCH_ASSOC);

        return $stmt;
    }

    public function update($data)
    {
        extract($data);

        $sql = "UPDATE tb_doadores SET 
        nome = :nome, cpf = :cpf, email = :email, telefone = :telefone,intervalo = :intervalo, cep = :cep, logradouro = :logradouro, num = :num, bairro = :bairro, cidade = :cidade, uf = :uf, complemento = :complemento, valor = :valor, pagamento = :pagamento WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        // $stmt->bindParam(':dt_nasc', $dt_nasc);
        $stmt->bindParam(':intervalo', $intervalo);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':uf', $uf);
        $stmt->bindParam(':complemento', $complemento);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':pagamento', $pagamento);

        $stmt->execute();

        $sql = "UPDATE tb_doadores SET nome = $nome WHERE id = $id";

        $this->pdo->exec($sql);

        return; 
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_doadores WHERE id = $id";

        $stmt = $this->pdo->exec($sql);

        return $stmt;
    }

    public function search($busca_doador)
    {
        $sql = "SELECT * FROM tb_doadores WHERE nome LIKE '%".$busca_doador."%' ";

        $query = $this->pdo->query($sql);

        $stmt = $query->fetchAll(PDO::FETCH_ASSOC);

        return $stmt;
    }
}