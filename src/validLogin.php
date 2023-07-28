<?php 
session_start();
// print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
  // acessa sistema
  include_once('conexao/conecta.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $senhaHash = md5($senha).md5($senha);
  
  
  $sql= "SELECT * FROM users WHERE email_user = '$email' and password_user = '$senhaHash'";

  $result = $conn -> query($sql);

  if(mysqli_num_rows($result) < 1){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
  }
  else{
    $_SESSION['email'] = $email;
    $_SESSION['senha']= $senha;
    header('Location: sistema.php');
  }
}
else{
  // não acessa sistema.
  header('Location: index.php');
}

?>