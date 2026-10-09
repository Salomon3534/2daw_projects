<?php
class SystemUi {    
    public function print(string $msg) {
        echo $msg.PHP_EOL;
    }

    public function main_menu() {
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
?>