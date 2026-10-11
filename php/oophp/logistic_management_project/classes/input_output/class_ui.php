<?php

declare(strict_types=1);

require_once __DIR__ . '/../managers/class_manager_dman.php';
require_once __DIR__ . '/../managers/class_manager_packet.php';

class SystemUi
{
    public function print(string|array $msg): void
    {
        if (is_array($msg)) {
            foreach ($msg as $line) {
                echo $line . PHP_EOL;
            }
            return;
        }
        echo $msg . PHP_EOL;
    }

    public function main_menu(): void
    {
        $this->print("");
        $this->print("MENU PRINCIPAL");
        $this->print("(1) registrar paquete");
        $this->print("(2) registrar repartidor");
        $this->print("(3) asignar paquete al repartidor");
        $this->print("(4) marcar paquete como entregado");
        $this->print("(5) listar paquetes y repartidores");
        $this->print("(0) salir");
        $this->print("");
    }

    public function general_view(ManagerDman $mdmans, ManagerPacket $mpcks): void
    {
        $this->print("");
        $this->print("VISTA GENERAL");
        $this->print("");

        $this->general_view_deliverymans($mdmans);
        $this->print("");
        $this->general_view_packets($mpcks);
    }

    public function general_view_deliverymans(ManagerDman $dmanager): void
    {
        $lines = $dmanager->list_dmans();

        $this->print("REPARTIDORES");
        $this->print($lines === [] ? "    (no hay repartidores registrados)" : $lines);
    }

    public function general_view_packets(ManagerPacket $pmanager): void
    {
        $lines = $pmanager->list_packets();

        $this->print("PAQUETES");
        $this->print($lines === [] ? "    (no hay paquetes registrados)" : $lines);
    }
}
