<?php
// biblioteca.php (Sintaxis PHP 8.2+)


class Libro {
    public function __construct(
        public readonly string $titulo,
        public readonly string $autor,
        private bool $disponible = true
    ) {}


    public function estaDisponible(): bool {
        return $this->disponible;
    }


    public function prestar(): bool {
        if ($this->disponible) {
            $this->disponible = false;
            return true;
        }
        return false;
    }


    public function devolver(): void {
        $this->disponible = true;
    }


    public function __toString(): string {
        $estado = $this->disponible ? "Disponible" : "Prestado";
        return "{$this->titulo} - {$this->autor} [{$estado}]";
    }
}


class Usuario {
    /** @var array<Libro> */
    private array $librosPrestados = [];


    public function __construct(
        public readonly string $nombre
    ) {}


    public function tomarPrestado(Libro $libro): bool {
        if ($libro->prestar()) {
            $this->librosPrestados[] = $libro;
            return true;
        }
        return false;
    }


    public function devolverLibro(Libro $libro): bool {
        foreach ($this->librosPrestados as $key => $l) {
            if ($l === $libro) {
                $l->devolver();
                unset($key);
                return true;
            }
        }
        return false;
    }
}


class Biblioteca {
    /** @var array<Libro> */
    private array $libros = [];
    /** @var array<Usuario> */
    private array $usuarios = [];


    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }


    public function agregarUsuario(Usuario $usuario): void {
        $this->usuarios[] = $usuario;
    }


    public function listarLibros(): void {
        foreach ($this->libros as $i => $libro) {
            echo ($i + 1) . ". " . $libro . PHP_EOL;
        }
    }


    public function getLibro(int $index): ?Libro {
        return $this->libros[$index] ?? null;
    }
    
    public function getUsuario(int $index): ?Usuario {
        return $this->usuarios[$index] ?? null;
    }


    public function listarUsuarios(): void {
        foreach ($this->usuarios as $i => $usuario) {
            echo ($i + 1) . ". " . $usuario->nombre . PHP_EOL;
        }
    }
}


// --- Programa Principal ---
$biblioteca = new Biblioteca();
$biblioteca->agregarLibro(new Libro("1984", "George Orwell"));
$biblioteca->agregarLibro(new Libro("El Hobbit", "J.R.R. Tolkien"));
$biblioteca->agregarLibro(new Libro("Cien Años de Soledad", "Gabriel García Márquez"));


$biblioteca->agregarUsuario(new Usuario("Ana"));
$biblioteca->agregarUsuario(new Usuario("Luis"));


function menu(): void {
    echo PHP_EOL . "==== Biblioteca CLI ====" . PHP_EOL;
    echo "1. Listar libros" . PHP_EOL;
    echo "2. Prestar libro" . PHP_EOL;
    echo "3. Devolver libro" . PHP_EOL;
    echo "4. Listar usuarios" . PHP_EOL;
    echo "0. Salir" . PHP_EOL;
    echo "Seleccione una opción: ";
}


do {
    menu();
    $opcion = trim((string) fgets(STDIN));

    switch ($opcion) {
        case "1":
            $biblioteca->listarLibros();
            break;

        case "2":
            procesarPrestamo($biblioteca);
            break;

        case "3":
            procesarDevolucion($biblioteca);
            break;

        case "4":
            $biblioteca->listarUsuarios();
            break;

        case "0":
            echo "Saliendo..." . PHP_EOL;
            break;

        default:
            echo "Opción inválida." . PHP_EOL;
            break;
    }
} while ($opcion !== "0");


function procesarPrestamo(Biblioteca $biblioteca): void {
    echo "Seleccione usuario:" . PHP_EOL;
    $biblioteca->listarUsuarios();
    $idUsuario = (int) trim((string) fgets(STDIN)) - 1;


    echo "Seleccione libro:" . PHP_EOL;
    $biblioteca->listarLibros();
    $idLibro = (int) trim((string) fgets(STDIN)) - 1;


    $usuario = $idUsuario;
    $libro = $idLibro;


    if ($usuario && $libro) {
        echo $libro
            ? "Libro prestado con éxito." . PHP_EOL 
            : "El libro ya está prestado." . PHP_EOL;
    }
}


function procesarDevolucion(Biblioteca $biblioteca): void {
    echo "Seleccione usuario:" . PHP_EOL;
    $biblioteca->listarUsuarios();
    $idUsuario = (int) trim((string) fgets(STDIN)) - 1;


    echo "Seleccione libro a devolver:" . PHP_EOL;
    $biblioteca->listarLibros();
    $idLibro = (int) trim((string) fgets(STDIN)) - 1;


    $usuario = $idUsuario;
    $libro = $idLibro;


    if ($usuario && $libro) {
        echo $libro
            ? "Libro devuelto con éxito." . PHP_EOL 
            : "El usuario no tenía este libro." . PHP_EOL;
    }
}