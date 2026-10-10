```php
<?php

enum InputType {
    case INT;
    case STRING;
}

class SystemIO {
    public function ask($msg, InputType $itype, SystemUi $sysui) {
        while (true) {
            $sysui->print($msg);

            $value = trim(fgets(STDIN));

            switch ($itype) {
                case InputType::INT:
                    if (is_int($value)) {
                        return (int) $value;
                    }
                    break;

                case InputType::STRING:
                    if (is_string($value)) {
                        return (string) $value;
                    }
                    break;
            }

            $sysui->print("Valor no válido. Inténtalo de nuevo.");
        }
    }
}

?>