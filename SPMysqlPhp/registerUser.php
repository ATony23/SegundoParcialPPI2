<?php
$server = "developeros.com.mx";
$user = "develop7_ulsa_a";
$pass = "r00tUls@";
$db = "develop7_ulsa";

$conn = new mysqli($server, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//Salvando variables de pantalla anterior(Register)
$usuario = $_POST["username"];
$contraseña = $_POST["password"];
$llave = $_POST["key"];

echo "Antes del if";
if (isset($_POST["submit"])) {
    
  $sql = "CALL antonioRegisterUser('" . $usuario . "' , '" . $contraseña . "', '" . $llave . "');";

  if (mysqli_query($conn, $sql)) {
    echo "Todo bien";
  } else {
    echo "Error: " . $sql;
  }


  header("Location: login.php");
}
echo "Después";


$conn->close();
