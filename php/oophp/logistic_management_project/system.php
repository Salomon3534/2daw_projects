<?php
include_once 'delivery_driver.php';
include_once 'packet.php';

class System {
    public function __construct(
        public array $all_packets,
        public array $all_delivery_drivers
    ) {}
    
    function main_menu() {
        echo "MENU PRINCIPAL\n";
        echo "(1) registrar paquete\n";
        echo "(2) registrar repartidor\n";
        echo "(3) asignar paquete al repartidor\n";
        echo "(4) marcar paquete como entregado\n";
        echo "(5) listar paquetes y repartidores\n";

        echo "\n";

        echo "(x) salir\n";
    }


    function general_view() {}

    function general_view_deliverymans() {}
    function general_view_packets() {}

    function get_input(string $msg) {
        
    }
}

$system = new System([],[]);


?>