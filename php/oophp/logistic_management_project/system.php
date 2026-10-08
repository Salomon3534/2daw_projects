<?php
include_once 'delivery_driver.php';
include_once 'packet.php';

class SystemUi {    
    function main_menu() {
        echo PHP_EOL;
        echo "MENU PRINCIPAL" . PHP_EOL;
        echo "(1) registrar paquete" . PHP_EOL;
        echo "(2) registrar repartidor" . PHP_EOL;
        echo "(3) asignar paquete al repartidor" . PHP_EOL;
        echo "(4) marcar paquete como entregado" . PHP_EOL;
        echo "(5) listar paquetes y repartidores" . PHP_EOL;

        echo PHP_EOL;

        echo "(x) salir" . PHP_EOL;
    }


    function general_view() {}

    function general_view_deliverymans() {}
    function general_view_packets() {}
}

class SystemIO {
    function get_input(string $msg) {
        echo $msg;
        return (fgets(STDIN));
    }

}

class SystemManager {
    
}

$system_ui = new SystemUi();
$system_io = new SystemIO();

$choice = -1;

while($choice != "x") {
    $system_ui->general_view();

    while (in_array($choice, ["1", "2", "3", "4", "5", "x"], true)) {
        $choice = $system_io->get_input("elige que acción deseas realizar: ");
    }

    switch ($choice) {
        case 1:

    }
}

?>