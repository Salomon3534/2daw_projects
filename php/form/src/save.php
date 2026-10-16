<?php
$conn = new mysqli("db", "user", "admin", "formulario_db");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $email  = $_POST["email"] ?? "";

    $stmt = $conn->prepare("INSERT INTO datosUsuario (nombre, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $email);

    if ($stmt->execute()) {
        echo "<p>Datos guardados correctamente.</p>";
    } else {
        echo "<p>Error al guardar: " . htmlspecialchars($stmt->error) . "</p>";
    }
    $stmt->close();
}

$result = $conn->query("SELECT id, nombre, email, fecha FROM datosUsuario ORDER BY id");
?>
<h2>Usuarios registrados</h2>
<table border="1" cellpadding="5">
  <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Fecha</th></tr>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= htmlspecialchars($row["nombre"]) ?></td>
      <td><?= htmlspecialchars($row["email"]) ?></td>
      <td><?= $row["fecha"] ?></td>
    </tr>
  <?php endwhile; ?>
</table>
<p><a href="index.html">Volver al formulario</a></p>
<?php $conn->close(); ?>