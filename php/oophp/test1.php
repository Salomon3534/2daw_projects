Ejecuta en la consola y después documenta cada una de las líneas de este script de php:

<?php
// biblioteca.php
//Este código utiliza una sintaxis intermedia / PHP 7.4+.
//Requiere como mínimo PHP 7.4 para ejecutarse debido a las propiedades //tipadas (private string $titulo). 

class Libro {
    private string $titulo;
    private string $autor;
    private bool $disponible;

    public function __construct(string $titulo, string $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponible = true;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

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
    private string $nombre;
    private array $librosPrestados = [];

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

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
                unset($this->librosPrestados[$key]);
                return true;
            }
        }
        return false;
    }
}

class Biblioteca {
    private array $libros = [];
    private array $usuarios = [];

    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }

    public function agregarUsuario(Usuario $usuario): void {
        $this->usuarios[] = $usuario;
    }

    public function listarLibros(): void {
        foreach ($this->libros as $i => $libro) {
            echo ($i+1) . ". " . $libro . PHP_EOL;
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
            echo ($i+1) . ". " . $usuario->getNombre() . PHP_EOL;
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

function menu() {
    echo PHP_EOL;
    echo "==== Biblioteca CLI ====" . PHP_EOL;
    echo "1. Listar libros" . PHP_EOL;
    echo "2. Prestar libro" . PHP_EOL;
    echo "3. Devolver libro" . PHP_EOL;
    echo "4. Listar usuarios" . PHP_EOL;
    echo "0. Salir" . PHP_EOL;
    echo "Seleccione una opción: ";
}

do {
    menu();
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case "1":
            $biblioteca->listarLibros();
            break;

        case "2":
            echo "Seleccione usuario:" . PHP_EOL;
            $biblioteca->listarUsuarios();
            $idUsuario = (int)trim(fgets(STDIN)) - 1;

            echo "Seleccione libro:" . PHP_EOL;
            $biblioteca->listarLibros();
            $idLibro = (int)trim(fgets(STDIN)) - 1;

            $usuario = $biblioteca->getUsuario($idUsuario);
            $libro = $biblioteca->getLibro($idLibro);

            if ($usuario && $libro) {
                if ($usuario->tomarPrestado($libro)) {
                    echo "Libro prestado con éxito." . PHP_EOL;
                } else {
                    echo "El libro ya está prestado." . PHP_EOL;
                }
            }
            break;

        case "3":
            echo "Seleccione usuario:" . PHP_EOL;
            $biblioteca->listarUsuarios();
            $idUsuario = (int)trim(fgets(STDIN)) - 1;

            echo "Seleccione libro a devolver:" . PHP_EOL;
            $biblioteca->listarLibros();
            $idLibro = (int)trim(fgets(STDIN)) - 1;

            $usuario = $biblioteca->getUsuario($idUsuario);
            $libro = $biblioteca->getLibro($idLibro);

            if ($usuario && $libro) {
                if ($usuario->devolverLibro($libro)) {
                    echo "Libro devuelto con éxito." . PHP_EOL;
                } else {
                    echo "El usuario no tenía este libro." . PHP_EOL;
                }
            }
            break;

        case "4":
            $biblioteca->listarUsuarios();
            break;

        case "0":
            echo "Saliendo..." . PHP_EOL;
            break;

        default:
            echo "Opción inválida." . PHP_EOL;
    }

} while ($opcion !== "0");