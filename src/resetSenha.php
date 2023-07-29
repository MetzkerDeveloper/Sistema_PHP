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
      <a class="navbar-brand" href="index.php">
        <img src="../imagens/favicon-32x32.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        | Sistema
      </a>
      <a href="index.php" class="btn btn-dark">Voltar</a>
    </div>
  </nav>
  <div class="container mt-5">
    <h2>Validação Email</h2>
    <form action="validResetSenha.php" class="form-control" method="POST">

      <div class='form-floating mb-3'>
        <input type='email' class='form-control' id='floatingInput' name='email'>
        <label for='floatingInput'>Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="submit" name="submit" class="btn btn-primary" id="floatingPassword" value="Verificar">
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
</body>

</html>