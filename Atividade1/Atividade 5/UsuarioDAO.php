<?php
class UsuarioDAO{
    private $conn;

    function __construct($conn){
        $this->conn = $conn;
    }
   
    function cadastrar($nome, $email, $senha) {
        if(!$this->verificar($email)) {
            echo 
            '<section class="container-admin-banner">
                <p style="color:white; font-weight: bold;">Usuario ja cadastrado</p>
            </section>';
            return false;
        }

        $senhaHash = password_hash($senha, PASSWORD_BCRYPT );

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            return false;
        }

    }

    function verificar($email) {
        $sql = "SELECT email FROM usuario WHERE email = '".$email."'";
        $result = $this->conn->query($sql);
        if($result->num_rows != 0) {
            return false;
        } else {
            return true;
        }
    }

    function validar($email, $senha) {
        $sql = "SELECT * FROM usuario WHERE nome = ? OR email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $email, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $senhaHashArmazenada = $row["senha"];

            if (password_verify($senha, $senhaHashArmazenada)) {
                // A senha fornecida corresponde à senha armazenada no banco de dados
                return true;
            } else {
                // Senha incorreta
                return false;
            }
        } else {
            // Usuário não encontrado
            return false;
        }
    }

}
?>
