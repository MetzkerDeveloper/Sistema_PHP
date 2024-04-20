<?php
session_start();
// print_r($_SESSION);
include_once('conexao/conecta.php');
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: index.php');
}
$logado = $_SESSION['email'];
$sql = "SELECT name_user FROM users WHERE email_user = '$logado'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon-32x32.png">
  <link rel="shortcut icon" href="./imagens/favicon-32x32.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Sistema WM DEV</title>

</head>

<body>
  <nav class="navbar bg-secundary">
    <div class="container-fluid">
      <a class="navbar-brand" href="sistema.php">
        <img src="../imagens/favicon-32x32.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        | Sistema WM DEV
      </a>
      <?php
      echo "<p>Bem vindo(a)<u> " . $row['name_user'] . "</u></p>";
      ?>
        <form action="sair.php" method="post">
          <button class="btn btn-danger me-5" >Sair</button>
        </form>
    </div>
  </nav>
  <h2>Cursos disponíveis</h2>
  <div class="conatiner">
    <div class="d-flex justify-content-evenly">
      <div class=" card" style="width: 18rem;">
        <img src="../imagens/hmtl-e-css.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">HTML 5 e CSS3</h5>
          <p class="card-text">Curso de Html e CSS para iniciantes.</p>
          <a href="./cursos/html-e-css.php" class="btn btn-primary">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../imagens/Logica-de-Programacao.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lógica de Programação</h5>
          <p class="card-text">Curso de Lógica de Programação para iniciantes.</p>
          <a href="./cursos/logica-de-programacao.php" class="btn btn-primary">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../imagens/javascript.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Javascript</h5>
          <p class="card-text">Curso de Javascript para iniciantes.</p>
          <a href="./cursos/javascript.php" class="btn btn-primary">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../imagens/img-login.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">PHP Moderno</h5>
          <p class="card-text">Curso de PHP Moderno para iniciantes com uma didática de facil entendimento.</p>
          <a href="./cursos/php-moderno.php" class="btn btn-primary">Acessar</a>
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class=" text-muted text-center">
    <footer>
      <p>&copy; wm | developer 2023</p>
    </footer>
  </div>
</body>

</html>