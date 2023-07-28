<?php 
  session_start();
  // print_r($_SESSION);
  include_once('conexao/conecta.php');
  if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
  }
  $logado= $_SESSION['email'];
  $sql= "SELECT name_user FROM users WHERE email_user = '$logado'";
  $result = $conn -> query($sql);
  $row = $result->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Sistema WM DEV</title>

</head>

<body>
  <nav class="navbar bg-secundary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../imagens/favicon-32x32.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        | Sistema WM DEV
      </a>
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </nav>
  <br>
  <?php 
  echo "<h3>Bem vindo(a)<u> ".$row['name_user']."</u></h3>";
  ?>
  <br>
  <div class="container d-flex justify-content-center">
    <iframe width="650" height="450"
      src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen>
    </iframe>
  </div>
</body>

</html>