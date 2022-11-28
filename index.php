<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login no Sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <section class="hero is-success">
        <div class="hero-body" align="center">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                <br/><br/><br/><br/>
                <h2>Efetuar Login</h2>
                <br/>
                    <form id="form_login" action="login.php" method="POST">
                        <div>
                        <?php if(isset($resultado) && $resultado["cod"] == 0): ?>
                            <div class="alert alert-danger">
                                <?php echo $resultado["msg"]; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <input type="email" id="email" name="email" placeholder="Email" autofocus/>
                        <br/><br/>
                        <input type="password" id="senha" name="senha" placeholder="Senha" autofocus/> 
                        <br/><br/><br/>
                        <div class="field">
                            <a href="cadastro.php">Não tem uma conta? Cadastre-se já!</a>
                        </div>
                        <br/>
                        <input type="submit" id="submeter" value="Entrar" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>