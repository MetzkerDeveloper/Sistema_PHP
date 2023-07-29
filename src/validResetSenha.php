<?php
if (isset($_POST['submit'])) {
  include_once('conexao/conecta.php');
$nome="";
$email="";
$telefone="";
$senha ="";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $sql = "SELECT * FROM users WHERE email_user = '$email'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  while(!$row){
    header('Location: validLogin.php');
    exit;
  }
  $nome = $row['name_user'];
  $telefone=$row["phone_user"];
  $id = $row['id'];
}else{
  $nome=$_POST["nome"];
  $email=$_POST["email"];
  $telefone=$_POST["telefone"];
  $senha = $_POST['senha'];
  $senhaHash = md5($senha);
          
  $q = "UPDATE users SET name_user = '$nome', phone_user='$telefone', password_user= '$senhaHash' WHERE git email_user='$email' ";
  $query = mysqli_query($conn,$q);
  //$r = $conn->query($q);
  //$q = "UPDATE users SET `name_user='$nome' , phone_user='$telefone', password_user='$senhaHash' WHERE email_user ='$email'";
  header('Location: validResetSenha.php');
  echo "Agora foi, dados atualizado";
}

}


?>
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
      <a href="index.php" class="btn btn-dark">Voltar</a>
    </div>
  </nav>
  <div class="container mt-5">
    <h2>Atualização dados</h2>
    <form action="validResetSenha.php" class="form-control" method="POST">
      <p id="alert"></p>
      <div class='form-floating mb-3'>
        <input type='email' class='form-control' id='floatingInput' name='email' value='<?php echo $email; ?>' disabled>
        <label for='floatingInput'>Email</label>
      </div>
      <div class='form-floating mb-3 mt-3'>
        <input type='text' class='form-control' name='nome' id='floatingInput' value='<?php echo $nome; ?>'>
        <label for='floatingInput'>Nome</label>
      </div>
      <div class='form-floating mb-3'>
        <input type='text' class='form-control' name='telefone' id='floatingInput' value='<?php echo $telefone; ?>'>
        <label for='floatingInput'>Telefone</label>
      </div>
      <div class='form-floating mb-3'>
        <input type='password' class='form-control' id='floatingPassword senha' name='senha'
          placeholder=' Digite sua senha'>
        <label for='floatingPassword'>Senha</label>
      </div>
      <div class='form-floating mb-3'>
        <input type='password' class='form-control' id='floatingPassword confirmSenha' placeholder='Confirme sua senha'>
        <label for='floatingPassword'>Confirme Senha</label>
      </div>
      <div class='form-floating mb-3'>
        <input type='submit' name='submit' class='btn btn-primary' id='floatingPassword' value='Atualizar'>
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
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
</body>

</html>