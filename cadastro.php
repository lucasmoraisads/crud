<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://github.com/lucasmoraisads">Lucas/GitHub</a>
            
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="cadastro.php">Cadastro </a>
                    <a class="nav-link" href="login.php">Login</a>
                    <a class="nav-link" href="leia.php">Leia mais</a>
                </div>
                </div>
            </div>
    </nav>
    
    <div class="container">
       <h2>Formulario</h2>
       <form action="salvauser.php" method="POST">
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="mb-3">
            <label for="nome">Senha</label>
            <input type="password" name="senha">
        </div>
        <button type="submit" class="btn btn-primary">CADASTRAR</button>
       </form>
    </div>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>