<?php
$server = "developeros.com.mx";
$user = "develop7_ulsa_a";
$pass = "r00tUls@";
$db = "develop7_ulsa";

$conn = new mysqli($server, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Salvando variables de pantalla anterior(login)
$usuario = $_POST["userName"];
$contraseña = $_POST["password"];
$llave = $_POST["key"];


if (isset($_POST["login"])) {

  $sql = "CALL antonioValidacion('" . $usuario . "' , '" . $contraseña . "', '" . $llave . "');";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    header("Location: home.php");
  } else {
    echo "Error: " . $sql .$mysqli->error;
  }
}


$conn->close();
