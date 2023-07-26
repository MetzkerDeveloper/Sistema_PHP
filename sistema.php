<?php 
  session_start();
  // print_r($_SESSION);
  if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $logado= $_SESSION['email'];
    
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Sistema WM DEV</title>
  <style>
  body {
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    color: #fff;
    text-align: center;
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sistema WM DEV</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </nav>
  <br>
  <?php 
  echo "<h1>Bem vindo(a) <u>$logado</u></h1>";
  ?>
  <br>
  <iframe width="650" height="450"
    src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_" title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen>
  </iframe>
</body>

</html>