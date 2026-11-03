<?php
$host = "db";
$user = "usuario";
$pass = "usuariopass";
$bd   = "formulario_db";

mysqli_report(MYSQLI_REPORT_OFF);
$conexion = new mysqli($host, $user, $pass, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8mb4");

$nombre = trim($_POST["nombre"] ?? "");
$email  = trim($_POST["email"] ?? "");

echo "<h1>Resultado</h1>";

if ($nombre === "" || $email === "") {
    echo "<p>Error: faltan datos.</p>";
} else {
    $stmt = $conexion->prepare("INSERT INTO datosUsuario (nombre, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $email);

    if ($stmt->execute()) {
        echo "<p>Operación exitosa: datos guardados correctamente.</p>";
    } else {
        echo "<p>Error al guardar: " . htmlspecialchars($stmt->error) . "</p>";
    }
    $stmt->close();
}

echo "<h2>Usuarios registrados</h2>";
$resultado = $conexion->query("SELECT id, nombre, email, fecha FROM datosUsuario ORDER BY id");

if ($resultado && $resultado->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Fecha</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
        echo "<td>" . htmlspecialchars($fila["email"]) . "</td>";
        echo "<td>" . $fila["fecha"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay usuarios registrados.</p>";
}

echo '<p><a href="index.html">Volver al formulario</a></p>';
$conexion->close();
