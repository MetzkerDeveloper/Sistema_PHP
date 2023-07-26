 <?php
  $servername = ""; //server
  $dbusername = ""; // usuario
  $dbpassword = ""; //senha
  $dbname = ""; //nome da database.
  
  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
  if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
  }   
?>
