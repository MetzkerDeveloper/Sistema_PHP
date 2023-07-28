<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WM | Sistema</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>


<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../imagens/favicon-32x32.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        | Sistema
      </a>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 order-lg-2">
        <!-- Formulário de Login -->
        <h2 class="text-center">Acesso Sistema</h2>
        <form class="form-control" method="POST" action="validLogin.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Não compartilharemos seu e-mail com mais ninguém.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Acessar</button>

          <hr>
          <div class="d-flex justify-content-around">
            <a href="" class="link-secondary">Esqueci minha senha</a>
            <a href="cadastro.php" class="link-secondary">Cadastre-se</a>
          </div>
        </form>
      </div>
      <div class="col-lg-6 order-lg-1">
        <!-- Imagem -->
        <img src="../imagens/img-login.jpg" alt="Descrição da imagem" class="img-fluid">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
</body>

</html>