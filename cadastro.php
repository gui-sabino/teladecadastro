<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="container">
        <form action="cadastrar.php" method="POST">
            <br/>
                <h2>Cadastrar Usuário</h2>
            <br/>
            <div class="form-group">
                <label for="nome">Digite seu nome completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha"required>
                <small id="passwordHelpInline" class="text-muted">OBS: Aconselhamos que utilize uma senha forte, com letras maiúsculas e caracteres especiais.</small>
            </div>
            <?php if(isset($resultado)): ?>
                <?php if($resultado["cod"] == 1): ?>
                    <div class="alert alert-success">
                        <?php echo $resultado["msg"]; ?>
                    </div>
                <?php endif; ?>
                <?php if($resultado["cod"] == 0): ?>
                    <div class="alert alert-danger">
                        <?php echo $resultado["msg"]; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-success">Criar usuário</button>
        </form>
    </div>
    <br/>
    <br/>
    <br/>
    <div align="center">
        <h3><a href="index.php" class="btn btn-secondary btn-lg">Voltar ao menu principal</a></h3>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
