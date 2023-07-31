<?php 
include_once('conexao/conecta.php');

if(isset($_POST['submit'])){
  $nome = strip_tags($_POST['nome']);
  $email =strip_tags( $_POST['email']);
  $telefone = strip_tags($_POST['telefone']);
  $senha =strip_tags( $_POST['senha']);
  $senhaHash = md5($senha);
  
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email_user = '$email'");
  
  if(mysqli_num_rows($result) > 0 ){
    echo"<script>window.alert('Email já existe, tente um novo email.')</script>";
  }
  else{
    $q = "INSERT INTO users (`name_user`,`password_user`, `email_user`, `phone_user`) VALUES ('$nome','$senhaHash','$email', '$telefone')";
    $query = mysqli_query($conn,$q);
    
    header('Location: index.php');
  }
}
  

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WM | Sistema</title>
  <link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon-32x32.png">
  <link rel="shortcut icon" href="./imagens/favicon-32x32.png" />
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
      <a href="javascript:history.go(-1);" class="btn btn-dark">Voltar</a>
    </div>
  </nav>
  <div class="container mt-5">
    <h2>Cadastro de Usuário</h2>
    <form class="form-control" method="POST">
      <p id="alert"></p>
      <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="Digite seu nome...">
        <label for="floatingInput">Nome</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="telefone" id="floatingInput" placeholder="Digite seu telefone...">
        <label for="floatingInput">Telefone</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword senha" name="senha"
          placeholder="Digite sua senha">
        <label for="floatingPassword">Senha</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword confirmSenha" placeholder="Confirme sua senha">
        <label for="floatingPassword">Confirme Senha</label>
      </div>
      <div class="form-floating mb-3">
        <input type="submit" name="submit" class="btn btn-primary" id="floatingPassword">
      </div>
    </form>
  </div>


  <script>
  let senhaInput = document.getElementById('floatingPassword senha');
  let confirmSenhaInput = document.getElementById('floatingPassword confirmSenha');
  var alertSpan = document.getElementById('alert');

  confirmSenhaInput.addEventListener('keyup', () => {
    if (senhaInput.value !== confirmSenhaInput.value && senhaInput !== '' && confirmSenhaInput !== '') {
      alertSpan.innerHTML = "<div class = 'alert alert-warning' role = 'alert' >As senhas são diferentes!</div>"
    } else {
      alertSpan.innerHTML = "<div class = 'alert alert-info' role = 'alert' > As senhas são iguais </div>"
    }
    // if (senhaInput.value == confirmSenhaInput) {
    //   alertSpan.innerHTML =
    //     " <div class = 'alert alert-info'role = 'alert' > As senhas são iguais </div>";
    // }
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
</body>

</html>