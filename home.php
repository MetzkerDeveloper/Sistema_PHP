<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home WM DEV</title>

  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
  }

  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 500px;
  }

  h2 {
    color: #fff;
  }

  .acessos {
    background-color: rgba(0, 0, 0, 0.4);
    width: 15%;
    padding: 20px;
    border-radius: 5px;

  }

  a {
    text-decoration: none;
    color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.9);
    padding: 10px;
    border-radius: 5px;
  }

  a:hover {
    background: rgba(0, 0, 0, 0.9);
    color: #fff;
  }
  </style>
</head>

<body>

  <div class="container">
    <h2>Acesso ao sistema</h2>
    <div class="acessos">
      <a href="login.php">Login</a>
      <a href="cadastro.php">Cadastro</a>
    </div>
  </div>
</body>

</html>