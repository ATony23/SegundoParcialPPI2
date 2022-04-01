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
$name = $_POST["name"];
$author = $_POST["author"];
$year = $_POST["year"];


if (isset($_POST["submit"])) {
    
  $sql = "CALL antonioRegisterSong('" . $name . "' , '" . $author . "', '" . $year . "');";

  if (mysqli_query($conn, $sql)) {
      
    echo "Todo bien";
    header("Location: home.php");
  } else {
    echo "Error: " . $sql;
  }


}
echo "Después";


$conn->close();
