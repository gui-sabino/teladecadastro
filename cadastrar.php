<?php
    if(count($_POST) > 0) {
        // 1 pegar os valores do form
        $nome = trim($_POST["nome"]);
        $email = trim($_POST["email"]);
        $senha = trim(md5($_POST["senha"]));
        try {
            include("conexao_bd.php");
            // 3 verificar se email e senha estao no BD
            $sql = "INSERT INTO usuario 
                    (nome, email, senha) 
                    VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nome, $email, $senha]);

            $resultado["msg"] =  "Usuário criado com sucesso!";
            $resultado["cod"] = 1;
        } 
        catch (PDOException $e) {
            $resultado["msg"] =  "ERRO: tente novamente | " . $e->getMessage();
            $resultado["cod"] = 0;
        }
        $conn = null;
    }
    include("cadastro.php");
?>