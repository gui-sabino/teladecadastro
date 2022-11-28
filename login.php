<?php
    if(count($_POST) > 0) {
        // 1 pegar os valores do form
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        try {
            include("conexao_bd.php");
            // 3 verificar se email e senha estao no BD
            $consulta = $conn->prepare("SELECT * FROM usuario WHERE email=:email and senha=md5(:senha)");
            $consulta->bindParam(':email', $email, PDO::PARAM_STR);
            $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
            $consulta->execute();

            $r = $consulta->fetchAll();
            $qtd_emails = count($r);
            if($qtd_emails == 1) {
                $_SESSION["email_usuario"] = $email;
                $_SESSION["nome_usuario"] = $r[0]["nome"];
                $resultado["cod"] = 1; ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Painel</title>
                    <link rel="stylesheet" type="text/css" href="login.css">
                </head>
                <body>
                    <br/><br/><br/><br/>
                    <div align="center">
                        <h2>Olá, <?php echo $_SESSION["nome_usuario"];?></h2>
                        <br/>
                        <h2><a href="index.php">Voltar ao menu principal</a></h2> 
                    </div>
                </body>
                </html> <?php 
            } else if($qtd_emails == 0) {
                $resultado["msg"] =  "Usuário ou senha não conferem...";
                $resultado["cod"] = 0;
                include("index.php");
            }
        } 
        catch (PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
        $conn = null;
    }
?>