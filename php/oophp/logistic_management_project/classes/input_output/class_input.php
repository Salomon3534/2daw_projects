<?php

declare(strict_types=1);

require_once __DIR__ . '/class_ui.php';

enum InputType {
    case INT;
    case STRING;
}

class SystemIO {
    public function ask(string $msg, InputType $itype, SystemUi $sysui): int|string {
        while (true) {
            $sysui->print($msg);

            $line = fgets(STDIN);
            if ($line === false) {
                $sysui->print("Entrada cerrada. Saliendo del programa.");
                exit(0);
            }
            $value = trim($line);

            switch ($itype) {
                case InputType::INT:
                    if (filter_var($value, FILTER_VALIDATE_INT) !== false) {
                        return (int) $value;
                    }
                    break;

                case InputType::STRING:
                    if ($value !== '') {
                        return $value;
                    }
                    break;
            }

            $sysui->print("Valor no válido. Inténtalo de nuevo.");
        }
    }
}
