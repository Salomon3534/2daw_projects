<?php # decimos que esto es PHP

// --- Variables y tipos dinámicos ---
$nombre = "Juan"; # declaramos la variable nombre con valor juan
$edad = 30; # declaramos la variable edad
$altura = 1.75; #declaramos la variable altura
$esEstudiante = true; # decimos que SI es un estudiante, declarando la variable

echo "Hola, soy " . $nombre . ".\n";
echo "Tengo " . $edad . " años y mido " . $altura . " metros.\n";

echo "Soy estudiante: " . ($esEstudiante ? "Sí" : "No") . "\n";

$edad = "treinta";
echo "Mi edad en texto es: " . $edad . "\n";

echo "---------------------------------\n";

// --- Constantes ---
define("PI", 3.14159);
const MAX_INTENTOS = 3;

echo "El valor de PI es: " . PI . "\n";
echo "Número máximo de intentos: " . MAX_INTENTOS . "\n";

echo "---------------------------------\n";

// --- Operadores aritméticos ---
$a = 10;
$b = 5;

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";
echo "Módulo (resto de la división): " . ($a % $b) . "\n";

echo "---------------------------------\n";

// --- Operadores de comparación ---
$x = 10;
$y = "10";

echo "x == y (igualdad de valor): ";
var_dump($x == $y);

echo "x === y (igualdad de valor y tipo): ";
var_dump($x === $y);
echo "---------------------------------\n";

$condicion1 = true;
$condicion2 = false;

echo "Condicion1 && Condicion2: ";
var_dump($condicion1 && $condicion2);

echo "Condicion1 || Condicion2: ";
var_dump($condicion1 || $condicion2);

?>
