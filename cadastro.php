<?php 
include_once('conecta.php');

if(isset($_POST['submit'])){
  $nome = $_POST['name'];
  $senha = $_POST['senha'];
  $senhaHash = md5($senha);
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  
  $q = "INSERT INTO user (`nome`,`senha`, `email`, `telefone`) VALUES ('$nome','$senhaHash','$email', '$telefone')";
  $query = mysqli_query($conn,$q);
  
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- style -->
  <link rel="stylesheet" href="cad.css">

  <title>Cadastro WM DEV</title>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
  }

  a {
    position: absolute;
    right: 20px;
    top: 10px;
    text-decoration: none;
    font-weight: bold;
    color: #000;
    border: 1px solid rgba(0, 0, 0, 0.9);
    padding: 10px;
    border-radius: 5px;
    color: #fff;
  }

  a:hover {
    font-weight: bold;
    border: 1px solid rgba(250, 0, 0, 0.9);
    background: rgba(250, 0, 0, 0.9);
    color: #fff;
  }

  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .container>form {
    display: flex;
    flex-direction: column;
    width: 250px;
    padding: 10px;
    margin-top: 10px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.9);
    border-radius: 5px;
    color: #fff;
  }

  h2 {
    text-align: center;
  }

  input {
    margin-bottom: 10px;
    padding: 7px;
    border-radius: 5px;
    outline: none;
  }

  .btnInput {
    border: 1px solid rgba(0, 0, 0, 0.4);
    cursor: pointer;

  }

  .btnInput:hover {
    opacity: .8;
  }
  </style>
</head>

<body>
  <a href="home.php">Voltar</a>
  <div class="container">
    <form method="POST">
      <h2>Cadastro</h2>
      <label for="name">Nome:</label>
      <input type="text" name="name" id="name">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone">
      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha">
      <label for="confirmeSenha">Confirme Senha:</label>
      <input type="password" name="confirmeSenha" id="confirmeSenha">
      <small id="txt"></small><br>
      <input type="submit" name="submit" value="Cadastrar" class="btnInput">
    </form>
  </div>
  <script>
  let senha = document.getElementById('senha');
  let confirmeSenha = document.getElementById('confirmeSenha');
  let btnInput = document.querySelector('.btnInput');
  const txt = document.getElementById('txt');

  confirmeSenha.addEventListener('keyup', () => {
    if (senha.value !== confirmeSenha.value) {
      txt.innerHTML = 'As senhas não conferem';
    } else {
      txt.innerHTML = 'As senhas conferem';
    }
  });
  </script>
</body>

</html>