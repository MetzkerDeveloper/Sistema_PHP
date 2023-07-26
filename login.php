<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- style -->
  <link rel="stylesheet" href="login.css">
  <title>Login WM DEV</title>
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
  }

  .voltar {
    position: absolute;
    right: 20px;
    text-decoration: none;
    font-weight: bold;
    color: #000;
    border: 1px solid rgba(0, 0, 0, 0.9);
    padding: 10px;
    border-radius: 5px;
    color: #fff;
  }

  .voltar:hover {
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
    height: 500px;
  }

  form>h2 {
    text-align: center;
  }

  .container>form {
    display: flex;
    flex-direction: column;
    width: 200px;
    padding: 10px;
    margin-top: 10px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.9);
    border-radius: 5px;
    color: #fff;
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

  .recupSenha {
    position: absolute;
    text-align: center;
    right: 46.5%;
    top: 49.5%;
    border: none;
    border-top: 1px solid #ccc;
    border-radius: 0px;
    font-size: 12px;
    color: #fff;
    text-decoration: none;
  }

  .recupSenha:hover {
    background: none;
    border: none;
    color: rgba(250, 0, 0, 0.9);
    border-top: 1px solid #ccc;
    border-radius: 0px;
  }
  </style>
</head>

<body>
  <a href="home.php" class="voltar">Voltar </a>
  <div class="container">
    <form action="validLogin.php" method="POST">
      <h2>Login</h2>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <label for="senha">Senha:</label>

      <input type="password" name="senha" id="senha">

      <input type="submit" name="submit" value="Acessar" class="btnInput">
      <!-- <p><a href="login.php" class="recupSenha">Esqueci minha senha!</a></p> -->
    </form>




  </div>

</body>

</html>