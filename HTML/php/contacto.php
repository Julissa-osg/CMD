<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  echo "<h2>Gracias por tu mensaje 💜</h2>";
  echo "<p><strong>Nombre:</strong> $nombre</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Mensaje:</strong> $mensaje</p>";
}
?>
