<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">ESTUDOS PHP - WM / Dev</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastrar Novo Cliente</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="addcursos.php">Cursos</a>
        </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <div class="container my-4">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>USUARIO</th>
          <th>SENHA</th>
          <th>JOINING DATE</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "conecta.php";
        $sql = "select * from users";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[user]</td>
        <td>$row[password]</td>
        <td>$row[created_at]</td>
        <td>
                  <a class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
      </tbody>
    </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>