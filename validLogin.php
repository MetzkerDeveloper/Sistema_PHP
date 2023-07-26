<?php 
session_start();
// print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
  // acessa sistema
  include_once('conecta.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $senhaHash = md5($senha);
  
  $sql= "SELECT * FROM user WHERE email= '$email' and senha = '$senhaHash'";

  $result = $conn -> query($sql);


  if(mysqli_num_rows($result) < 1){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  else{
    $_SESSION['email'] = $email;
    $_SESSION['senha']= $senha;
    header('Location: sistema.php');
  }
}
else{
  // não acessa sistema.
  header('Location: login.php');
}

?>